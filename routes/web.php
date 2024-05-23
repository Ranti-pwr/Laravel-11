<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['judul' => 'Haloo semua', 'post' => [['author' => 'Soft',
    'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta veritatis nihil laborum corrupti
    amet non, dignissimos possimus tempore et ad quam mollitia minima totam sed incidunt aut sequi qui vitae!'
    ]] ]);

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

