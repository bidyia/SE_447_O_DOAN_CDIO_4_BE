<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NhaCungCapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nha_cung_caps')->delete();

        DB::table('nha_cung_caps')->truncate();

        DB::table('nha_cung_caps')->insert(
            [
                [
                    'ho_ten' =>'Nhà cung cấp',
                    'email' => 'nhacungcap@gmail.com',
                    'so_dien_thoai' => '0123456789',
                    'password' => bcrypt('123456'),
                    'dia_chi' =>'nhà cung cấp',
                    'hinh_anh' => 'hinh_anh',
                ]
            ]

        );
    }
}
