<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name'=>'Dena Astia', 'title' => 'About'])
});

Route::get('/posts', function () {
     // melakukan query dengan eager loading
    // $posts = Post::with(['author', 'category'])->latest()->get();
    $posts = Post::latest()->get();
    return view('posts', ['title' => 'Blog', 'posts' => $posts]);
});
Route::get('/posts/{post:slug}', function(Post $post) {
    // $post = Post::find($slug);;
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function(User $user) {
    // melakukan eager loading pada author dan category pada post yang dimiliki oleh user
    // $posts = $user->posts->load('category', 'author');
    return view('posts', [
        'title' => count($user->posts) . ' Articles By ' . $user->name,
        'posts' => $user->posts
    ]);
});
Route::get('/categories/{category:slug}', function(Category $category)) {
     // $posts = $category->posts->load('category', 'author');
    return view ('posts', ['title' => 'Article in :' . $category->name, 'posts' => $category->posts]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
