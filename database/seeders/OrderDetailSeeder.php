<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderDetailSeeder extends Seeder
{
    const MAX_ORDERS = 500;
    const MAX_PRODUCTS = 4;
    const MAX_QUANTITY = 3;

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('order_detail')->truncate();

        for ($orderId = 1; $orderId < self::MAX_ORDERS; $orderId++) {
            $productCount = rand(1, self::MAX_PRODUCTS);
            $productIds = range(1, self::MAX_PRODUCTS);
            shuffle($productIds);
            $selectedProducts = array_slice($productIds, 0, $productCount);

            foreach ($selectedProducts as $productId) {
                DB::table('order_detail')->insert([
                    'order_id' => $orderId,
                    'product_id' => $productId,
                    'quantity' => rand(1, self::MAX_QUANTITY),
                    'notes' => 'Ghi chú đơn hàng ' . $orderId . ' - SP ' . $productId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
