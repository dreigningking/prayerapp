<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
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

Route::get('support-forum', function () {
    return view('support-forum');
});

