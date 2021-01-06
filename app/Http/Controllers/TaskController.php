<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class TaskController extends Controller
{
    //
    public function index(){
//        echo route('task.index',['id'=>10]);

//        return "</br>welcome";
//        return redirect()->route('task.read',['id'=>20]);
//        dump(Route::currentRouteAction());
//        return [1,2,3];
//        return response([1,2,3]);
//        return response()->json([1,2,3]);
//        return response([1,2,3],'201');
//        return response('<b>index</b>')->header('Content-Type','text/plain');
//        return response()->view('task',['id'=>12],201)->header("Content-Type","text/plain");
//        return redirect()->route('task.read',['id'=>12]);
        return \route('blogs.store');
    }
    public function read($id){
        return 'id:'.$id;

    }
    public function form(){
        return view('form');
    }
}
