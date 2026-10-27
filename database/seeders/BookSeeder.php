<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'title' => 'Pulang',
                'description' => 'Kisah perjalanan dan perjuangan seorang pemuda.',
                'price' => 40000,
                'stock' => 15,
                'cover_photo' => 'pulang.jpg',
                'genre_id' => 1,
                'author_id' => 1,
            ],
            [
                'title' => 'Harry Potter',
                'description' => 'Kisah petualangan seorang penyihir muda.',
                'price' => 85000,
                'stock' => 20,
                'cover_photo' => 'harry_potter.jpg',
                'genre_id' => 3,
                'author_id' => 2,
            ],
            [
                'title' => 'Bumi',
                'description' => 'Petualangan fantasi di dunia paralel.',
                'price' => 75000,
                'stock' => 12,
                'cover_photo' => 'bumi.jpg',
                'genre_id' => 3,
                'author_id' => 3,
            ],
            [
                'title' => 'Bumi Manusia',
                'description' => 'Kisah kehidupan pada masa kolonial.',
                'price' => 90000,
                'stock' => 10,
                'cover_photo' => 'bumi_manusia.jpg',
                'genre_id' => 2,
                'author_id' => 4,
            ],
            [
                'title' => 'Negeri 5 Menara',
                'description' => 'Kisah perjuangan dan persahabatan di pesantren.',
                'price' => 70000,
                'stock' => 18,
                'cover_photo' => 'negeri_5_menara.jpg',
                'genre_id' => 2,
                'author_id' => 5,
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
