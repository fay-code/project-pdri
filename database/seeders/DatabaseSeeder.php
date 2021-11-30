<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\User;
use App\Models\ViewData;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        Category::create([
            'kodeCategories' => '0001',
            'namaCategories' => 'data-iuran'
        ]);

        Category::create([
            'kodeCategories' => '0002',
            'namaCategories' => 'data-hunian'
        ]);

        Category::create([
            'kodeCategories' => '0003',
            'namaCategories' => 'data-petugas'
        ]);

        ViewData::create([
            'categories_id' => '01',
            'user_id' => '01'
        ]);

        ViewData::create([
            'categories_id' => '02',
            'user_id' => '02'
        ]);

        ViewData::create([
            'categories_id' => '03',
            'user_id' => '03'
        ]);
    }
}
