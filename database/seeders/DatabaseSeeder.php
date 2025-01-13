<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Llamar al seeder de farmacias
        //$this->call(PharmacySeeder::class);
        $this->call(SourceEventsSeeder::class);
        $this->call(EventsSeeder::class);
        $this->call(FilesEventsSeeder::class);
    }
}
