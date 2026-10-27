<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        $authors = [
            [
                'name' => 'Isaac Asimov',
                'photo' => 'isaac_asimov.jpg',
                'bio' => 'Penulis yang dikenal melalui karya fiksi ilmiah.',
            ],
            [
                'name' => 'J.K. Rowling',
                'photo' => 'jk_rowling.jpg',
                'bio' => 'Penulis seri novel Harry Potter.',
            ],
            [
                'name' => 'Tere Liye',
                'photo' => 'tere_liye.jpg',
                'bio' => 'Penulis Indonesia yang menghasilkan berbagai novel populer.',
            ],
            [
                'name' => 'Pramoedya Ananta Toer',
                'photo' => 'pramoedya.jpg',
                'bio' => 'Sastrawan Indonesia yang menulis Tetralogi Buru.',
            ],
            [
                'name' => 'Ahmad Fuadi',
                'photo' => 'ahmad_fuadi.jpg',
                'bio' => 'Penulis Indonesia yang dikenal melalui novel Negeri 5 Menara.',
            ],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
