<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilesEventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('files_events')->insert([
            ['id' => 1, 'id_event' => 1, 'urlFiles' => 'https://www.url_files_events.com'],
            ['id' => 2, 'id_event' => 2, 'urlFiles' => 'https://www.url_files_events.com'],
            ['id' => 3, 'id_event' => 3, 'urlFiles' => 'https://www.url_files_events.com'],
            ['id' => 4, 'id_event' => 4, 'urlFiles' => 'https://www.url_files_events.com'],
            ['id' => 5, 'id_event' => 5, 'urlFiles' => 'https://www.url_files_events.com'],
            ['id' => 6, 'id_event' => 6, 'urlFiles' => 'https://www.url_files_events.com'],
            ['id' => 7, 'id_event' => 7, 'urlFiles' => 'https://www.url_files_events.com'],
            ['id' => 8, 'id_event' => 8, 'urlFiles' => 'https://www.url_files_events.com'],
            ['id' => 9, 'id_event' => 9, 'urlFiles' => 'https://www.url_files_events.com'],
        ]);
    }
}
