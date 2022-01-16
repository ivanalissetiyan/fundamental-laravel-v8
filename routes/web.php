<?php

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
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about"
    ]);
});




Route::get('/posts', function () {

    $blog_posts = [
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

    return view('posts', [
        "title" => "posts",
        "posts" => $blog_posts
    ]);
});

// Halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "single post",
        "post" => $new_post
    ]);
});
