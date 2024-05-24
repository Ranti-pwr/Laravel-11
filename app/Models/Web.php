<?php

namespace App\Models; //menyimpan data dengan spesifik dan di jalankan otomatis

use Illuminate\Support\Arr;

class Web
{
    public static function all()
    {
        return  [
            [
                'id' => 1,
                'slug' => 'Artikel - U',
                'author' => 'Soft',
                'isi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta veritatis nihil laborum corrupti
            amet non, dignissimos possimus tempore et ad quam mollitia minima totam sed incidunt aut sequi qui vitae!'
            ]
        ];
    }

    public static function find($slug): array
    {
        // return Arr::first(static::all(), function ($post) use ($slug) { //fungsi slug adalah fariabel global
        //     return $post['slug'] == $slug;
        // });

        $pos = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug); //penggunaan ero function lebih singkat

        if (!$pos) {
            abort(404); //memberikan pengembalian data not found jika membuka data yang tidak tersedia
        }
        return $pos; //jika ada akan mengembalikan data pos
    }
}
