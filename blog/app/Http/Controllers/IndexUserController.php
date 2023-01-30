<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexUserController extends Controller
{
    public function hello(){
        $user = "JOHN";
        $user_list = array(
            "name" => "JOHN",
            "email" => "donald@gmail.com",
            "subject" => "Hello World"
        );
        return view('home', compact('user', 'user_list'));
    }
}
