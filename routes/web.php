<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index',function (){
    return 'hello world';
});
Route::match(['get','post'],'/index/{id}',function ($id){
    return 'hhhh'.$id;
});
Route::get('task',[\App\Http\Controllers\TaskController::class,'index']);
//Route::get('task/read/{id}',[\App\Http\Controllers\TaskController::class,'read'])->where('id','[0-9]+');
//Route::get('task/read/{id}',[\App\Http\Controllers\TaskController::class,'read'])->where('id','.*');
Route::get('task/read/{id}',[\App\Http\Controllers\TaskController::class,'read']);
Route::view('task','task',['id'=>10]);
Route::get('task',[\App\Http\Controllers\TaskController::class,'index'])->name('task.index');
Route::get('task/read/{id}',[\App\Http\Controllers\TaskController::class,'read'])->name('task.read');
Route::get('task/form',[\App\Http\Controllers\TaskController::class,'form']);
Route::any('task/getform',function (){
    return request()->method();
});
Route::get('user/{id}/{uid}',[\App\Http\Controllers\UserController::class,'index']);

Route::get('data/index',[\App\Http\Controllers\DataController::class,'index']);
Route::get('data/find',[\App\Http\Controllers\DataController::class,'find']);

Route::resource('blogs',\App\Http\Controllers\BlogController::class);
Route::resource('blogs.comments',\App\Http\Controllers\CommentController::class)->shallow();

//Route::fallback(function (){
//    return redirect('/');
//});
