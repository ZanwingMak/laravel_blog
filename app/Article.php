<?php namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Article extends Model {

	protected $fillable=['title','content','published_at','user_id'];

	protected $dates = ['published_at','likes'];

	public function setPublishedAtAttribute($date){
		$this->attributes['published_at'] = Carbon::createFromFormat('Y-m-d',$date);
	}

	public function scopePublished($query){
		$query->where('published_at','<=',Carbon::now());
	}

    public function scopeLikes($query,$request){
        //dd($request);
        for($i=0;$i<count($request);$i++){
            $query = $query->orwhere(
                $request[$i][0],'like',$request[$i][1]
            );
        }
    }


	public function user(){//----------------------------↓
		return $this->belongsTo('App\User');//$article->user 找出(文章)对应的用户
	}



//D:\phpStudy\WWW\Laravel\learnlaravel5>php artisan tinker
//Psy Shell v0.4.1 (PHP 5.5.30 鈥?cli) by Justin Hileman
//>>> $user=App\User::first();
//=> <App\User #00000000670c67b9000000003a5088e0> {
//id: 1,
//name: "admin",
//email: "admin@qq.com",
//created_at: "2016-03-24 15:43:16",
//updated_at: "2016-03-24 21:30:50"
//}
//>>> $user->articles
//=> <Illuminate\Database\Eloquent\Collection #00000000670c67bf000000003a5088e0>
//
//<App\Article #00000000670c67bc000000003a5088e0> {
//           id: 1,
//           title: "update title",
//           content: "my content",
//           published_at: "2016-03-23 10:39:48",
//           created_at: "2016-03-23 10:40:46",
//           updated_at: "2016-03-23 18:47:31",
//           intro: "",
//           user_id: 1
//       },
//       <App\Article #00000000670c67b3000000003a5088e0> {
//           id: 2,
//           title: "second update title",
//           content: "my second content",
//           published_at: "2016-03-23 18:57:41",
//           created_at: "2016-03-23 18:54:00",
//           updated_at: "2016-03-23 18:57:51",
//           intro: "",
//           user_id: 1
//       },
//       <App\Article #00000000670c67b2000000003a5088e0> {
//           id: 10,
//           title: "haaaaaaaaaaaa",
//           content: "haaaaaaaaaaa",
//           published_at: "2016-03-24 14:43:01",
//           created_at: "2016-03-24 14:43:02",
//           updated_at: "2016-03-24 14:43:02",
//           intro: "",
//           user_id: 1
//       },
//       <App\Article #00000000670c67b1000000003a5088e0> {
//           id: 9,
//           title: "333333",
//           content: "3333333333333",
//           published_at: "2016-03-24 14:06:07",
//           created_at: "2016-03-24 14:06:08",
//           updated_at: "2016-03-24 14:06:08",
//           intro: "",
//           user_id: 1
//       },
//       <App\Article #00000000670c67b0000000003a5088e0> {
//           id: 8,
//           title: "5555555",
//           content: "55555555555555",
//           published_at: "2016-03-27 13:28:19",
//           created_at: "2016-03-24 13:28:20",
//           updated_at: "2016-03-24 13:28:20",
//           intro: "",
//           user_id: 1
//       },
//       <App\Article #00000000670c67b7000000003a5088e0> {
//           id: 7,
//           title: "12313123123UPDATE",
//           content: "123124124124UPDATE",
//           published_at: "2016-03-24 14:29:40",
//           created_at: "2016-03-24 13:26:29",
//           updated_at: "2016-03-24 14:29:40",
//           intro: "",
//           user_id: 1
//       }
//   ]

//>>> $article=App\Article::first();
//=> <App\Article #000000006aa670760000000018c7b28a> {
//id: 1,
//title: "update title",
//content: "my content",
//published_at: "2016-03-23 10:39:48",
//created_at: "2016-03-23 10:40:46",
//updated_at: "2016-03-23 18:47:31",
//intro: "",
//user_id: 1
//}
//>>> $article->user;
//=> <App\User #000000006aa670740000000018c7b28a> {
//       id: 1,
//       name: "admin",
//       email: "admin@qq.com",
//       created_at: "2016-03-24 15:43:16",
//       updated_at: "2016-03-24 21:30:50"
//   }
//>>> $article->user->name;
//=> "admin"

}
