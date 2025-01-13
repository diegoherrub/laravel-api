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
            ['id' => 1, 'title' => 'evento1', 'urlSource' => 'https://www.url_source_event1.com', 'urlImage' => 'https://www.url_image_event1.com', 'dateStart' => '2021-10-10', 'dateEnd' => '2021-10-10', 'source' => 1],
            ['id' => 2, 'title' => 'evento2', 'urlSource' => 'https://www.url_source_event2.com', 'urlImage' => 'https://www.url_image_event2.com', 'dateStart' => '2021-10-10', 'dateEnd' => '2021-10-10', 'source' => 2],
            ['id' => 3, 'title' => 'evento3', 'urlSource' => 'https://www.url_source_event3.com', 'urlImage' => 'https://www.url_image_event3.com', 'dateStart' => '2021-10-10', 'dateEnd' => '2021-10-10', 'source' => 3],
            ['id' => 4, 'title' => 'evento4', 'urlSource' => 'https://www.url_source_event4.com', 'urlImage' => 'https://www.url_image_event4.com', 'dateStart' => '2021-10-10', 'dateEnd' => '2021-10-10', 'source' => 4],
            ['id' => 5, 'title' => 'evento5', 'urlSource' => 'https://www.url_source_event5.com', 'urlImage' => 'https://www.url_image_event5.com', 'dateStart' => '2021-10-10', 'dateEnd' => '2021-10-10', 'source' => 5],
            ['id' => 6, 'title' => 'evento6', 'urlSource' => 'https://www.url_source_event6.com', 'urlImage' => 'https://www.url_image_event6.com', 'dateStart' => '2021-10-10', 'dateEnd' => '2021-10-10', 'source' => 6],
            ['id' => 7, 'title' => 'evento7', 'urlSource' => 'https://www.url_source_event7.com', 'urlImage' => 'https://www.url_image_event7.com', 'dateStart' => '2021-10-10', 'dateEnd' => '2021-10-10', 'source' => 7],
            ['id' => 8, 'title' => 'evento8', 'urlSource' => 'https://www.url_source_event8.com', 'urlImage' => 'https://www.url_image_event8.com', 'dateStart' => '2021-10-10', 'dateEnd' => '2021-10-10', 'source' => 8],
            ['id' => 9, 'title' => 'evento9', 'urlSource' => 'https://www.url_source_event9.com', 'urlImage' => 'https://www.url_image_event9.com', 'dateStart' => '2021-10-10', 'dateEnd' => '2021-10-10', 'source' => 9],
        ]);
    }
}
