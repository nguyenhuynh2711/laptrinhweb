<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Laptop',
                'image' => 'laptop.png',
                'price' => 100000,
                'quantity' => 1,
                'description' => 'Day la laptop voi cong nghe moi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('products')->insert([
            [
                'name' => 'PC',
                'image' => 'pc.png',
                'price' => 300000,
                'quantity' => 1,
                'description' => 'Day la pc voi cong nghe moi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        DB::table('products')->insert([
            [
                'name' => 'Dienthoai',
                'image' => 'dienthoai.png',
                'price' => 50000,
                'quantity' => 1,
                'description' => 'Day la dien thoai voi cong nghe moi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        DB::table('products')->insert([
            [
                'name' => 'Tainghe',
                'image' => 'tainghe.png',
                'price' => 200,
                'quantity' => 1,
                'description' => 'Day la tainghe voi cong nghe moi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
