<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Xóa dữ liệu cũ trong bảng
        DB::table('products')->truncate();

        // Thêm dữ liệu giả
        for ($i = 1; $i <= 50; $i++) {
            DB::table('products')->insert([
                'name' => $faker->word, // Tên ngẫu nhiên
                'description' => $faker->sentence, // Mô tả ngẫu nhiên
                'price' => rand(10, 100),
                'category_id' => rand(1, 5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
