<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'id' => 1,
            'name' => 'Isaac Asimov',
            'photo' => 'isaac_asimov.jpg',
            'bio' => 'Penulis yang dikenal melalui karya fiksi ilmiah.',
        ],
        [
            'id' => 2,
            'name' => 'J.K. Rowling',
            'photo' => 'jk_rowling.jpg',
            'bio' => 'Penulis seri novel Harry Potter.',
        ],
        [
            'id' => 3,
            'name' => 'Tere Liye',
            'photo' => 'tere_liye.jpg',
            'bio' => 'Penulis Indonesia yang menghasilkan berbagai novel populer.',
        ],
        [
            'id' => 4,
            'name' => 'Pramoedya Ananta Toer',
            'photo' => 'pramoedya.jpg',
            'bio' => 'Sastrawan Indonesia yang menulis Tetralogi Buru.',
        ],
        [
            'id' => 5,
            'name' => 'Ahmad Fuadi',
            'photo' => 'ahmad_fuadi.jpg',
            'bio' => 'Penulis Indonesia yang dikenal melalui novel Negeri 5 Menara.',
        ],
    ];

    public function getAuthors()
    {
        return $this->authors;
    }
}
