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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/hello', function () {
//     echo "hello world!";
// });

Route::get("/hello", "BooksController@hello");
Route::get("/index", "BooksController@index");
Route::get("/create-form", "BooksController@createForm");
Route::post("/author/create", "AuthorsController@authorCreate"); # 登録の際に通過
Route::post("/book/create", "BooksController@bookCreate"); # 画面遷移ナシ
