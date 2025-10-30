<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Electronics
            [
                'name' => 'iPhone 15 Pro',
                'description' => 'Latest iPhone with advanced camera system',
                'price' => 999.99,
                'category' => 'Electronics',
                'stock_quantity' => 50,
                'sku' => 'IPH15PRO-001',
                'is_active' => true,
            ],
            [
                'name' => 'Samsung Galaxy S24',
                'description' => 'Premium Android smartphone with AI features',
                'price' => 899.99,
                'category' => 'Electronics',
                'stock_quantity' => 75,
                'sku' => 'SGS24-001',
                'is_active' => true,
            ],
            [
                'name' => 'MacBook Pro 16"',
                'description' => 'Professional laptop with M3 chip',
                'price' => 2499.99,
                'category' => 'Electronics',
                'stock_quantity' => 25,
                'sku' => 'MBP16-001',
                'is_active' => true,
            ],
            [
                'name' => 'Sony WH-1000XM5',
                'description' => 'Noise-cancelling wireless headphones',
                'price' => 399.99,
                'category' => 'Electronics',
                'stock_quantity' => 100,
                'sku' => 'SONY-WH1000XM5',
                'is_active' => true,
            ],

            // Clothing
            [
                'name' => 'Nike Air Max 270',
                'description' => 'Comfortable running shoes with Air Max technology',
                'price' => 150.00,
                'category' => 'Clothing',
                'stock_quantity' => 200,
                'sku' => 'NIKE-AM270-001',
                'is_active' => true,
            ],
            [
                'name' => 'Levi\'s 501 Jeans',
                'description' => 'Classic straight-fit denim jeans',
                'price' => 89.99,
                'category' => 'Clothing',
                'stock_quantity' => 150,
                'sku' => 'LEVIS-501-001',
                'is_active' => true,
            ],
            [
                'name' => 'Adidas Originals T-Shirt',
                'description' => 'Classic cotton t-shirt with Adidas logo',
                'price' => 29.99,
                'category' => 'Clothing',
                'stock_quantity' => 300,
                'sku' => 'ADIDAS-TS-001',
                'is_active' => true,
            ],

            // Home & Garden
            [
                'name' => 'Dyson V15 Detect',
                'description' => 'Cordless vacuum with laser dust detection',
                'price' => 749.99,
                'category' => 'Home & Garden',
                'stock_quantity' => 40,
                'sku' => 'DYSON-V15-001',
                'is_active' => true,
            ],
            [
                'name' => 'KitchenAid Stand Mixer',
                'description' => 'Professional 5-quart stand mixer in red',
                'price' => 379.99,
                'category' => 'Home & Garden',
                'stock_quantity' => 60,
                'sku' => 'KA-SM5Q-001',
                'is_active' => true,
            ],
            [
                'name' => 'Philips Hue Smart Bulb',
                'description' => 'WiFi-enabled smart LED bulb with color control',
                'price' => 49.99,
                'category' => 'Home & Garden',
                'stock_quantity' => 120,
                'sku' => 'PHILIPS-HUE-001',
                'is_active' => true,
            ],

            // Books
            [
                'name' => 'The Great Gatsby',
                'description' => 'Classic American novel by F. Scott Fitzgerald',
                'price' => 12.99,
                'category' => 'Books',
                'stock_quantity' => 500,
                'sku' => 'BOOK-GG-001',
                'is_active' => true,
            ],
            [
                'name' => 'Clean Code',
                'description' => 'A Handbook of Agile Software Craftsmanship',
                'price' => 45.99,
                'category' => 'Books',
                'stock_quantity' => 80,
                'sku' => 'BOOK-CC-001',
                'is_active' => true,
            ],

            // Sports & Outdoors
            [
                'name' => 'Yeti Rambler 20oz',
                'description' => 'Insulated stainless steel water bottle',
                'price' => 35.00,
                'category' => 'Sports & Outdoors',
                'stock_quantity' => 180,
                'sku' => 'YETI-R20-001',
                'is_active' => true,
            ],
            [
                'name' => 'Patagonia Better Sweater',
                'description' => 'Fleece jacket made from recycled materials',
                'price' => 99.00,
                'category' => 'Sports & Outdoors',
                'stock_quantity' => 90,
                'sku' => 'PATAGONIA-BS-001',
                'is_active' => true,
            ],

            // Beauty & Health
            [
                'name' => 'Olaplex No.3 Hair Perfector',
                'description' => 'At-home hair treatment for damaged hair',
                'price' => 28.00,
                'category' => 'Beauty & Health',
                'stock_quantity' => 250,
                'sku' => 'OLAPLEX-N3-001',
                'is_active' => true,
            ],
            [
                'name' => 'The Ordinary Niacinamide 10%',
                'description' => 'Serum for blemish-prone and congested skin',
                'price' => 6.80,
                'category' => 'Beauty & Health',
                'stock_quantity' => 400,
                'sku' => 'TO-NIAC-001',
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
