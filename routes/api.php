<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use \App\Http\Controllers\RoleController;
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

/*-----------------------------------------Get All Data-----------------------------------------*/
//create this route for get all posts
Route::get('/posts',[PostController::class,'index']);

Route::get('/comments',[CommentController::class,'index']);

Route::get('/roles',[RoleController::class,'index']);



/*-----------------------------------------Add Data-----------------------------------------*/
//create this route for add posts
Route::post('/post',[PostController::class,'store']);

//create this route for add comments
Route::post('/comment/{id}',[CommentController::class,'store']);

Route::post('/role',[RoleController::class,'store']);

Route::post('/user',[RoleController::class,'addUser']);

/*-----------------------------------------Get Specific Data-----------------------------------------*/
//create this route for get specific post
Route::get('/post/{id}',[PostController::class,'show']);



/*-----------------------------------------Update Data-----------------------------------------*/
//create this route for update specific post
Route::put('/post/{id}',[PostController::class,'update']);




/*-----------------------------------------Delete Data-----------------------------------------*/
//create this route for delete specific post
Route::delete('/post/{id}',[PostController::class,'destroy']);



/*-----------------------------------------get sub table Data using parent id's-----------------------------------------*/
Route::get('/comment/{id}',[CommentController::class,'getCommentUsingPostId']);
