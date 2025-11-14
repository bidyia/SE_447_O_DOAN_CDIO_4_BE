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
                ['ho_ten' => 'Nguyễn Văn An', 'email' => 'nguyenvanan@gmail.com', 'so_dien_thoai' => '0905000001', 'password' => bcrypt('123456'), 'dia_chi' => '12 Nguyễn Trãi, Đà Nẵng', 'hinh_anh' => 'supplier1.png'],
                ['ho_ten' => 'Trần Thị Bích', 'email' => 'tranthibich@gmail.com', 'so_dien_thoai' => '0905000002', 'password' => bcrypt('123456'), 'dia_chi' => '45 Trần Phú, Nha Trang', 'hinh_anh' => 'supplier2.png'],
                ['ho_ten' => 'Lê Minh Cường', 'email' => 'leminhcuong@gmail.com', 'so_dien_thoai' => '0905000003', 'password' => bcrypt('123456'), 'dia_chi' => '78 Lê Lợi, Đà Nẵng', 'hinh_anh' => 'supplier3.png'],
                ['ho_ten' => 'Phạm Thị Dung', 'email' => 'phamthidung@gmail.com', 'so_dien_thoai' => '0905000004', 'password' => bcrypt('123456'), 'dia_chi' => '22 Nguyễn Huệ, Q1, TP.HCM', 'hinh_anh' => 'supplier4.png'],
                ['ho_ten' => 'Hoàng Văn Hùng', 'email' => 'hoangvanhung@gmail.com', 'so_dien_thoai' => '0905000005', 'password' => bcrypt('123456'), 'dia_chi' => '56 Cửa Đại, Hội An', 'hinh_anh' => 'supplier5.png'],
                ['ho_ten' => 'Đặng Thị Lan', 'email' => 'dangthilan@gmail.com', 'so_dien_thoai' => '0916000001', 'password' => bcrypt('123456'), 'dia_chi' => '33 Lý Thường Kiệt, Hà Nội', 'hinh_anh' => 'supplier6.png'],
                ['ho_ten' => 'Vũ Văn Nam', 'email' => 'vuvannam@gmail.com', 'so_dien_thoai' => '0916000002', 'password' => bcrypt('123456'), 'dia_chi' => '88 Nguyễn Ư Dĩ, Thảo Điền, TP.HCM', 'hinh_anh' => 'supplier7.png'],
                ['ho_ten' => 'Ngô Thị Oanh', 'email' => 'ngothioanh@gmail.com', 'so_dien_thoai' => '0916000003', 'password' => bcrypt('123456'), 'dia_chi' => '12 Pasteur, Q1, TP.HCM', 'hinh_anh' => 'supplier8.png'],
                ['ho_ten' => 'Bùi Văn Phúc', 'email' => 'buivanphuc@gmail.com', 'so_dien_thoai' => '0916000004', 'password' => bcrypt('123456'), 'dia_chi' => '10B Nguyễn Thái Học, Đà Nẵng', 'hinh_anh' => 'supplier9.png'],
                ['ho_ten' => 'Trương Thị Quỳnh', 'email' => 'truongthiquynh@gmail.com', 'so_dien_thoai' => '0916000005', 'password' => bcrypt('123456'), 'dia_chi' => '18 Trần Phú, Nha Trang', 'hinh_anh' => 'supplier10.png'],
                ['ho_ten' => 'Phan Văn Sang', 'email' => 'phanvansang@gmail.com', 'so_dien_thoai' => '0927000001', 'password' => bcrypt('123456'), 'dia_chi' => '36 Tràng Tiền, Hà Nội', 'hinh_anh' => 'supplier11.png'],
                ['ho_ten' => 'Lý Thị Thanh', 'email' => 'lythithanh@gmail.com', 'so_dien_thoai' => '0927000002', 'password' => bcrypt('123456'), 'dia_chi' => '5 Phan Tứ, Đà Nẵng', 'hinh_anh' => 'supplier12.png'],
                ['ho_ten' => 'Trần Văn Tiến', 'email' => 'tranvantien@gmail.com', 'so_dien_thoai' => '0927000003', 'password' => bcrypt('123456'), 'dia_chi' => '11 Nguyễn Trãi, Cần Thơ', 'hinh_anh' => 'supplier13.png'],
                ['ho_ten' => 'Nguyễn Thị Uyên', 'email' => 'nguyenthiyen@gmail.com', 'so_dien_thoai' => '0927000004', 'password' => bcrypt('123456'), 'dia_chi' => '7 Quang Trung, Đồng Nai', 'hinh_anh' => 'supplier14.png'],
                ['ho_ten' => 'Lê Văn Vinh', 'email' => 'levanvinh@gmail.com', 'so_dien_thoai' => '0927000005', 'password' => bcrypt('123456'), 'dia_chi' => '101 Nguyễn Đình Chiểu, TP.HCM', 'hinh_anh' => 'supplier15.png'],
                ['ho_ten' => 'Phạm Thị Xinh', 'email' => 'phamthixinh@gmail.com', 'so_dien_thoai' => '0938000001', 'password' => bcrypt('123456'), 'dia_chi' => '72 Lê Lợi, Q1, TP.HCM', 'hinh_anh' => 'supplier16.png'],
                ['ho_ten' => 'Đỗ Văn Yên', 'email' => 'dovanyen@gmail.com', 'so_dien_thoai' => '0938000002', 'password' => bcrypt('123456'), 'dia_chi' => '54 Liễu Giai, Hà Nội', 'hinh_anh' => 'supplier17.png'],
                ['ho_ten' => 'Nguyễn Thị Zương', 'email' => 'nguyenthizuong@gmail.com', 'so_dien_thoai' => '0938000003', 'password' => bcrypt('123456'), 'dia_chi' => '88 Nguyễn Thái Học, Hải Phòng', 'hinh_anh' => 'supplier18.png'],
                ['ho_ten' => 'Trần Văn Ân', 'email' => 'tranvanan@gmail.com', 'so_dien_thoai' => '0938000004', 'password' => bcrypt('123456'), 'dia_chi' => '105 Trường Chinh, Tân Bình, TP.HCM', 'hinh_anh' => 'supplier19.png'],
                ['ho_ten' => 'Lê Thị Ánh', 'email' => 'lethianh@gmail.com', 'so_dien_thoai' => '0938000005', 'password' => bcrypt('123456'), 'dia_chi' => '88 Nguyễn Ngọc Vũ, Hà Nội', 'hinh_anh' => 'supplier20.png'],


            ]

        );
    }
}
