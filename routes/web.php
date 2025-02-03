<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('clientele', function () {
    return view('clientele');
});

Route::get('accountants', function () {
    return view('accountants');
});

Route::get('tax-authorities', function () {
    return view('taxauthority');
});

Route::get('pricing', function () {
    return view('pricing');
});

Route::get('blog', function () {
    $posts = Post::paginate(10);
    return view('blog', compact('posts'));
})->name('blog');

Route::get('blog/{post}', function (Post $post) {
    return view('blog-single', compact('post'));
})->name('blog.single');

Route::get('support-forum', function () {
    return view('support-forum');
});

