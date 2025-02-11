<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestController;

Route::view('/','welcome');

Route::view('individuals-companies','clientele');
Route::view('accountants-accounting-firms','accountants');
Route::view('government-tax-bodies','taxauthority');

Route::view('clientele','clientele');

Route::view('accountants','accountants')->name('accountants');

Route::view('tax-authorities','taxauthority');

Route::view('waitlist','waitinglist');

Route::get('pricing', function () {
    return view('pricing');
});
Route::get('contact-us', function () {
    return view('contact');
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

Route::post('/contact-us', [GuestController::class, 'contactus'])->name('contact.submit');
Route::post('/newsletter-subscription', [GuestController::class, 'newsletterSubscription'])->name('newsletter.subscribe');

