<?php

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

Route::get("/posts","c_post@showpost");
Route::group(["middleware" =>["auth"]],function(){
    Route::get("/addpost","c_post@addpost");
    Route::post("/insertpost","c_post@insertpost");
    Route::get("/editpost/{id}","c_post@editpost");
});

Route::post("/updatepost/{id}","c_post@updatepost")->middleware("auth");




Route::get("/logout",function(){
    Auth::logout();
    return redirect("/posts");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
