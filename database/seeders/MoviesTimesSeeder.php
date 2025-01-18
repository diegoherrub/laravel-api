<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies_times')->insert([
            ['id' => 1, 'movie_id' => 1, 'time' => '08:00h - 09:30h'],
            ['id' => 2, 'movie_id' => 2, 'time' => '13:45h - 15:00h'],
            ['id' => 3, 'movie_id' => 3, 'time' => '17:00h - 18:30h'],
            ['id' => 4, 'movie_id' => 4, 'time' => '08:00h - 09:30h'],
            ['id' => 5, 'movie_id' => 5, 'time' => '13:45h - 15:00h'],
            ['id' => 6, 'movie_id' => 6, 'time' => '17:00h - 18:30h'],
            ['id' => 7, 'movie_id' => 7, 'time' => '19:15h - 20:00h'],
            ['id' => 8, 'movie_id' => 8, 'time' => '22:30h - 23:45h'],
            ['id' => 9, 'movie_id' => 9, 'time' => '19:15h - 20:00h'],
            ['id' => 10, 'movie_id' => 10, 'time' => '22:30h - 23:45h'],
            ['id' => 11, 'movie_id' => 11, 'time' => '08:00h - 09:30h'],
            ['id' => 12, 'movie_id' => 12, 'time' => '08:00h - 09:30h'],
            ['id' => 13, 'movie_id' => 13, 'time' => '13:45h - 15:00h'],
            ['id' => 14, 'movie_id' => 14, 'time' => '17:00h - 18:30h'],
            ['id' => 15, 'movie_id' => 15, 'time' => '19:15h - 20:00h'],
            ['id' => 16, 'movie_id' => 1, 'time' => '22:30h - 23:45h'],
            ['id' => 17, 'movie_id' => 2, 'time' => '13:45h - 15:00h'],
            ['id' => 18, 'movie_id' => 3, 'time' => '17:00h - 18:30h'],
            ['id' => 19, 'movie_id' => 4, 'time' => '08:00h - 09:30h'],
            ['id' => 20, 'movie_id' => 5, 'time' => '13:45h - 15:00h'],
            ['id' => 21, 'movie_id' => 6, 'time' => '17:00h - 18:30h'],
            ['id' => 22, 'movie_id' => 7, 'time' => '19:15h - 20:00h'],
            ['id' => 23, 'movie_id' => 8, 'time' => '22:30h - 23:45h'],
            ['id' => 24, 'movie_id' => 9, 'time' => '22:30h - 23:45h'],
            ['id' => 25, 'movie_id' => 10, 'time' => '22:30h - 23:45h'],
            ['id' => 26, 'movie_id' => 11, 'time' => '08:00h - 09:30h'],
            ['id' => 27, 'movie_id' => 12, 'time' => '13:45h - 15:00h'],
            ['id' => 28, 'movie_id' => 13, 'time' => '17:00h - 18:30h'],
            ['id' => 29, 'movie_id' => 14, 'time' => '19:15h - 20:00h'],
            ['id' => 30, 'movie_id' => 15, 'time' => '22:30h - 23:45h'],
        ]);
    }
}
