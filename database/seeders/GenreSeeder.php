<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genre = new Genre;
        $genre->genre_name = "Action";
        $genre->save();

        $genre = new Genre;
        $genre->genre_name = "Horror";
        $genre->save();

        $genre = new Genre;
        $genre->genre_name = "Romance";
        $genre->save();

        $genre = new Genre;
        $genre->genre_name = "History";
        $genre->save();

        $genre = new Genre;
        $genre->genre_name = "Sci-Fi";
        $genre->save();
    }
}
