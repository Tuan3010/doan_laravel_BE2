<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1
        DB::table('products')->insert([
            'id_product' => '1',
            'name_product' => 'Basas Bumper Gum EXT NE - Low Top',       
            'price_product' => '500000',       
            'des_product' => 'Gender: Unisex
            Size run: 35 – 46
            Upper: Canvas NE
            Outsole: Rubber',       
            'img_product' => 'Pro_AV00098_2-500x500.jpg',
        ]);
        // 2
        DB::table('products')->insert([
            'id_product' => '2',
            'name_product' => 'Basas Evergreen - Low Top',       
            'price_product' => '580000',       
            'des_product' => 'Gender: Unisex
            Size run: 35 – 46
            Upper: Canvas NE
            Outsole: Rubber
            Có thêm 01 bộ dây đi kèm',       
            'img_product' => 'pro_AV00142_1-500x500.jpg',
        ]);
        // 3
        DB::table('products')->insert([
            'id_product' => '3',
            'name_product' => 'Basas Workaday - High Top',       
            'price_product' => '400000',       
            'des_product' => 'Gender: Unisex
            Size run: 35 – 46
            Upper: Canvas NE
            Outsole: Rubber',       
            'img_product' => 'Pro_AV00151_1-500x500.jpg',
        ]);
        // 4
        DB::table('products')->insert([
            'id_product' => '4',
            'name_product' => 'BASAS WORKADAY - HIGH TOP - BLACK',       
            'price_product' => '650000',       
            'des_product' => 'Gender: Unisex
            Size run: 35 – 46
            Upper: Canvas NE
            Outsole: Rubber
            Có thêm 01 bộ dây đi kèm',       
            'img_product' => 'Pro_AV00152_2-500x500.jpg',
        ]);
        // 5
        DB::table('products')->insert([
            'id_product' => '5',
            'name_product' => 'VINTAS SODA POP - LOW TOP - AMPARO BLUE',       
            'price_product' => '680000',       
            'des_product' => 'Gender: Unisex
            Size run: 35 – 46
            Upper: Corduroy
            Outsole: Rubber',       
            'img_product' => 'Pro_AV00154_2-500x500.jpg',
        ]);
        // 6
        DB::table('products')->insert([
            'id_product' => '6',
            'name_product' => 'VINTAS SODA POP - HIGH TOP - RED VIOLET',       
            'price_product' => '720000',       
            'des_product' => 'Gender: Unisex
            Size run: 35 – 46
            Upper: Corduroy
            Outsole: Rubber',       
            'img_product' => 'Pro_AV00155_2-500x500.jpg',
        ]);
        // 7
        DB::table('products')->insert([
            'id_product' => '7',
            'name_product' => 'Vintas Nauda EXT - High Top',       
            'price_product' => '800000',       
            'des_product' => 'Gender: Unisex
            Size run: 35 – 46
            Upper: Canvas NE
            Outsole: Rubber',       
            'img_product' => 'Pro_AV00204_2-500x500.jpeg',
        ]);
        // 8
        DB::table('products')->insert([
            'id_product' => '8',
            'name_product' => 'Vintas Public 2000s - Low Top',       
            'price_product' => '500000',       
            'des_product' => 'Gender: Unisex
            Size run: 35 – 46
            Upper: Canvas NE
            Outsole: Rubber',       
            'img_product' => 'Pro_AV00208_2-500x500.jpg',
        ]);
        // --------- Thêm màu sắc ----
        DB::table('colors')->insert([
            'id'         => 1,
            'name_color' => 'Đen',
        ]);
        DB::table('colors')->insert([
            'id'         => 2,
            'name_color' => 'Xanh Lá',
        ]);
        DB::table('colors')->insert([
            'id'         => 3,
            'name_color' => 'Xanh Dương',
        ]);
        DB::table('colors')->insert([
            'id'         => 4,
            'name_color' => 'Hồng',
        ]);
        DB::table('colors')->insert([
            'id'         => 5,
            'name_color' => 'Nâu',
        ]);
        DB::table('colors')->insert([
            'id'         => 6,
            'name_color' => 'Xám',
        ]);
        DB::table('colors')->insert([
            'id'         => 7,
            'name_color' => 'Trắng',
        ]);
        // Thêm size
        DB::table('sizes')->insert([
            'id'         => 1,
            'name_size' => '35',
        ]);
        DB::table('sizes')->insert([
            'id'         => 2,
            'name_size' => '36',
        ]);
        DB::table('sizes')->insert([
            'id'         => 3,
            'name_size' => '37',
        ]);
        DB::table('sizes')->insert([
            'id'         => 4,
            'name_size' => '38',
        ]);
        DB::table('sizes')->insert([
            'id'         => 5,
            'name_size' => '39',
        ]);
        DB::table('sizes')->insert([
            'id'         => 6,
            'name_size' => '40',
        ]);
        DB::table('sizes')->insert([
            'id'         => 7,
            'name_size' => '41',
        ]);
        DB::table('sizes')->insert([
            'id'         => 8,
            'name_size' => 'Free',
        ]);
        // Thêm category
        DB::table('categories')->insert([
            'id'         => 1,
            'name_category' => 'Vrler',
            'type' => '1',
        ]);
        DB::table('categories')->insert([
            'id'         => 2,
            'name_category' => 'Vintas',
            'type' => '1',
        ]);
        DB::table('categories')->insert([
            'id'         => 3,
            'name_category' => 'Urban',
            'type' => '1',
        ]);
        DB::table('categories')->insert([
            'id'         => 4,
            'name_category' => 'Bassas',
            'type' => '1',
        ]);
        DB::table('categories')->insert([
            'id'         => 5,
            'name_category' => 'Track 6',
            'type' => '1',
        ]);
        DB::table('categories')->insert([
            'id'         => 6,
            'name_category' => 'Nam',
            'type' => '0',
        ]);
        DB::table('categories')->insert([
            'id'         => 7,
            'name_category' => 'Nữ',
            'type' => '0',
        ]);
        DB::table('categories')->insert([
            'id'         => 8,
            'name_category' => 'Unisex',
            'type' => '0',
        ]);
        // Thêm thanh toán
        DB::table('payments')->insert([
            'name_payment' => 'Thanh toán khi nhận hàng'
        ]);

        
        
    }
}
