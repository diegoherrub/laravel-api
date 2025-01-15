<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SourcesNewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sources_news')->insert([
            'id' => '123',
            'name' => 'Diario Marca',
            'url_image' => 'https://sandbox.aulapragmatica.es/commons/img/demo.png',
            'url_source' => 'https://marca.com',
        ]);
    }
}
