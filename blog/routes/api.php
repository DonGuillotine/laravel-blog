<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//SENDING MULTIPLE SPECIFIED REQUESTS
Route::match(['get', 'post'], 'catch', function (Request $req){
    return "The Request type is " . $req->method();
});

//SENDING ANY REQUESTS
Route::any('games', function (Request $req){
    return $req->method();
});
