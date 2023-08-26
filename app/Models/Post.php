<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
    private static $blog_post = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Hanz",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet aliquam perspiciatis atque. Tempora inventore atque eos dicta impedit repellat deserunt reiciendis. Consequuntur ullam in eum sit aliquam, quam nesciunt esse molestiae praesentium vitae amet nobis cum excepturi provident sapiente laudantium beatae enim, corporis optio non quis debitis sunt quasi! Voluptate neque in harum, voluptatem consectetur nam tempore nulla enim deleniti consequatur, corrupti nesciunt beatae deserunt aliquid quod? Saepe, voluptatem iusto aspernatur eum eos deserunt explicabo dolores maiores illum aliquam tenetur."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-posst-kedua",
            "author" => "Anne",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet aliquam perspiciatis atque. Tempora inventore atque eos dicta impedit repellat deserunt reiciendis. Consequuntur ullam in eum sit aliquam, quam nesciunt esse molestiae praesentium vitae amet nobis cum excepturi provident sapiente laudantium beatae enim, corporis optio non quis debitis sunt quasi! Voluptate neque in harum, voluptatem consectetur nam tempore nulla enim deleniti consequatur, corrupti nesciunt beatae deserunt aliquid quod? Saepe, voluptatem iusto aspernatur eum eos deserunt explicabo dolores maiores illum aliquam tenetur.Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eveniet aliquam perspiciatis atque. Tempora inventore atque eos dicta impedit repellat deserunt reiciendis. Consequuntur ullam in eum sit aliquam, quam nesciunt esse molestiae praesentium vitae amet nobis cum excepturi provident sapiente laudantium beatae enim, corporis optio non quis debitis sunt quasi! Voluptate neque in harum, voluptatem consectetur nam tempore nulla enim deleniti consequatur, corrupti nesciunt beatae deserunt aliquid quod? Saepe, voluptatem iusto aspernatur eum eos deserunt explicabo dolores maiores illum aliquam tenetur."
        ],
    
    ];

    public static function all() {
        return collect(self::$blog_post);
    }

    public static function find($slug) {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p) {
        //     if($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
