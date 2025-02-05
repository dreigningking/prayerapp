<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::view('/','welcome');

Route::view('clientele','clientele');

Route::view('accountant','accountants')->name('accountants');

Route::view('tax-authorities','taxauthority');

Route::view('waitlist','waitlist');

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

