<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});


Route::get('/post', [PostController::class, 'index']);
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Santri Pesisir",
        "email" => "santripesisir@gmail.com",
        "image" => "logo.png"
    ]);
});


//halaman single post

Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Category',
        'categories' => Category::all()
    ]);
});
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'title' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,

    ]);
});

Route::get('/author/{author:username}', function (User $author) {
    return view('posts', [
        'title' => 'User Post',
        'blog' => $author->posts,

    ]);
});
