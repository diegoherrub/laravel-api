<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            ['id' => 1, 'title' => 'evento1', 'url_source' => 'https://www.url_source_event1.com', 'url_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLGV5EPPkxVmLr6vrv4139a9RZEFFwIrsrSQ&s', 'date_start' => '2025-01-01', 'date_end' => '2025-01-02'],
            ['id' => 2, 'title' => 'evento2', 'url_source' => 'https://www.url_source_event2.com', 'url_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLGV5EPPkxVmLr6vrv4139a9RZEFFwIrsrSQ&s', 'date_start' => '2025-01-07', 'date_end' => '2025-01-10'],
            ['id' => 3, 'title' => 'evento3', 'url_source' => 'https://www.url_source_event3.com', 'url_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLGV5EPPkxVmLr6vrv4139a9RZEFFwIrsrSQ&s', 'date_start' => '2025-01-12', 'date_end' => '2025-01-15'],
            ['id' => 4, 'title' => 'evento4', 'url_source' => 'https://www.url_source_event4.com', 'url_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLGV5EPPkxVmLr6vrv4139a9RZEFFwIrsrSQ&s', 'date_start' => '2025-02-04', 'date_end' => '2025-02-07'],
            ['id' => 5, 'title' => 'evento5', 'url_source' => 'https://www.url_source_event5.com', 'url_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLGV5EPPkxVmLr6vrv4139a9RZEFFwIrsrSQ&s', 'date_start' => '2025-02-09', 'date_end' => '2025-02-11'],
            ['id' => 6, 'title' => 'evento6', 'url_source' => 'https://www.url_source_event6.com', 'url_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLGV5EPPkxVmLr6vrv4139a9RZEFFwIrsrSQ&s', 'date_start' => '2025-02-23', 'date_end' => '2025-02-23'],
            ['id' => 7, 'title' => 'evento7', 'url_source' => 'https://www.url_source_event7.com', 'url_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLGV5EPPkxVmLr6vrv4139a9RZEFFwIrsrSQ&s', 'date_start' => '2025-07-07', 'date_end' => '2025-07-10'],
            ['id' => 8, 'title' => 'evento8', 'url_source' => 'https://www.url_source_event8.com', 'url_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLGV5EPPkxVmLr6vrv4139a9RZEFFwIrsrSQ&s', 'date_start' => '2025-07-13', 'date_end' => '2025-07-16'],
            ['id' => 9, 'title' => 'evento9', 'url_source' => 'https://www.url_source_event9.com', 'url_image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLGV5EPPkxVmLr6vrv4139a9RZEFFwIrsrSQ&s', 'date_start' => '2025-07-23', 'date_end' => '2025-07-25'],
        ]);
    }
}
