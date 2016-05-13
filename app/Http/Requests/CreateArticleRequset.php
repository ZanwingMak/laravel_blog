<?php namespace App\Http\Requests;

use App\Article;
use App\Http\Requests\Request;

class CreateArticleRequset extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{

//		if(\Auth::check()){
//			$tmp = explode('/',\Auth::getRequest()->requestUri);
//			//获取传来的文章id
//			$article_id = (int)(end($tmp));
//			//通过文章id获取该文章对象
//			$article = Article::findorFail($article_id);
//			//获取该文章的用户id
//			$article_owner_id = $article->user_id;
//			//获取当前登录用户的id
//			$user_id = \Auth::user()->id;;
//			//如果文章的用户id等于当前登录用户的id，放行通过
//			if($user_id == $article_owner_id){
//				return true;
//			}
//		}else{
//			return false;
//		}
		if(\Auth::check()){
			return true;
		}else{
			return false;
		}
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules() //规则
	{

		return [//更多验证规则可以去看官方文档
				//如果有多个规则可以用"|"隔开 'required|email'、'required|min:6'
			'title'=>'required|min:3|max:50',
			'content'=>'required|min:10|max:3000',
			'published_at'=>'required'
		];

//		如果有多种情况：
//		$rules = [//更多验证规则可以去看官方文档
//			//如果有多个规则可以用"|"隔开 'required|email'、'required|min:6'
//				'title'=>'required|min:3',
//				'content'=>'required|min:10',
//				'published_at'=>'required'
//		];
//		if(xxxxxx){
//			$rules = [
//					xxxxxxxxxxxxxxx
//					xxxxxxxxxxxxxxx
//					xxxxxxxxxxxxxxx
//			];
//			return $rules
//		}
//
//		return $rules;




	}

}
