<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Xóa dữ liệu cũ trong bảng
        // DB::table('categories')->truncate();

        // Thêm dữ liệu giả
        for ($i = 1; $i <= 5; $i++) {
            DB::table('categories')->insert([
                'name' => $faker->word, // Tên ngẫu nhiên
                'description' => $faker->sentence, // Mô tả ngẫu nhiên
            ]);
        }

    }
}
