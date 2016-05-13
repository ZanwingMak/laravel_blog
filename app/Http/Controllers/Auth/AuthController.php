<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct(Guard $auth, Registrar $registrar)
	{
		$this->auth = $auth;
		$this->registrar = $registrar;

		$this->middleware('guest', ['except' => 'getLogout']);
	}

	public function redirectToProvider()
	{
		return \Socialite::with('weibo')->redirect();
	}

	public function handleProviderCallback()
	{
		$user = \Socialite::with('weibo')->user();
		dd($user);
//		if($user){
//			$token = $user->token;
//			$weibo_id = $user->getId();
//			$username = $user->getNickname();
//			//$img = $user->getAvatar();
//			//var_dump($user->getName());
//			//获取用户邮箱需要到"接口管理->申请权限->用户邮箱高级读取接口"申请,前提是要提交审核~
//			$email = $user->getEmail();
//
//			if(\App\User::where('weibo_id','=',$weibo_id)->first){
//				return view('articles');
//			}else{
//				$data = array(
//						'weibo_id'=>$weibo_id,
//						'name'=>$username,
//						'email'=>$email,
//						'password'=>$token
//				);
//				App\Services\Registrar::create($data);
//			}
//		}
	}


}
