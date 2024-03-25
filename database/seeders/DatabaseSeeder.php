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
        $this->call([
            // AdminUserSeeder::class,
            // CountrySeeder::class,
            // ProductSeeder::class,
            CategoriesSeeder::class,
            // ExperienceSeeder::class,
            // EducationSeeder::class,
            // ServiceSeeder::class,
            // ProjectSeeder::class,
            // SliderImagesSeeder::class,
        ]);
    }
}
