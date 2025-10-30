<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = [];
        $orderStatuses = ['completed', 'shipped', 'processing', 'pending', 'cancelled'];
        $shippingAmounts = [5.99, 7.99, 9.99, 11.99, 12.99, 14.99, 16.99, 19.99, 24.99, 29.99];
        
        // Generate comprehensive order data to support all analytical queries
        
        // 1. Create high-volume customers (customers 1-20) with many orders before June 1, 2021
        for ($customerId = 1; $customerId <= 20; $customerId++) {
            // Each high-volume customer gets 5-8 orders before June 1, 2021
            $orderCount = rand(5, 8);
            for ($i = 0; $i < $orderCount; $i++) {
                $year = rand(2020, 2021);
                $month = rand(1, 12);
                $day = rand(1, 28);
                
                // Ensure dates are before June 1, 2021
                if ($year == 2021 && $month >= 6) {
                    $month = rand(1, 5);
                }
                
                $date = sprintf('%04d-%02d-%02d', $year, $month, $day);
                
                $orders[] = [
                    'date' => $date,
                    'shipping_amount' => $shippingAmounts[array_rand($shippingAmounts)],
                    'order_status' => $orderStatuses[array_rand($orderStatuses)],
                    'customer_id' => $customerId,
                ];
            }
        }
        
        // 2. Create medium-volume customers (customers 21-50) with 2-4 orders before June 1, 2021
        for ($customerId = 21; $customerId <= 50; $customerId++) {
            $orderCount = rand(2, 4);
            for ($i = 0; $i < $orderCount; $i++) {
                $year = rand(2020, 2021);
                $month = rand(1, 12);
                $day = rand(1, 28);
                
                if ($year == 2021 && $month >= 6) {
                    $month = rand(1, 5);
                }
                
                $date = sprintf('%04d-%02d-%02d', $year, $month, $day);
                
                $orders[] = [
                    'date' => $date,
                    'shipping_amount' => $shippingAmounts[array_rand($shippingAmounts)],
                    'order_status' => $orderStatuses[array_rand($orderStatuses)],
                    'customer_id' => $customerId,
                ];
            }
        }
        
        // 3. Create low-volume customers (customers 51-70) with 1-2 orders before June 1, 2021
        for ($customerId = 51; $customerId <= 70; $customerId++) {
            $orderCount = rand(1, 2);
            for ($i = 0; $i < $orderCount; $i++) {
                $year = rand(2020, 2021);
                $month = rand(1, 12);
                $day = rand(1, 28);
                
                if ($year == 2021 && $month >= 6) {
                    $month = rand(1, 5);
                }
                
                $date = sprintf('%04d-%02d-%02d', $year, $month, $day);
                
                $orders[] = [
                    'date' => $date,
                    'shipping_amount' => $shippingAmounts[array_rand($shippingAmounts)],
                    'order_status' => $orderStatuses[array_rand($orderStatuses)],
                    'customer_id' => $customerId,
                ];
            }
        }
        
        // 4. Create some customers with no orders before June 1, 2021 (customers 71-90)
        // These will be used for "lapsed customers" and "products never ordered" queries
        
        // 5. Add some orders after June 1, 2021 for recent activity
        for ($i = 0; $i < 100; $i++) {
            $customerId = rand(1, 90);
            $year = rand(2021, 2023);
            $month = rand(1, 12);
            $day = rand(1, 28);
            
            // Ensure dates are after June 1, 2021
            if ($year == 2021 && $month < 6) {
                $month = rand(6, 12);
            }
            
            $date = sprintf('%04d-%02d-%02d', $year, $month, $day);
            
            $orders[] = [
                'date' => $date,
                'shipping_amount' => $shippingAmounts[array_rand($shippingAmounts)],
                'order_status' => $orderStatuses[array_rand($orderStatuses)],
                'customer_id' => $customerId,
            ];
        }
        
        // 6. Add some orders with no items (for data quality check)
        $noItemOrders = [
            ['date' => '2021-01-10', 'shipping_amount' => 9.99, 'order_status' => 'pending', 'customer_id' => 1],
            ['date' => '2021-02-15', 'shipping_amount' => 12.99, 'order_status' => 'processing', 'customer_id' => 2],
            ['date' => '2021-03-20', 'shipping_amount' => 7.99, 'order_status' => 'pending', 'customer_id' => 3],
        ];
        
        $orders = array_merge($orders, $noItemOrders);

        foreach ($orders as $order) {
            Order::create($order);
        }
    }
}
