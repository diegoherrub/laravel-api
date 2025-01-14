<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('times')->insert([
            ['id' => '1', 'time' => '10:00 AM'],
            ['id' => '2', 'time' => '12:00 PM'],
            ['id' => '3', 'time' => '2:00 PM'],
            ['id' => '4', 'time' => '4:00 PM'],
            ['id' => '5', 'time' => '6:00 PM'],
            ['id' => '6', 'time' => '8:00 PM'],
            ['id' => '7', 'time' => '10:00 PM'],
            ['id' => '8', 'time' => '12:00 AM'],
            ['id' => '9', 'time' => '2:00 AM'],
            ['id' => '10', 'time' => '4:00 AM'],
        ]);
    }
}
