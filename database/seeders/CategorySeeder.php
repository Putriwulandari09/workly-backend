<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create([
            'name' => 'Web Development'
        ]);

        Category::create([
            'name' => 'Mobile Development'
        ]);

        Category::create([
            'name' => 'UI/UX Design'
        ]);

        Category::create([
            'name' => 'Data Analyst'
        ]);
    }
}