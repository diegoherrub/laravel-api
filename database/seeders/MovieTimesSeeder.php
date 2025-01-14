<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieTimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movietimes')->insert([
            ['id' => '1', 'movie_id' => '1', 'time_id' => '1'],
            ['id' => '2', 'movie_id' => '1', 'time_id' => '2'],
            ['id' => '3', 'movie_id' => '1', 'time_id' => '3'],
            ['id' => '4', 'movie_id' => '2', 'time_id' => '2'],
            ['id' => '5', 'movie_id' => '2', 'time_id' => '3'],
            ['id' => '6', 'movie_id' => '2', 'time_id' => '4'],
        ]);
    }
}
