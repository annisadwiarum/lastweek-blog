<?php

use App\Models\Post;
use PhpParser\Node\Stmt\Return_;
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
    return view('home', [
        "title" => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Lastweek",
        "email" => "lasweek@gmail.com",
        "image" => "week.jpg"
    ]);
});


Route::get('/blog', function () {
   
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug) {

    return view('post', [
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});

