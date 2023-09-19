<?php

namespace App\Models;


class Post
{
    private static $blog_post = [
        [
            'judul' => 'wiro sableng',
            'penerbit' => 'erlangga',
            'Year_terbit' => '2001'
        ],  
        [
            'judul' => 'mak lampir',
            'penerbit' => 'tokopedia',
            'Year_terbit' => '2003'
        ]
    ];

    public static function all()
    {
    return collect(self::$blog_post);
    }

    public static function find($slug){
        $post = static::all();
        // $new_post = [];
        // foreach( $post as $item){
        //     if($item['Year_terbit'] === $slug) {
        //         $new_post = $item;
        //     }
        // }
        return $post->firstWhere('Year_terbit', $slug);
    }
}
