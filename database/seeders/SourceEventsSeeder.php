<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourceEventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('source_events')->insert([
            ['id' => 1, 'name' => 'evento1', 'urlSource' => 'https://www.url_source_source-events.com', 'urlImage' => 'https://www.url_image_source-events.com'],
            ['id' => 2, 'name' => 'evento2', 'urlSource' => 'https://www.url_source_source-events.com', 'urlImage' => 'https://www.url_image_source-events.com'],
            ['id' => 3, 'name' => 'evento3', 'urlSource' => 'https://www.url_source_source-events.com', 'urlImage' => 'https://www.url_image_source-events.com'],
            ['id' => 4, 'name' => 'evento4', 'urlSource' => 'https://www.url_source_source-events.com', 'urlImage' => 'https://www.url_image_source-events.com'],
            ['id' => 5, 'name' => 'evento5', 'urlSource' => 'https://www.url_source_source-events.com', 'urlImage' => 'https://www.url_image_source-events.com'],
            ['id' => 6, 'name' => 'evento6', 'urlSource' => 'https://www.url_source_source-events.com', 'urlImage' => 'https://www.url_image_source-events.com'],
            ['id' => 7, 'name' => 'evento7', 'urlSource' => 'https://www.url_source_source-events.com', 'urlImage' => 'https://www.url_image_source-events.com'],
            ['id' => 8, 'name' => 'evento8', 'urlSource' => 'https://www.url_source_source-events.com', 'urlImage' => 'https://www.url_image_source-events.com'],
            ['id' => 9, 'name' => 'evento9', 'urlSource' => 'https://www.url_source_source-events.com', 'urlImage' => 'https://www.url_image_source-events.com'],
        ]);
    }
}
