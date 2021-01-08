<?php

namespace App\Http\Controllers;


use App\Models\User;
use Barryvdh\Debugbar\Facade as DebugBar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class UserController extends Controller
{
    //
    public function index(Request $request,$id){
//        DebugBar::info($id.'::::::'.$uid);
//        //使用 path()方法， 可以得到当前的 uri 路径
//        DebugBar::info($request->path());
//        //使用 is()方法， 可以判断当前的 uri 是否匹配；
//        DebugBar::info($request->is('user/*'));
//        //使用 url()和 fullUrl()得到 url 地址， 带参数和不带参数区别,?后面参数不一样
//        DebugBar::info($request->url());
//        DebugBar::info($request->fullUrl());
//        //使用 isMethod()来判断 HTTP 请求的方式， get、 post 等等；
//        DebugBar::info($request->isMethod('GET'));
        //请求常用方法
        //第二个参数为默认值
//        return $request->input('name','没有');
        //空参数和all()一样
//        return $request->input();
        //动态方式获取
//        return  $request->input('select.0.b');
        //常用方法
        //返回布尔值
//        DebugBar::info($request->boolean('id'));
//        //返回ip
//        DebugBar::info($request->ip());
//        //只获取固定参数
//        DebugBar::info($request->only(['age','id']));
//        //排除不需要的参数
//        DebugBar::info($request->except('age'));
//        //判断参数是否存在
//        DebugBar::info($request->has('id'));
//        //判断数组中的参数是否存在一个
//        DebugBar::info($request->hasAny(['uid','info']));
//        //判断参数存在，且不为空
//        DebugBar::info($request->filled('id'));
//        //判断参数不存在，为空也可
//        DebugBar::info($request->missing('id'));
//        return view('user');
        //生成url
//        $user = User::find(19);
//        return url('/user/'.$user->id);
        //得到当前url,不带参数
//        return url()->current();
        //得到当前url，带参数
//        return url()->full();
        //得到上一个url
//        return url()->previous();
//        return \request()->all();
        //直接通过控制器返回url
//        return action([UserController::class,'userForm'],['id'=>5]);
        //生成一个签名 URL， 在 URL 后面追加一个哈希签名字符串， 用于验证；
//        return url()->signedRoute('user.id',["id"=>12]);
//        return $request->hasValidSignature();
        //cookie
        //获取cookie，laravel中的cookie是加密的，
//        return $request->cookie('laravel_session');
//        return Cookie::get('laravel_session');
        //创建cookie
        //response方法
//        return response('hello cookie')->cookie('name','mr.du',10);
        //queue方法
//        Cookie::queue('age',88,10);
        //先使用cookie助手函数创建cookie实例，然后再写入，这样更灵活
        //完整版，后面四种：路径，域名，https，仅 http
//        cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly)
//        $cookie = \cookie('gender', '男', 10);
//        Cookie::queue($cookie);
//        return response('dsa')->cookie('name');
        return Cookie::get('gender');
    }
    public function userForm(){
        return view('user_form');
    }
}
