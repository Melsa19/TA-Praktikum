<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Brand;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        Brand::create(['nama_brand' => 'L\'Oreal']);
        Brand::create(['nama_brand' => 'Maybelline']);
        Brand::create(['nama_brand' => 'Garnier']);
        Brand::create(['nama_brand' => 'Wardah']);
    }
}
