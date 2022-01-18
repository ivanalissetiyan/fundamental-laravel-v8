<?php

namespace App\Models;

class Post
{
    private static $blog_posts =
    [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ivan Alissetiyan",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam error voluptas maiores nostrum quis culpa, eius corporis
        possimus earum sint! Laudantium, accusamus quasi? Praesentium deserunt vel reiciendis corporis velit fuga, nam,
        veritatis ex dolorum alias omnis eaque consequatur veniam voluptate molestias non sequi ab provident voluptatibus
        doloribus porro numquam aliquam unde consequuntur! Rerum fuga odio blanditiis eos, soluta sunt non possimus reiciendis
        in, accusamus dolorem quod. Quasi corrupti consequatur aliquam mollitia minus eius aliquid quidem reprehenderit
        corporis, eligendi possimus fugit.
"
        ],
        [
            "title" => "Judul Post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nadya Febriyanti",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus in veniam dolorem laborum nostrum rerum provident
velit temporibus tempora minus, nobis saepe perferendis eveniet deleniti nisi magni beatae excepturi nulla distinctio
expedita aspernatur. Voluptatem totam, iste repellat aliquid vero est? Nostrum a aperiam porro hic dolor labore quo
reprehenderit deleniti, sint veritatis voluptatum magnam aspernatur odio laborum temporibus amet! Minus veritatis amet
dolor quo sint dignissimos repudiandae illum magnam esse, dolores ab voluptatibus ipsam aperiam voluptates tempore
eligendi eum nihil provident quas quos! Iure quos, a aliquam possimus nulla impedit minima autem soluta, totam officiis,
accusamus placeat odit sapiente excepturi
"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
