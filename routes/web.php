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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('index',[
    'as'=>'trang-chu',
    'uses'=>'PageController@getIndex'
]);

Route::get('loai-san-pham/{type}',[
    'as'=>'loai-san-pham',
    'uses'=>'PageController@getLoai_sanpham'
]);

Route::get('chi-tiet-san-pham/{type}',[
    'as'=>'chi-tiet-san-pham',
    'uses'=>'PageController@getChitietsp'
]);

Route::get('lien-he',[
    'as'=>'lien-he',
    'uses'=>'PageController@getLienhe'
]);

Route::get('gioi-thieu',[
    'as'=>'gioi-thieu',
    'uses'=>'PageController@getGioithieu'
]);
Route::get('dang-nhap',[
    'as'=>'dang-nhap',
    'uses'=>'PageController@getLogin'
]);
Route::post('dang-ky',[
    'as'=>'dang-ky',
    'uses'=>'PageController@postSignup'
]);