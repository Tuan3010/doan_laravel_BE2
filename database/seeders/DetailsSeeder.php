<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories_products')->insert([
            ['id_category' => 6, 'id_product' => 1],
            ['id_category' => 7, 'id_product' => 1],
            ['id_category' => 8, 'id_product' => 1],
            ['id_category' => 4, 'id_product' => 1],
        ]);
        DB::table('categories_products')->insert([
            ['id_category' => 6, 'id_product' => 2],
            ['id_category' => 7, 'id_product' => 2],
            ['id_category' => 8, 'id_product' => 2],
            ['id_category' => 4, 'id_product' => 2],
        ]);
        DB::table('categories_products')->insert([
            ['id_category' => 6, 'id_product' => 3],
            ['id_category' => 7, 'id_product' => 3],
        ]);
        DB::table('categories_products')->insert([
            ['id_category' => 6, 'id_product' => 4],
            ['id_category' => 1, 'id_product' => 4],
            ['id_category' => 7, 'id_product' => 4],
        ]);
        DB::table('categories_products')->insert([
            ['id_category' => 6, 'id_product' => 5],
            ['id_category' => 7, 'id_product' => 5],
            ['id_category' => 8, 'id_product' => 5],
            ['id_category' => 2, 'id_product' => 5],
            ['id_category' => 1, 'id_product' => 5],
        ]);
        DB::table('categories_products')->insert([
            ['id_category' => 7, 'id_product' => 6],     
            ['id_category' => 2, 'id_product' => 6],
            ['id_category' => 3, 'id_product' => 6],
            ['id_category' => 1, 'id_product' => 6],
        ]);
        DB::table('categories_products')->insert([
            ['id_category' => 7, 'id_product' => 7],     
            ['id_category' => 2, 'id_product' => 7],
        ]);
        DB::table('categories_products')->insert([
            ['id_category' => 6, 'id_product' => 8],
            ['id_category' => 7, 'id_product' => 8],
            ['id_category' => 8, 'id_product' => 8],
            ['id_category' => 4, 'id_product' => 8],
        ]);
        DB::table('categories_products')->insert([
            ['id_category' => 9, 'id_product' => 9],
        ]);
        DB::table('categories_products')->insert([
            ['id_category' => 9, 'id_product' => 10],
        ]);
        DB::table('categories_products')->insert([
            ['id_category' => 9, 'id_product' => 111],
        ]);
        
        // Thêm chi tiết màu sắc
        DB::table('colors_products')->insert([
            ['id_color' => 1, 'id_product' => 1],
            ['id_color' => 7, 'id_product' => 1],
        ]);
        DB::table('colors_products')->insert([
            ['id_color' => 1, 'id_product' => 2],
            ['id_color' => 2, 'id_product' => 2],
        ]);
        DB::table('colors_products')->insert([
            ['id_color' => 3, 'id_product' => 3],
        ]);
        DB::table('colors_products')->insert([
            ['id_color' => 1, 'id_product' => 4],
            ['id_color' => 7, 'id_product' => 4],
        ]);
        DB::table('colors_products')->insert([
            ['id_color' => 3, 'id_product' => 5],
        ]);
        DB::table('colors_products')->insert([
            ['id_color' => 4, 'id_product' => 6],
        ]);
        DB::table('colors_products')->insert([
            ['id_color' => 5, 'id_product' => 7],
        ]);
        DB::table('colors_products')->insert([
            ['id_color' => 1, 'id_product' => 8],
            ['id_color' => 7, 'id_product' => 8],
            ['id_color' => 6, 'id_product' => 8],
        ]);
        DB::table('colors_products')->insert([
            ['id_color' => 8, 'id_product' => 9],
            ['id_color' => 7, 'id_product' => 9],
            ['id_color' => 4, 'id_product' => 9],
            ['id_color' => 1, 'id_product' => 9],
            ['id_color' => 5, 'id_product' => 9],
        ]);
        DB::table('colors_products')->insert([
            ['id_color' => 1, 'id_product' => 10],
        ]);
        DB::table('colors_products')->insert([
            ['id_color' => 1, 'id_product' => 11],
        ]);

        // Thêm chi tiết size
        DB::table('sizes_products')->insert([
            ['id_size' => 1, 'id_product' => 1],
            ['id_size' => 2, 'id_product' => 1],
            ['id_size' => 3, 'id_product' => 1],
            ['id_size' => 4, 'id_product' => 1],
            ['id_size' => 5, 'id_product' => 1],
            ['id_size' => 6, 'id_product' => 1],
            ['id_size' => 7, 'id_product' => 1],
        ]);
        DB::table('sizes_products')->insert([
            ['id_size' => 3, 'id_product' => 2],
            ['id_size' => 4, 'id_product' => 2],
            ['id_size' => 5, 'id_product' => 2],
            ['id_size' => 6, 'id_product' => 2],
        ]);
        DB::table('sizes_products')->insert([
            ['id_size' => 1, 'id_product' => 3],
            ['id_size' => 2, 'id_product' => 3],
            ['id_size' => 3, 'id_product' => 3],
            ['id_size' => 4, 'id_product' => 3],
            ['id_size' => 5, 'id_product' => 3],
        ]);
        DB::table('sizes_products')->insert([
            ['id_size' => 1, 'id_product' => 4],
            ['id_size' => 2, 'id_product' => 4],
            ['id_size' => 3, 'id_product' => 4],
            ['id_size' => 4, 'id_product' => 4],
            ['id_size' => 5, 'id_product' => 4],
        ]);
        DB::table('sizes_products')->insert([
            ['id_size' => 1, 'id_product' => 5],
            ['id_size' => 2, 'id_product' => 5],
            ['id_size' => 3, 'id_product' => 5],
            ['id_size' => 4, 'id_product' => 5],
            ['id_size' => 5, 'id_product' => 5],
            ['id_size' => 6, 'id_product' => 5],
            ['id_size' => 7, 'id_product' => 5],
        ]);
        DB::table('sizes_products')->insert([
            ['id_size' => 1, 'id_product' => 6],
            ['id_size' => 2, 'id_product' => 6],
            ['id_size' => 3, 'id_product' => 6],
            ['id_size' => 4, 'id_product' => 6],
            ['id_size' => 5, 'id_product' => 6],
        ]);
        DB::table('sizes_products')->insert([
            ['id_size' => 3, 'id_product' => 7],
            ['id_size' => 4, 'id_product' => 7],
            ['id_size' => 5, 'id_product' => 7],
        ]);
        DB::table('sizes_products')->insert([
            ['id_size' => 1, 'id_product' => 8],
            ['id_size' => 2, 'id_product' => 8],
            ['id_size' => 3, 'id_product' => 8],
            ['id_size' => 4, 'id_product' => 8],
            ['id_size' => 5, 'id_product' => 8],
            ['id_size' => 6, 'id_product' => 8],
            ['id_size' => 7, 'id_product' => 8],
        ]);
        DB::table('sizes_products')->insert([
            ['id_size' => 8, 'id_product' => 9],
            
        ]);
        DB::table('sizes_products')->insert([
            ['id_size' => 8, 'id_product' => 10],
            
        ]);
        DB::table('sizes_products')->insert([
            ['id_size' => 8, 'id_product' => 11],
            
        ]);
    }
}
