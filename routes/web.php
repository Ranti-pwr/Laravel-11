<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Web {
    
}

Route::get('/', function () {
    return view('home', ['judul' => 'Haloo semua', 'post' => [[
    'id' => 1,
    'slug' => 'Artikel - U',
    'author' => 'Soft',
    'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta veritatis nihil laborum corrupti
    amet non, dignissimos possimus tempore et ad quam mollitia minima totam sed incidunt aut sequi qui vitae!'
    ]] ]);




});

Route::get('/{slug}', function($slug){
    $post = [
       [ 'id' => 1,
        'slug' => 'Artikel - U',
        'author' => 'Soft',
        'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta veritatis nihil laborum corrupti
         amet non, dignissimos possimus tempore et ad quam mollitia minima totam sed incidunt aut sequi qui vitae!'
       ]
    ];

    $pot = Arr::first($post, function($post) use ($slug){
        return $post['slug'] == $slug;
    });

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

