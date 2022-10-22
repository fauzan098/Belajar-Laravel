<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// untuk menyimpan data dalam post
class Post 
{
    //membuat properti statis buat post
    private static $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-yang-pertama",
            "author" => "fauzan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ex ut molestiae! Dignissimos, dolore cum recusandae voluptatibus fuga vitae qui consequatur iste sint autem sed, natus error nisi eos consequuntur veritatis, nam modi. Laboriosam inventore consequuntur architecto, sapiente earum pariatur doloremque a tempore labore dolorem voluptatibus quos quis eaque quas accusamus repudiandae unde nihil at aliquid? A provident, ducimus commodi voluptas veniam omnis magni voluptatibus hic exercitationem. Distinctio odio at consequuntur commodi dolores? Commodi quod dolores saepe molestiae ducimus culpa!"
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-yang-kedua",
            "author" => "aan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ex ut molestiae! Dignissimos, dolore cum recusandae voluptatibus fuga vitae qui consequatur iste sint autem sed, natus error nisi eos consequuntur veritatis, nam modi. Laboriosam inventore consequuntur architecto, sapiente earum pariatur doloremque a tempore labore dolorem voluptatibus quos quis eaque quas accusamus repudiandae unde nihil at aliquid? A provident, ducimus commodi voluptas veniam omnis magni voluptatibus hic exercitationem. Distinctio odio at consequuntur commodi dolores? Commodi quod dolores saepe molestiae ducimus culpa!"
        ],
        [
            "title" => "judul post ketiga",
            "slug" => "judul-yang-ketiga",
            "author" => "widya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis ex ut molestiae! Dignissimos, dolore cum recusandae voluptatibus fuga vitae qui consequatur iste sint autem sed, natus error nisi eos consequuntur veritatis, nam modi. Laboriosam inventore consequuntur architecto, sapiente earum pariatur doloremque a tempore labore dolorem voluptatibus quos quis eaque quas accusamus repudiandae unde nihil at aliquid? A provident, ducimus commodi voluptas veniam omnis magni voluptatibus hic exercitationem. Distinctio odio at consequuntur commodi dolores? Commodi quod dolores saepe molestiae ducimus culpa!"
        ],
    ];

    public static function all() 
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        // mengambil semua data blog post
        $posts = static::all();

        // looping data post 
        // $post = [];
        // foreach($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }
}
