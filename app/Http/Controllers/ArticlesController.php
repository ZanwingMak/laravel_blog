<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;


class ArticlesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

		//dd(\Auth::user()); //返回登录用户的信息

		//$articles = Article::all();

		//$articles = Article::latest()->where('published_at','<=',Carbon::now())->get();
		$articles = Article::latest()->published()->paginate(5);//Article.php scopePublished()
		$articles->setPath('articles');
		//dd($articles);
		$new_articles = Article::latest()->published()->take(10)->get();//取10条

		$right_sidebar = true;

		$best_user = \App\User::latest()->take(10)->get();

		return view('articles.index',compact('articles','new_articles','right_sidebar','best_user'));
		//return $articles;
	}


	public function space($user_id=null)//默认为null
	{
		//如果user_id为null表示没传参数，如果登录了则默认用户自己的user_id，如果没登录着返回首页
		//如果穿了user_id则不管有没有登录使用传来的user_id，如果user_id不存在,返回首页
		if($user_id == null){
			if(\Auth::check()){
				$user_id = \Auth::user()->id;
			}else{
				return redirect('/articles');
			}
		}else{
			$user_id = (int)$user_id;
		}

		$user = \App\User::where('id',$user_id)->first();

		if($user){
			$articles = $user->articles()->latest()->published()->paginate(5);
			$articles->setPath('space');
		}else{
			return redirect('/articles');
		}

		$new_articles = Article::latest()->published()->take(10)->get();
		$right_sidebar = true;
		$best_user = \App\User::latest()->take(10)->get();

		return view('articles.space',compact('articles','user','new_articles','right_sidebar','best_user'));

	}

	public function admin(){
		if(\Auth::check()){
			$user = \Auth::user();
			$myarticles = $user->articles()->latest()->published()->paginate(10);
			$myarticles->setPath('admin');
			$center = true;
			return view('articles.admin',compact('myarticles','center'));
		}else{
			return redirect('/home');
		}
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		if(\Auth::check()){
			$center = true;
			return view('articles.create',compact('center'));
		}else{
			return redirect('/home');
		}

	}


	public function search(Request $request){
		$post_keywords = $request->search;
		$keywords = preg_replace ( "/\s(?=\s)/","\\1", $post_keywords );//连续多格空格只留一个
		$keywords = urlencode($keywords);//编码
		//过滤所有标点符号并替换成空格
		$keywords = preg_replace("/(%7E|%60|%21|%40|%23|%24|%25|%5E|%26|%27|%2A|%28|%29|%2B|%7C|%5C|%3D|\-|_|%5B|%5D|%7D|%7B|%3B|%22|%3A|%3F|%3E|%3C|%2C|\.|%2F|%A3%BF|%A1%B7|%A1%B6|%A1%A2|%A1%A3|%A3%AC|%7D|%A1%B0|%A3%BA|%A3%BB|%A1%AE|%A1%AF|%A1%B1|%A3%FC|%A3%BD|%A1%AA|%A3%A9|%A3%A8|%A1%AD|%A3%A4|%A1%A4|%A3%A1|%E3%80%82|%EF%BC%81|%EF%BC%8C|%EF%BC%9B|%EF%BC%9F|%EF%BC%9A|%E3%80%81|%E2%80%A6%E2%80%A6|%E2%80%9D|%E2%80%9C|%E2%80%98|%E2%80%99|%EF%BD%9E|%EF%BC%8E|%EF%BC%88)+/",' ',$keywords);
		$keywords = urldecode($keywords);//解码
		if($keywords != ' '){
			$search_keywords = explode(' ',$keywords);//把所有关键词分割成数组
			$likes = array();
			for($i=0;$i<count($search_keywords);$i++){
				$likes[] =['title','%'.$search_keywords[$i].'%'];
				$likes[] =['content','%'.$search_keywords[$i].'%'];
			}
			//dd($likes);
			//查询标题或正文包含关键字的文章
			$articles = Article::latest()->likes($likes)->published()->paginate(5);
			$articles->setPath('search');

		}else{//如果关键字只有空格
			$keywords = null;
			$articles = null;
		}

		$new_articles = Article::latest()->published()->take(10)->get();
		$right_sidebar = true;
		$best_user = \App\User::latest()->take(10)->get();

		return view('articles.search',compact('keywords','articles','new_articles','right_sidebar','best_user'));
	}


//	public function delete(Request $request){
//		dd($request->ids);
//	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

				        //php artisan make:request CreateArticleRequset
	public function store(Requests\CreateArticleRequset $request)//默认用：Request $request
	{
		//数据提交过来的时候首先回去Requests\CreateArticleRequset里验证
		//如果不通过就不会执行下面的代码，并重定向到之前的页面

		//dd($request->all());
		//获取某个字段的值
		//dd($request->get('title')); //获取name='title'

		//接收post过来的数据
		//存入数据库
		//重定向
		//$input['published_at'] = Carbon::now();
		//dd(array_merge(['user_id'=>\Auth::user()->id],$request->all()));

		if(\Auth::check()){
			Article::create(array_merge(['user_id'=>\Auth::user()->id],$request->all())); //像在tinker里那样
			return redirect('./articles');
		}else{
			return redirect('/home');
		}



	}
		//另一种表单验证方法
//	public function store(Request $request)
//	{
//		$this->validate($request,[//第二个参数和Requests\CreateArticleRequset里一样
//				'title'=>'required|min:3',
//				'content'=>'required|min:10',
//				'published_at'=>'required'
//		]);
//		Article::create($request->all()); //像在tinker里那样
//		return redirect('./articles');
//
//	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */



	public function show($id)
	{
		//$article = Article::find($id);

		$article = Article::findorFail($id);

		//dd($article->created_at->year); // 返回年份
		//dd($article->created_at->diffForHumans()); // 返回发表于"xx minutes ago"
		//但是用published_at就会报错，因为默认情况下没有把published_at作为Carbon对象处理
		// Article.php ---> protected $dates = ['published_at']; 即可
		//dd($article->published_at->year); // 返回年份
		//dd($article->published_at->diffForHumans()); // 返回发表于"xx minutes ago"

		//如何设置 diffForHumans() 的语言呢？如果做中文站，
		//肯定是希望展示为 “x 分钟之前” ，而不是 “x minutes ago”
		//可以在app/Providers/AppServiceProvider.php的boot()方法加上：
		//\Carbon\Carbon::setLocale('zh');  //不一定有效



		//return  $article;
		//dd($article); 调试
//		@if(is_null($article)){
//			abort(404);
//		}

		$new_articles = Article::latest()->published()->take(10)->get();
		$center = true;


		return view('articles.show',compact('article','new_articles','right_sidebar','center'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		if(\Auth::check()){
			$article = Article::findorFail($id);
			//dd($article->user_id);
			if($article->user_id == \Auth::user()->id){
				$center = true;
				return view('articles.edit',compact('article','center'));
			}else{
				return redirect('articles');
			}
		}else{
			return redirect('/home');
		}
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Requests\CreateArticleRequset $request,$id)//Request $request,$id
	{
		if(\Auth::check()){

			$article = Article::findorFail($id);
			//dd($article->user_id);
			if($article->user_id == \Auth::user()->id){
				$article->update($request->all());
				return redirect('/articles/'.$id);
			}else{
				return redirect('articles');
			}
		}else{
			return redirect('/home');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Request $request){
		//dd($request->ids);
		$res = Article::whereIn('id',$request->ids)->delete();
		if($res){
			return $res;
		}

	}


}

