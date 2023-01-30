<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function greetUsers($name = null){
        return "Hello world " . $name;
    }
}
