<?php

use App\Models\Web; //import class model Web
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;


Route::get('/', function () {
    return view('home', ['judul' => 'Haloo semua', 'post' => Web::all()]); //memanggil method class yang dibuat
});

Route::get('/{slug}', function ($slug) {
    $pot = Web::find($slug);
    return view('post', ['judul' => 'Single Post', 'post' => $pot]);
});

Route::get('/blog', function () {
    return view('blog', ['judul' => 'Blog']);
});

Route::get('/about', function () {
    return view('about', ['judul' => 'About']);
});

Route::get('/contact', function () {
    return view('contact', ['judul' => 'Contact']);
});

Route::get('/report', function () {
    return view('report', ['judul' => 'Report']);
});
