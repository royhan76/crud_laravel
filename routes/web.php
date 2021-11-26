<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
        "active" => 'home',

    ]);
});


Route::get('/post', [PostController::class, 'index']);
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Santri Pesisir",
        "active" => 'about',
        "email" => "santripesisir@gmail.com",
        "image" => "logo.png"
    ]);
});


//halaman single post

Route::get('/post/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Category',
        "active" => 'categories',
        'categories' => Category::all()
    ]);
});
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard', function () {
    return view('dashboard.index', ['title' => 'dashboard', 'active' => 'activedash']);
})->middleware('auth');
Route::post('/logout', [LoginController::class, 'logout']);
