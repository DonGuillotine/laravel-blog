<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyListsOfDoom extends Controller
{
    public function shop(){
        $fruits = array('apple','orange','pineapple','lemon');
        return view('welcome',compact('fruits'));
    }
}
