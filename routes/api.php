<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PostController;
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


//create this route for get all posts
Route::get('/posts',[PostController::class,'index']);

//create this route for add posts
Route::post('/post',[PostController::class,'store']);

//create this route for get specific post
Route::get('/post/{id}',[PostController::class,'show']);

//create this route for update specific post
Route::put('/post/{id}',[PostController::class,'update']);

//create this route for delete specific post
Route::delete('/post/{id}',[PostController::class,'destroy']);
