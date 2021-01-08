<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index(){
        return "管理员，您好";
    }
    public function login(){
        echo '您好请登录！';
    }
}
