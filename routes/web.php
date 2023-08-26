<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hanz",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet aliquam perspiciatis atque. Tempora inventore atque eos dicta impedit repellat deserunt reiciendis. Consequuntur ullam in eum sit aliquam, quam nesciunt esse molestiae praesentium vitae amet nobis cum excepturi provident sapiente laudantium beatae enim, corporis optio non quis debitis sunt quasi! Voluptate neque in harum, voluptatem consectetur nam tempore nulla enim deleniti consequatur, corrupti nesciunt beatae deserunt aliquid quod? Saepe, voluptatem iusto aspernatur eum eos deserunt explicabo dolores maiores illum aliquam tenetur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Anne",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet aliquam perspiciatis atque. Tempora inventore atque eos dicta impedit repellat deserunt reiciendis. Consequuntur ullam in eum sit aliquam, quam nesciunt esse molestiae praesentium vitae amet nobis cum excepturi provident sapiente laudantium beatae enim, corporis optio non quis debitis sunt quasi! Voluptate neque in harum, voluptatem consectetur nam tempore nulla enim deleniti consequatur, corrupti nesciunt beatae deserunt aliquid quod? Saepe, voluptatem iusto aspernatur eum eos deserunt explicabo dolores maiores illum aliquam tenetur.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet aliquam perspiciatis atque. Tempora inventore atque eos dicta impedit repellat deserunt reiciendis. Consequuntur ullam in eum sit aliquam, quam nesciunt esse molestiae praesentium vitae amet nobis cum excepturi provident sapiente laudantium beatae enim, corporis optio non quis debitis sunt quasi! Voluptate neque in harum, voluptatem consectetur nam tempore nulla enim deleniti consequatur, corrupti nesciunt beatae deserunt aliquid quod? Saepe, voluptatem iusto aspernatur eum eos deserunt explicabo dolores maiores illum aliquam tenetur."
        ],
    
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

//halaman single post
Route::get('posts/{slug}', function($slug) {
     $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hanz",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet aliquam perspiciatis atque. Tempora inventore atque eos dicta impedit repellat deserunt reiciendis. Consequuntur ullam in eum sit aliquam, quam nesciunt esse molestiae praesentium vitae amet nobis cum excepturi provident sapiente laudantium beatae enim, corporis optio non quis debitis sunt quasi! Voluptate neque in harum, voluptatem consectetur nam tempore nulla enim deleniti consequatur, corrupti nesciunt beatae deserunt aliquid quod? Saepe, voluptatem iusto aspernatur eum eos deserunt explicabo dolores maiores illum aliquam tenetur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Anne",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet aliquam perspiciatis atque. Tempora inventore atque eos dicta impedit repellat deserunt reiciendis. Consequuntur ullam in eum sit aliquam, quam nesciunt esse molestiae praesentium vitae amet nobis cum excepturi provident sapiente laudantium beatae enim, corporis optio non quis debitis sunt quasi! Voluptate neque in harum, voluptatem consectetur nam tempore nulla enim deleniti consequatur, corrupti nesciunt beatae deserunt aliquid quod? Saepe, voluptatem iusto aspernatur eum eos deserunt explicabo dolores maiores illum aliquam tenetur.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet aliquam perspiciatis atque. Tempora inventore atque eos dicta impedit repellat deserunt reiciendis. Consequuntur ullam in eum sit aliquam, quam nesciunt esse molestiae praesentium vitae amet nobis cum excepturi provident sapiente laudantium beatae enim, corporis optio non quis debitis sunt quasi! Voluptate neque in harum, voluptatem consectetur nam tempore nulla enim deleniti consequatur, corrupti nesciunt beatae deserunt aliquid quod? Saepe, voluptatem iusto aspernatur eum eos deserunt explicabo dolores maiores illum aliquam tenetur."
        ],
    
    ];

    $new_post = [];
    foreach($blog_posts as $post) {
        if($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});

