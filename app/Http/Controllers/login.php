<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
public function login(){
    return view ("auth.login");

}
public function register () {

    return view ("auth.register");

}
public function registerUser (Request $request){
    echo "Value posted";
}
}
