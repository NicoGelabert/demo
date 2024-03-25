<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            'name' => 'Nikon',
            'slug' => 'nikon',
            'image' => 'storage/iconos/nikon.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Olympus',
            'slug' => 'olympus',
            'image' => 'storage/iconos/olympus.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Pentax',
            'slug' => 'pentax',
            'image' => 'storage/iconos/pentax.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Canon',
            'slug' => 'canon',
            'image' => 'storage/iconos/canon.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Fujifilm',
            'slug' => 'fujifilm',
            'image' => 'storage/iconos/fujifilm.svg'
        ]);
        DB::table('categories')->insert([
            'name' => 'Leica',
            'slug' => 'leica',
            'image' => 'storage/iconos/leica.svg'
        ]);
    }
}
