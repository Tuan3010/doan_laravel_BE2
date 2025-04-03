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
        DB::table('products')->updateOrInsert([
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
        DB::table('products')->updateOrInsert([
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
        DB::table('products')->updateOrInsert([
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
        DB::table('products')->updateOrInsert([
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
        DB::table('products')->updateOrInsert([
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
        DB::table('products')->updateOrInsert([
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
        DB::table('products')->updateOrInsert([
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
        DB::table('products')->updateOrInsert([
            'id_product' => '8',
            'name_product' => 'Vintas Public 2000s - Low Top',       
            'price_product' => '500000',       
            'des_product' => 'Gender: Unisex
            Size run: 35 – 46
            Upper: Canvas NE
            Outsole: Rubber',       
            'img_product' => 'Pro_AV00208_2-500x500.jpg',
        ]);
        DB::table('products')->updateOrInsert([
            'id_product' => '9',
            'name_product' => 'HIGH CREW SOCKS - ANANAS DAILY THINGS - CINNAMON STICK',       
            'price_product' => '95000',       
            'des_product' => 'Giới tính – /Unisex/
            Họa tiết – /Ananas Daily Things/
            Thành phần – /53% Cotton, 40% Polyester, 3% Spandex, 2% Nylon, 2% Elastan/',       
            'img_product' => 'Pro_AHCS008_1-500x500.jpg',
        ]);
        DB::table('products')->updateOrInsert([
            'id_product' => '10',
            'name_product' => 'TRUCKER HAT - BE POSITIVE - BLACK/WHITE',       
            'price_product' => '275000',       
            'des_product' => 'Trucker Hat - Be Positive màu Black/White đơn giản cùng artwork “Be Positive” mang nét tích cực của nhịp sống hiện đại. Với chất vải thun lạnh từ sợi Polyester có đệm mút và phần hậu dùng lưới mesh thông thoáng đặc trưng của Trucker Hat, đây chắc chắn là yếu tố ghi điểm cho những ngày quay cuồng, đầu bù tóc rối mà vẫn tự tin bứt phá chất tôi riêng biệt. 
            Gender – /Unisex/
            Size: Free Hoạ tiết – /Be Positive/         
            Chất liệu – /100% Polyester/
            Thêu 2D đơn giản',
            'img_product' => 'pro_ATH005_1-500x500.jpg',
        ]);
        DB::table('products')->updateOrInsert([
            'id_product' => '11',
            'name_product' => 'ANANAS "COPY" STORE BAG 001 - BLACK',       
            'price_product' => '250000',       
            'des_product' => 'Hướng đến sức chịu đựng và độ lì lợm cao làm cốt lõi. Ananas "Copy" Store Bag 001 được thiết kế cực kì căn bản, tiết chế hoàn toàn các chi tiết cộng thêm khác để sự đặc biệt tập trung hoàn toàn vào chất liệu chính. Túi sử dụng Canvas cao cấp với định lượng lên đến 365 gsm, có tính năng trượt nước, chấp hết các thể loại xuyên thủng từ kim loại đến chất lỏng nếu đặt dưới một cường độ tác động không quá lớn.
            Giới tính: Unisex
Chất liệu: Canvas, định lượng 365GSM (trượt nước)
Thành phần chất liệu: 100% Cotton
Kích thước: 440 x 390 x 120 mm (W x H x D)
Dung tích: 20.5 lit
Hoạ tiết: Ananas – DiscoverYOU
Sử dụng phương pháp in lụa.',
            'img_product' => 'Pro_ASTB001_1-500x500.jpeg',
        ]);
        // --------- Thêm màu sắc ----
        DB::table('colors')->updateOrInsert([
            'id'         => 1,
            'name_color' => 'Đen',
        ]);
        DB::table('colors')->updateOrInsert([
            'id'         => 2,
            'name_color' => 'Xanh Lá',
        ]);
        DB::table('colors')->updateOrInsert([
            'id'         => 3,
            'name_color' => 'Xanh Dương',
        ]);
        DB::table('colors')->updateOrInsert([
            'id'         => 4,
            'name_color' => 'Hồng',
        ]);
        DB::table('colors')->updateOrInsert([
            'id'         => 5,
            'name_color' => 'Nâu',
        ]);
        DB::table('colors')->updateOrInsert([
            'id'         => 6,
            'name_color' => 'Xám',
        ]);
        DB::table('colors')->updateOrInsert([
            'id'         => 7,
            'name_color' => 'Trắng',
        ]);
        DB::table('colors')->updateOrInsert([
            'id'         => 8,
            'name_color' => 'Tím',
        ]);
        // Thêm size
        DB::table('sizes')->updateOrInsert([
            'id'         => 1,
            'name_size' => '35',
        ]);
        DB::table('sizes')->updateOrInsert([
            'id'         => 2,
            'name_size' => '36',
        ]);
        DB::table('sizes')->updateOrInsert([
            'id'         => 3,
            'name_size' => '37',
        ]);
        DB::table('sizes')->updateOrInsert([
            'id'         => 4,
            'name_size' => '38',
        ]);
        DB::table('sizes')->updateOrInsert([
            'id'         => 5,
            'name_size' => '39',
        ]);
        DB::table('sizes')->updateOrInsert([
            'id'         => 6,
            'name_size' => '40',
        ]);
        DB::table('sizes')->updateOrInsert([
            'id'         => 7,
            'name_size' => '41',
        ]);
        DB::table('sizes')->updateOrInsert([
            'id'         => 8,
            'name_size' => 'Free',
        ]);
        // Thêm category
        DB::table('categories')->updateOrInsert([
            'id'         => 1,
            'name_category' => 'Vrler',
            'type' => '1',
        ]);
        DB::table('categories')->updateOrInsert([
            'id'         => 2,
            'name_category' => 'Vintas',
            'type' => '1',
        ]);
        DB::table('categories')->updateOrInsert([
            'id'         => 3,
            'name_category' => 'Urban',
            'type' => '1',
        ]);
        DB::table('categories')->updateOrInsert([
            'id'         => 4,
            'name_category' => 'Bassas',
            'type' => '1',
        ]);
        DB::table('categories')->updateOrInsert([
            'id'         => 5,
            'name_category' => 'Track 6',
            'type' => '1',
        ]);
        DB::table('categories')->updateOrInsert([
            'id'         => 6,
            'name_category' => 'Nam',
            'type' => '0',
        ]);
        DB::table('categories')->updateOrInsert([
            'id'         => 7,
            'name_category' => 'Nữ',
            'type' => '0',
        ]);
        DB::table('categories')->updateOrInsert([
            'id'         => 8,
            'name_category' => 'Unisex',
            'type' => '0',
        ]);
        DB::table('categories')->updateOrInsert([
            'id'         => 9,
            'name_category' => 'Phụ Kiện',
            'type' => '2',
        ]);
        // Thêm thanh toán
        DB::table('payments')->updateOrInsert([
            'name_payment' => 'Thanh toán khi nhận hàng'
        ]);
        
    }
}
