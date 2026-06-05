<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            BrandSeeder::class,
        ]);

        Product::create([
            'nama_product' => 'Shampoo Anti Dandruff',
            'harga' => 25000,
            'category_id' => 1,
            'brand_id' => 1
        ]);
        Product::create([
            'nama_product' => 'Lipstick Matte',
            'harga' => 55000,
            'category_id' => 3,
            'brand_id' => 2
        ]);
    }
}
