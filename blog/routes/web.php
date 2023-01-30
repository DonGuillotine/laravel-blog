<?php

use Illuminate\Support\Facades\DB;
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

Route::get('/',[\App\Http\Controllers\MyListsOfDoom::class,'shop'])->name('my.shop');

//Route::get('blog', function (){
//   DB::insert('insert into users(name, email) values(?,?)',['php', 'Go to hell']) ;
//});

//PASSING PARAMETERS TO ROUTES
Route::get('posts/{name?}', function($name=null){
   return "This is a post " . $name;
});

//PASSING CONSTRAINTS TO ROUTES::This will only accept urls with letters
Route::get('category/{id?}', function ($id=null){
    return "The product id is " . $id;
})->where('category', '[a-zA-Z]+');

//PASSING CONSTRAINTS TO ROUTES::This will only accept urls with numbers
Route::get('pages/{number}', function ($number = null){
    return "The number of pages are: " . $number;
})->where('number','[0-9]+');

Route::get('home/{name?}', [\App\Http\Controllers\HomePageController::class,'greetUsers'])->name('home.greetUsers');

Route::get('index', [\App\Http\Controllers\IndexUserController::class,'hello'])->name('index.hello');

