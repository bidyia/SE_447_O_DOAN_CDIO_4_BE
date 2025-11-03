<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DichVuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dich_vus')->delete();

        DB::table('dich_vus')->truncate();

        DB::table('dich_vus')->insert(
            [
                ['ten_dich_vu'=>'Lưu trú','slug_dich_vu'=>'luu-tru','hinh_anh'=>'https://kientrucsuvietnam.vn/wp-content/uploads/2022/04/thiet-ke-khach-san-6.jpeg'],
                ['ten_dich_vu'=>'Ẩm thực','slug_dich_vu'=>'am-thuc','hinh_anh'=>'https://bepos.io/wp-content/uploads/2023/06/logo-nha-hang-dep-7.jpg'],
                ['ten_dich_vu'=>'chăm sóc','slug_dich_vu'=>'cham-soc','hinh_anh'=>'https://graphicsfamily.com/wp-content/uploads/edd/2021/06/Free-BeautySpa-Logo-Design-PSD-Download-2048x1152.jpg'],
                ['ten_dich_vu'=>'giải trí','slug_dich_vu'=>'giai-tri','hinh_anh'=>'https://tse2.mm.bing.net/th/id/OIP.B75K2XC9_pCdoWFdr3JoCAHaHa?rs=1&pid=ImgDetMain&o=7&rm=3']
            ]

        );
    }
}
