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
    return view ('welcome');
});

/*
Route::get('/book', function () {
    return 'Book Page';
})->name('book.detail');

*/

/*

Route::get('/test', function () {
    $url = route('book.detail', ['id' => 3]);
    return 'this is Url:'. $url;
});

*/

Route::get('/test', 'TestController@index');
Route::get('/contact', 'TestController@contact');
Route::get('/book/{id}', 'TestController@book');

Route::get('/insert', function() {

    DB::insert('INSERT INTO books (Title, Author) VALUES (? , ?)',
    ['myBook', 'MyAuthor']);
       return 'Insert into db';
});
