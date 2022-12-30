<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movies = [
            [
                'name' => 'The Shawshank Redemtion',
                'slug' => 'the-shawshank-redemtion',
                'category' => 'Drama',
                'video_url' => 'https://youtu.be/sW9npZVpiMI',
                'thumbnail' => 'https://i.ytimg.com/vi/sW9npZVpiMI/maxresdefault.jpg',
                'rating' => 4.3,
                'is_featured' => 1,
            ],
            [
                'name' => 'The Godfather',
                'slug' => 'the-godfather',
                'category' => 'Drama',
                'video_url' => 'https://youtu.be/synJZAtH58E',
                'thumbnail' => 'https://asset-a.grid.id/crop/0x0:0x0/700x465/photo/2020/02/27/3482696955.jpg',
                'rating' => 4.2,
                'is_featured' => 0,
            ],
            [
                'name' => 'SAW',
                'slug' => 'saw',
                'category' => 'Horror',
                'video_url' => 'https://youtu.be/lgZwz3kGJ5U?list=PLEwQVzi8Alb9MLOcSEen5ARJQMLwlmTIQ',
                'thumbnail' => 'https://asset.kompas.com/crops/4e6yMRiKuZbXGzeBW_8lKyQ8MMo=/130x66:1345x876/750x500/data/photo/2020/10/15/5f87c07a8e3ac.jpg',
                'rating' => 4.0,
                'is_featured' => 0,
            ]
        ];
        Movie::insert($movies);
    }
}
