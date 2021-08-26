<?php

namespace App\Models;


class Post
{
    static $blog_post = [
        [
            "judul" => "Post pertama",
            "slug" => "post-pertama",
            "author" => "Irfan",
            "isi" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam quae nisi debitis aperiam accusantium dicta, ipsam vitae vel minima, ea sed, illo minus delectus eos exercitationem accusamus. Expedita culpa blanditiis nihil? Reiciendis explicabo quos eveniet laboriosam, consequatur odio nisi veritatis sit aperiam modi totam consectetur fuga asperiores! Hic expedita provident quod, magnam incidunt eveniet dolorem animi. Praesentium facilis impedit dolores fugiat alias, consectetur, placeat veniam amet nemo nisi sit id itaque, odit magnam? Quas enim incidunt accusantium id mollitia quod, rerum esse animi soluta voluptates repudiandae unde quasi alias odio culpa, ex quo aperiam atque. Quasi eos totam voluptatum numquam?"
        ],
        [
            "judul" => "Post kedua",
            "slug" => "post-kedua",
            "author" => "Doni",
            "isi" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam quae nisi debitis aperiam accusantium dicta, ipsam vitae vel minima, ea sed, illo minus delectus eos exercitationem accusamus. Expedita culpa blanditiis nihil? Reiciendis explicabo quos eveniet laboriosam, consequatur odio nisi veritatis sit aperiam modi totam consectetur fuga asperiores! Hic expedita provident quod, magnam incidunt eveniet dolorem animi. Praesentium facilis impedit dolores fugiat alias, consectetur, placeat veniam amet nemo nisi sit id itaque, odit magnam? Quas enim incidunt accusantium id mollitia quod, rerum esse animi soluta voluptates repudiandae unde quasi alias odio culpa, ex quo aperiam atque. Quasi eos totam voluptatum numquam?"
        ]
    ];

    public static function all(){
        return collect(self::$blog_post);
    }

    public static function find($slug){
        $posts = static::all();

        // $newpost = [];
        // foreach ($posts as $post ) {
        //     if($post["slug"] === $slug){
        //         $newpost = $post;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
