<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SitesController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function hello(){
//        $name = '<span style="color:red">admin</span>';
//        return view('hello.hello')->with([
//            'name'=>$name,
//            'hehe'=>'hehe'
//        ]);

//        $name = '<span style="color:red">admin</span>';
//        $hehe = 'hehe';
//        return view('hello.hello',compact('name','hehe'));

        $data = array();
        $data['name'] = '<span style="color:red">admin</span>';
        $data['hehe'] = 'hehe';

        $aaa = ['111','222','333'];

        return view('hello.hello',$data,compact('aaa'));
    }

    public function text(){
        return view('hello.text');
    }
}
