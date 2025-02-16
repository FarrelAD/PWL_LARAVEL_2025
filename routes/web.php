<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return 'Selamat datang!';
});

Route::get('/hello', function() {
    return 'Hello World!';
});
Route::get('/world', function() {
    return 'World';
});

Route::get('/about', function() {
    return '
    <h1>About me:</h1>
    <ul>
        <li>Name: Farrel Augusta Dinata</li>
        <li>NIM: 2341720081</li>';
});

Route::get('/user/{name?}', function ($name = 'Johnny') {
    return "Nama saya: $name";
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return "Pos ke-$postId dan komenter ke-$commentId";
});

Route::get('/articles/{id}', function($id) {
    return "Ini adalah halaman artikel dengan ID: $id";
});
