<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomeController;
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

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/hello', [WelcomeController::class, 'hello']);
Route::get('/world', function() {
    return 'World';
});



Route::get('/user/{name?}', function ($name = 'Johnny') {
    return "Nama saya: $name";
});

Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return "Pos ke-$postId dan komenter ke-$commentId";
});


Route::middleware(['first', 'second'])->group(function () {
    Route::get('/user/profile', function() {
        return "Ini adalah halaman dari route /user/profile";
    })->name('profile');
});

Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        return "Akun: $account. ID: $id";
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
});


Route::prefix('admin')->group(function () {
    Route::get('/user', [UserController::class, 'index']);
    Route::get('/post', [PostController::class, 'index']);
    Route::get('/event', [EventController::class, 'index']);
});

Route::redirect('/here', '/there');

Route::get('/there', function () {
    return "Hey! Do you come from /here route ?";
});

Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);