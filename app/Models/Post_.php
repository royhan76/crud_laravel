<?php

namespace App\Models;

class Posts
{

    private  static $blog_post = [
        [
            "title" => "Judul post pertama",
            "id" => "1",
            "slug" => "judul-post-pertama",
            "author" => "santri pesisir",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, tenetur? Corrupti quidem veritatis officia facere, nesciunt quis eum eligendi cum, quasi, deserunt obcaecati tempora doloribus ipsum maxime quam aliquam. Dignissimos minima vero libero nemo adipisci quasi tenetur provident temporibus sit labore, blanditiis maiores? Aspernatur tenetur quisquam distinctio sunt quia? Quae vitae ullam, aliquid ut laborum eligendi dicta enim totam atque magni? Quidem numquam facere nulla est dignissimos excepturi in labore, molestiae ut vero odio inventore et cumque voluptatem repellat. Vitae."
        ],
        [
            "title" => "Judul post kedua dan",
            "id" => "2",
            "slug" => "judul-post-kedua",
            "author" => "santri pesisir",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nulla id modi aliquam animi deleniti debitis nesciunt porro magni expedita fugiat ratione laudantium, velit corporis iusto quo consequuntur soluta asperiores quisquam. Rerum quibusdam necessitatibus expedita ullam praesentium totam? Nesciunt beatae ducimus aliquid totam saepe, quos aperiam molestiae culpa eligendi inventore suscipit, ad, reprehenderit nisi tenetur quia ipsum esse recusandae. Ducimus perferendis, eaque aspernatur sit dolores fugiat dolorum maxime enim nam numquam laboriosam odit nostrum corrupti quo dolorem ullam minima aliquid voluptatibus atque beatae delectus! Veritatis ratione cumque harum mollitia ipsa rem nulla voluptatum magni quod, assumenda dolorem doloribus quaerat magnam."
        ]
    ];
    public static function all()
    {
        return collect(self::$blog_post);
    }
    public static function find($slug)
    {
        $posts = static::all();

        return  $posts->firstWhere('slug', $slug);
    }
}
