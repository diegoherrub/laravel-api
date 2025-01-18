<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSourcesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events_sources')->insert([
            ['id' => 1, 'event_id' => 1, 'name' => 'source evento 1', 'url_source' => 'https://www.url_source_source-events.com', 'url_image' => 'https://www.url_image_source-events.com'],
            ['id' => 2, 'event_id' => 2, 'name' => 'source evento 2', 'url_source' => 'https://www.url_source_source-events.com', 'url_image' => 'https://www.url_image_source-events.com'],
            ['id' => 3, 'event_id' => 3, 'name' => 'source evento 3', 'url_source' => 'https://www.url_source_source-events.com', 'url_image' => 'https://www.url_image_source-events.com'],
            ['id' => 4, 'event_id' => 4, 'name' => 'source evento 4', 'url_source' => 'https://www.url_source_source-events.com', 'url_image' => 'https://www.url_image_source-events.com'],
            ['id' => 5, 'event_id' => 5, 'name' => 'source evento 5', 'url_source' => 'https://www.url_source_source-events.com', 'url_image' => 'https://www.url_image_source-events.com'],
            ['id' => 6, 'event_id' => 6, 'name' => 'source evento 6', 'url_source' => 'https://www.url_source_source-events.com', 'url_image' => 'https://www.url_image_source-events.com'],
            ['id' => 7, 'event_id' => 7, 'name' => 'source evento 7', 'url_source' => 'https://www.url_source_source-events.com', 'url_image' => 'https://www.url_image_source-events.com'],
            ['id' => 8, 'event_id' => 8, 'name' => 'source evento 8', 'url_source' => 'https://www.url_source_source-events.com', 'url_image' => 'https://www.url_image_source-events.com'],
            ['id' => 9, 'event_id' => 9, 'name' => 'source evento 9', 'url_source' => 'https://www.url_source_source-events.com', 'url_image' => 'https://www.url_image_source-events.com'],
            ['id' => 10, 'event_id' => 1, 'name' => 'source evento 10', 'url_source' => 'https://www.url_source_source-events.com', 'url_image' => 'https://www.url_image_source-events.com'],
            ['id' => 11, 'event_id' => 2, 'name' => 'source evento 11', 'url_source' => 'https://www.url_source_source-events.com', 'url_image' => 'https://www.url_image_source-events.com'],
            ['id' => 12, 'event_id' => 3, 'name' => 'source evento 12', 'url_source' => 'https://www.url_source_source-events.com', 'url_image' => 'https://www.url_image_source-events.com'],
            ['id' => 13, 'event_id' => 4, 'name' => 'source evento 13', 'url_source' => 'https://www.url_source_source-events.com', 'url_image' => 'https://www.url_image_source-events.com'],
            ['id' => 14, 'event_id' => 5, 'name' => 'source evento 14', 'url_source' => 'https://www.url_source_source-events.com', 'url_image' => 'https://www.url_image_source-events.com'],
            ['id' => 15, 'event_id' => 6, 'name' => 'source evento 15', 'url_source' => 'https://www.url_source_source-events.com', 'url_image' => 'https://www.url_image_source-events.com'],
            ['id' => 16, 'event_id' => 7, 'name' => 'source evento 16', 'url_source' => 'https://www.url_source_source-events.com', 'url_image' => 'https://www.url_image_source-events.com'],
            ['id' => 17, 'event_id' => 8, 'name' => 'source evento 17', 'url_source' => 'https://www.url_source_source-events.com', 'url_image' => 'https://www.url_image_source-events.com'],
            ['id' => 18, 'event_id' => 9, 'name' => 'source evento 18', 'url_source' => 'https://www.url_source_source-events.com', 'url_image' => 'https://www.url_image_source-events.com'],
        ]);
    }
}
