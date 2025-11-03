<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ThuongHieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('thuong_hieus')->delete();

        DB::table('thuong_hieus')->truncate();

        DB::table('thuong_hieus')->insert(
            [
                ['id_dich_vu' => '1', 'id_nha_cung_cap' => '1', 'ten_thuong_hieu' => 'Tên thương hiệu','hinh_anh' => 'hinh_anh.png','tinh_thanh'=>'tỉnh thành','dia_chi_cu_the'=>'địa chỉ cụ thể','mo_ta_ngan'=>'mô tả ngắn','mo_ta_chi_tiet'=>'mô tả chi tiết'],
            ]

        );
    }
}
