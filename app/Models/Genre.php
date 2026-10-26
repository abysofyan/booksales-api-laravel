<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        [
            'id' => 1,
            'name' => 'Horror',
            'description' => 'Genre yang berisi cerita menegangkan dan menyeramkan.',
        ],
        [
            'id' => 2,
            'name' => 'Comedy',
            'description' => 'Genre yang berisi cerita lucu dan menghibur.',
        ],
        [
            'id' => 3,
            'name' => 'Science Fiction',
            'description' => 'Genre yang membahas sains dan teknologi imajinatif.',
        ],
        [
            'id' => 4,
            'name' => 'History',
            'description' => 'Genre yang membahas peristiwa sejarah.',
        ],
        [
            'id' => 5,
            'name' => 'Thriller',
            'description' => 'Genre yang berisi cerita penuh ketegangan.',
        ],
    ];

    public function getGenres()
    {
        return $this->genres;
    }
}
