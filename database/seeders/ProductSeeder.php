<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'iPhone 15 Pro',
            'description' => 'Latest Apple iPhone with advanced camera and performance',
            'price' => 999.99,
            'file_path' => 'products/iphone15pro.jpg'
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S24',
            'description' => 'Premium Android smartphone with excellent display',
            'price' => 899.99,
            'file_path' => 'products/galaxys24.jpg'
        ]);

        Product::create([
            'name' => 'MacBook Air M3',
            'description' => 'Lightweight laptop with powerful M3 chip',
            'price' => 1299.99,
            'file_path' => 'products/macbookair.jpg'
        ]);

        Product::create([
            'name' => 'Sony WH-1000XM5',
            'description' => 'Premium noise-canceling headphones',
            'price' => 349.99,
            'file_path' => 'products/sony_headphones.jpg'
        ]);

        Product::create([
            'name' => 'iPad Pro 12.9"',
            'description' => 'Professional tablet for creative work',
            'price' => 1099.99,
            'file_path' => 'products/ipadpro.jpg'
        ]);
    }
}
