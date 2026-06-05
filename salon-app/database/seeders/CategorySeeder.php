<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create(['nama_category' => 'Hair Care']);
        Category::create(['nama_category' => 'Skin Care']);
        Category::create(['nama_category' => 'Makeup']);
        Category::create(['nama_category' => 'Body Care']);
    }
}
