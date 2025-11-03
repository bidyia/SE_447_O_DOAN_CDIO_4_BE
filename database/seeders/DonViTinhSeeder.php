<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DonViTinhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('don_vi_tinhs')->delete();

        DB::table('don_vi_tinhs')->truncate();

        DB::table('don_vi_tinhs')->insert(
            [
                [
                    'id_dich_vu' => 1,
                    'ten_chi_tiet' => 'phòng đơn'
                ],
                [
                    'id_dich_vu' => 1,
                    'ten_chi_tiet' => 'phòng đôi'
                ],
                [
                    'id_dich_vu' => 1,
                    'ten_chi_tiet' => 'phòng vip'
                ],
                [
                    'id_dich_vu' => 1,
                    'ten_chi_tiet' => 'phòng gia đình'
                ],
                [
                    'id_dich_vu' => 2,
                    'ten_chi_tiet' => 'món'
                ],
                [
                    'id_dich_vu' => 3,
                    'ten_chi_tiet' => 'set'
                ],
                [
                    'id_dich_vu' => 3,
                    'ten_chi_tiet' => 'combo'
                ],
                [
                    'id_dich_vu' => 4,
                    'ten_chi_tiet' => 'vé người lớn'
                ],
                [
                    'id_dich_vu' => 4,
                    'ten_chi_tiet' => 'vé trẻ em'
                ],
                [
                    'id_dich_vu' => 1,
                    'ten_chi_tiet' => 'phòng tổng thống'
                ]
            ]

        );
    }
}
