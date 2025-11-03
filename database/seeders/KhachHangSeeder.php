<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KhachHangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('khach_hangs')->delete();

        DB::table('khach_hangs')->truncate();

        DB::table('khach_hangs')->insert(
            [
                [
                    'ho_ten' =>'khach hang',
                    'email' => 'khachhang@gmail.com',
                    'so_dien_thoai' => '0123456789',
                    'password' => bcrypt('123456'),
                    'dia_chi' =>'khách hàng',
                    'hinh_anh' => 'hinh_anh',
                ]
            ]

        );
    }
}
