<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    const MAX_USERS = 100; // Số lượng users tối đa
    const MAX_ORDERS_PER_USER = 5; // Số đơn hàng tối đa mỗi user

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Xóa dữ liệu cũ nếu có
        DB::table('orders')->truncate();

        $orderId = 1;

        for ($userId = 1; $userId < self::MAX_USERS; $userId++) {
            // Mỗi user có từ 1 đến 5 đơn hàng
            $orderCount = rand(1, self::MAX_ORDERS_PER_USER);

            for ($j = 0; $j < $orderCount; $j++) {
                DB::table('orders')->insert([
                    'id' => $orderId,
                    'user_id' => $userId,
                    'total_amount' => rand(100, 1000) * 1000, // Giá trị từ 100,000 đến 1,000,000
                    'address' => 'Địa chỉ ' . $userId . ' - Đơn hàng ' . ($j + 1),
                    'created_at' => now()->subDays(rand(0, 365)), // Ngẫu nhiên trong 1 năm
                    'updated_at' => now(),
                ]);

                $orderId++;
            }
        }
    }
}
