<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Check
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
//    public function handle(Request $request, Closure $next)
//    {
//
//        //编写验证方法
//        if ($request->get('id') != 1){
//            return redirect(url('/login'));
//        }
//        //固定格式，继续执行
//        return $next($request);
//    }
    /**
     * Handle an incoming request.
     * 后置中间件
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //先执行主体代码
        $response = $next($request);
        //编写验证方法
        if ($request->get('id') != 1){
            return redirect(url('/login'));
        }
        //固定格式，继续执行
        return $response;
    }
}
