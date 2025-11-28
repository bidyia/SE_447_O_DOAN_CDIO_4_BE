<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatLichSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    { {
            DB::table('dat_lichs')->delete();

            DB::table('dat_lichs')->truncate();

            DB::table('dat_lichs')->insert(
                [
                    ["id_khach_hang" => 1, "id_chi_tiet_thuong_hieu" => 1, "ngay_dat_lich" => "2025-11-17", "thoi_gian" => "23:58:13","trang_thai" => 1],
                    ["id_khach_hang" => 1, "id_chi_tiet_thuong_hieu" => 1, "ngay_dat_lich" => "2025-11-20", "thoi_gian" => "23:58:40","trang_thai" => 1],
                    ["id_khach_hang" => 1, "id_chi_tiet_thuong_hieu" => 1, "ngay_dat_lich" => "2025-11-19", "thoi_gian" => "13:58:59","trang_thai" => 1]
                ]

            );
        }
    }
}
