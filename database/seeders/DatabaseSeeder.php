<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // This calls your legacy data seeder
        $this->call([
            TechnoDataSeeder::class,
        ]);
    }
}
