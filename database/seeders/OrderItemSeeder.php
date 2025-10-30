<?php

namespace Database\Seeders;

use App\Models\OrderItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orderItems = [];
        $quantities = [1, 1, 1, 2, 2, 3, 3, 4, 5, 6]; // Weighted towards smaller quantities
        
        // Get all orders and products
        $orders = \App\Models\Order::all();
        $products = \App\Models\Product::all();
        
        // Create strategic product popularity for revenue analysis
        $popularProducts = [1, 2, 3, 4, 5]; // First 5 products will be most popular
        $mediumProducts = [6, 7, 8, 9, 10]; // Next 5 will be medium popular
        $rareProducts = [11, 12, 13, 14, 15, 16]; // Last 6 will be rarely ordered
        
        foreach ($orders as $order) {
            // Skip orders that should have no items (for data quality check)
            if (in_array($order->id, [1, 2, 3])) { // These are the "no item" orders
                continue;
            }
            
            // Each order has 1-4 items
            $itemCount = rand(1, 4);
            if (rand(1, 100) <= 70) {
                $itemCount = rand(1, 2);
            }
            
            $usedProducts = []; // Track products already in this order
            
            for ($item = 1; $item <= $itemCount; $item++) {
                $product = null;
                
                // Strategic product selection based on popularity
                $rand = rand(1, 100);
                if ($rand <= 50) {
                    // 50% chance for popular products
                    $productId = $popularProducts[array_rand($popularProducts)];
                } elseif ($rand <= 80) {
                    // 30% chance for medium products
                    $productId = $mediumProducts[array_rand($mediumProducts)];
                } else {
                    // 20% chance for rare products
                    $productId = $rareProducts[array_rand($rareProducts)];
                }
                
                // Avoid duplicate products in same order
                if (in_array($productId, $usedProducts)) {
                    $productId = rand(1, 16); // Fallback to any product
                }
                
                $product = $products->find($productId);
                if (!$product) continue;
                
                $usedProducts[] = $productId;
                
                $orderItems[] = [
                    'order_id' => $order->id,
                    'product_id' => $product->id,
                    'price' => $product->price,
                    'quantity' => $quantities[array_rand($quantities)],
                ];
            }
        }

        foreach ($orderItems as $orderItem) {
            OrderItem::create($orderItem);
        }
    }
}
