<?php

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
    return view('blog');
});

Route::get('support-forum', function () {
    return view('support-forum');
});

