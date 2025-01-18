<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsFilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events_files')->insert([
            ['id' => 1, 'event_id' => 1, 'url_files' => 'https://www.url_files_events.com'],
            ['id' => 2, 'event_id' => 2, 'url_files' => 'https://www.url_files_events.com'],
            ['id' => 3, 'event_id' => 3, 'url_files' => 'https://www.url_files_events.com'],
            ['id' => 4, 'event_id' => 4, 'url_files' => 'https://www.url_files_events.com'],
            ['id' => 5, 'event_id' => 5, 'url_files' => 'https://www.url_files_events.com'],
            ['id' => 6, 'event_id' => 6, 'url_files' => 'https://www.url_files_events.com'],
            ['id' => 7, 'event_id' => 7, 'url_files' => 'https://www.url_files_events.com'],
            ['id' => 8, 'event_id' => 8, 'url_files' => 'https://www.url_files_events.com'],
            ['id' => 9, 'event_id' => 9, 'url_files' => 'https://www.url_files_events.com'],
            ['id' => 10, 'event_id' => 1, 'url_files' => 'https://www.url_files2_events.com'],
            ['id' => 11, 'event_id' => 2, 'url_files' => 'https://www.url_files2_events.com'],
            ['id' => 12, 'event_id' => 3, 'url_files' => 'https://www.url_files2_events.com'],
            ['id' => 13, 'event_id' => 4, 'url_files' => 'https://www.url_files2_events.com'],
            ['id' => 14, 'event_id' => 5, 'url_files' => 'https://www.url_files2_events.com'],
            ['id' => 15, 'event_id' => 6, 'url_files' => 'https://www.url_files2_events.com'],
            ['id' => 16, 'event_id' => 7, 'url_files' => 'https://www.url_files2_events.com'],
            ['id' => 17, 'event_id' => 8, 'url_files' => 'https://www.url_files2_events.com'],
            ['id' => 18, 'event_id' => 9, 'url_files' => 'https://www.url_files2_events.com'],
            ['id' => 19, 'event_id' => 1, 'url_files' => 'https://www.url_files3_events.com'],
            ['id' => 20, 'event_id' => 2, 'url_files' => 'https://www.url_files3_events.com'],
            ['id' => 21, 'event_id' => 3, 'url_files' => 'https://www.url_files3_events.com'],
            ['id' => 22, 'event_id' => 4, 'url_files' => 'https://www.url_files3_events.com'],
            ['id' => 23, 'event_id' => 5, 'url_files' => 'https://www.url_files3_events.com'],
            ['id' => 24, 'event_id' => 6, 'url_files' => 'https://www.url_files3_events.com'],
            ['id' => 25, 'event_id' => 7, 'url_files' => 'https://www.url_files3_events.com'],
            ['id' => 26, 'event_id' => 8, 'url_files' => 'https://www.url_files3_events.com'],
            ['id' => 27, 'event_id' => 9, 'url_files' => 'https://www.url_files3_events.com'],
        ]);
    }
}
