<?php

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

Route::get('/','StaticPagesController@home');//第一个参数明确url，第二个参数明确URL的控制器动作
Route::get('/help','StaticPagesController@help');
Route::get('/about','StaticPagesController@about');
