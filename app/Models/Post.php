<?php 
namespace App\Models;
use Illuminate\Support\Arr;
class Post
{
    public static function all(){
        return [
            [
                'id'=> '1',
                'slug' => 'judul-artikel-1',
                'title' => 'Artikel 1',
                'author' => 'Dena Astia',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima eligendi, sit ducimus vero, fugiat perspiciatis cumque sapiente ut placeat iusto beatae! Voluptate cupiditate optio provident ipsam numquam quam obcaecati architecto?'
            ],
            [
                'id'=> '2',
                'slug' => 'judul-artikel-2',
                'title' => 'Artikel 2',
                'author' => 'Dena Astia',
                'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nobis enim ipsum laudantium expedita placeat labore autem excepturi inventore fugiat nisi quaerat, cum eaque tempore delectus perferendis vitae. Beatae, ea atque!'
            ],
        ];
    }
    public static function find($slug): array{
        $post = Arr::first(Post::all(), fn ($post) => $post['slug'] == $slug);
        if(!$post){
            abort(404);
        }
        return $post;
        // Arr::first(Post::all(), function($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
    }
    
}