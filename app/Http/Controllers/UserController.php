<?php

namespace App\Http\Controllers;


use Barryvdh\Debugbar\Facade as DebugBar;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(Request $request,$id,$uid){
        DebugBar::info($id.'::::::'.$uid);
        //使用 path()方法， 可以得到当前的 uri 路径
        DebugBar::info($request->path());
        //使用 is()方法， 可以判断当前的 uri 是否匹配；
        DebugBar::info($request->is('user/*'));
        //使用 url()和 fullUrl()得到 url 地址， 带参数和不带参数区别,?后面参数不一样
        DebugBar::info($request->url());
        DebugBar::info($request->fullUrl());
        //使用 isMethod()来判断 HTTP 请求的方式， get、 post 等等；
        DebugBar::info($request->isMethod('GET'));
        return view('user');
//        return \request()->all();
    }
}
