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
                ['id_dich_vu' => '1', 'id_nha_cung_cap' => '1', 'ten_thuong_hieu' => 'InterContinental Danang Sun Peninsula Resort', 'hinh_anh' => 'hotel1.png', 'tinh_thanh' => 'Đà Nẵng', 'dia_chi_cu_the' => 'Bãi Bắc bán đảo Sơn Trà', 'mo_ta_ngan' => 'Resort 5-sao ven biển', 'mo_ta_chi_tiet' => 'Nằm trên bán đảo Sơn Trà, phòng nghỉ sang trọng, view biển, sân golf riêng.'],
                ['id_dich_vu' => '1', 'id_nha_cung_cap' => '2', 'ten_thuong_hieu' => 'Vinpearl Resort & Spa Nha Trang', 'hinh_anh' => 'hotel2.png', 'tinh_thanh' => 'Khánh Hòa', 'dia_chi_cu_the' => 'Vinpearl Land, Vĩnh Nguyên', 'mo_ta_ngan' => 'Resort cao cấp trên đảo', 'mo_ta_chi_tiet' => 'Khu nghỉ dưỡng trọn gói, công viên nước, spa, bãi biển riêng.'],
                ['id_dich_vu' => '1', 'id_nha_cung_cap' => '3', 'ten_thuong_hieu' => 'Furama Resort Danang', 'hinh_anh' => 'hotel3.png', 'tinh_thanh' => 'Đà Nẵng', 'dia_chi_cu_the' => 'Lô A1-B2 Võ Nguyên Giáp', 'mo_ta_ngan' => 'Resort bãi biển sang trọng', 'mo_ta_chi_tiet' => '198 phòng & 68 villa, nhiều hoạt động thể thao biển và spa.'],
                ['id_dich_vu' => '1', 'id_nha_cung_cap' => '4', 'ten_thuong_hieu' => 'The Reverie Saigon', 'hinh_anh' => 'hotel4.png', 'tinh_thanh' => 'TP.HCM', 'dia_chi_cu_the' => '22-36 Nguyễn Huệ, Q1', 'mo_ta_ngan' => 'Khách sạn sang trọng trung tâm', 'mo_ta_chi_tiet' => 'Tọa lạc tại trung tâm, thiết kế Ý, dịch vụ chuẩn quốc tế.'],
                ['id_dich_vu' => '1', 'id_nha_cung_cap' => '5', 'ten_thuong_hieu' => 'La Siesta Premium Hoi An', 'hinh_anh' => 'hotel5.png', 'tinh_thanh' => 'Quảng Nam', 'dia_chi_cu_the' => '5 Cửa Đại, Hội An', 'mo_ta_ngan' => 'Boutique resort nghỉ dưỡng', 'mo_ta_chi_tiet' => 'Thiết kế tinh tế, gần phố cổ Hội An, yên tĩnh và tiện nghi.'],

                ['id_dich_vu' => '2', 'id_nha_cung_cap' => '6', 'ten_thuong_hieu' => 'Pizza 4Ps', 'hinh_anh' => 'food1.png', 'tinh_thanh' => 'Hà Nội', 'dia_chi_cu_the' => '24 Lý Thường Kiệt', 'mo_ta_ngan' => 'Nhà hàng pizza nổi tiếng', 'mo_ta_chi_tiet' => 'Pizza kiểu Ý tự làm phô mai, không gian trẻ trung.'],
                ['id_dich_vu' => '2', 'id_nha_cung_cap' => '7', 'ten_thuong_hieu' => 'The Deck Saigon', 'hinh_anh' => 'food2.png', 'tinh_thanh' => 'TP.HCM', 'dia_chi_cu_the' => '38 Nguyễn Ư Dĩ, Thảo Điền', 'mo_ta_ngan' => 'Ẩm thực Âu-Á sang trọng', 'mo_ta_chi_tiet' => 'Nhà hàng bên sông, món Âu & Á, phong cách hiện đại.'],
                ['id_dich_vu' => '2', 'id_nha_cung_cap' => '8', 'ten_thuong_hieu' => 'Nhà Hàng Pasteur Saigon', 'hinh_anh' => 'food3.png', 'tinh_thanh' => 'TP.HCM', 'dia_chi_cu_the' => '12 Pasteur, Q1', 'mo_ta_ngan' => 'Ẩm thực Việt truyền thống', 'mo_ta_chi_tiet' => 'Chuyên món Việt Nam, hải sản tươi, không gian cổ điển.'],
                ['id_dich_vu' => '2', 'id_nha_cung_cap' => '9', 'ten_thuong_hieu' => 'Nom Vietnamese Restaurant', 'hinh_anh' => 'food4.png', 'tinh_thanh' => 'Đà Nẵng', 'dia_chi_cu_the' => '10B Nguyễn Thái Học', 'mo_ta_ngan' => 'Ẩm thực Việt hiện đại', 'mo_ta_chi_tiet' => 'Thưởng thức món Việt sáng tạo, không gian tối giản.'],
                ['id_dich_vu' => '2', 'id_nha_cung_cap' => '10', 'ten_thuong_hieu' => 'Sea Fire Salt Grill & Bar', 'hinh_anh' => 'food5.png', 'tinh_thanh' => 'Nha Trang', 'dia_chi_cu_the' => '18 Trần Phú', 'mo_ta_ngan' => 'Nhà hàng hải sản & steak', 'mo_ta_chi_tiet' => 'Hải sản, steak cao cấp, view biển.'],

                ['id_dich_vu' => '3', 'id_nha_cung_cap' => '11', 'ten_thuong_hieu' => 'Sen Spa', 'hinh_anh' => 'spa1.png', 'tinh_thanh' => 'Hà Nội', 'dia_chi_cu_the' => '36 Tràng Tiền', 'mo_ta_ngan' => 'Spa & massage thư giãn', 'mo_ta_chi_tiet' => 'Liệu trình thư giãn, massage truyền thống, không gian thiền.'],
                ['id_dich_vu' => '3', 'id_nha_cung_cap' => '12', 'ten_thuong_hieu' => 'Herbal Spa & Medi-Spa', 'hinh_anh' => 'spa2.png', 'tinh_thanh' => 'Đà Nẵng', 'dia_chi_cu_the' => '5 Phan Tứ', 'mo_ta_ngan' => 'Spa chăm sóc cơ thể', 'mo_ta_chi_tiet' => 'Sản phẩm organic, liệu pháp thảo mộc, phục hồi da.'],
                ['id_dich_vu' => '3', 'id_nha_cung_cap' => '13', 'ten_thuong_hieu' => 'Royal Nails & Spa', 'hinh_anh' => 'spa3.png', 'tinh_thanh' => 'Cần Thơ', 'dia_chi_cu_the' => '11 Nguyễn Trãi', 'mo_ta_ngan' => 'Salon nails & spa', 'mo_ta_chi_tiet' => 'Làm móng cao cấp, chăm sóc da và thư giãn.'],
                ['id_dich_vu' => '3', 'id_nha_cung_cap' => '14', 'ten_thuong_hieu' => 'Beauty Smile Clinic', 'hinh_anh' => 'spa4.png', 'tinh_thanh' => 'Đồng Nai', 'dia_chi_cu_the' => '7 Quang Trung', 'mo_ta_ngan' => 'Phòng khám & thẩm mỹ viện', 'mo_ta_chi_tiet' => 'Tẩy trắng răng, chỉnh nha, chăm sóc sắc đẹp.'],
                ['id_dich_vu' => '3', 'id_nha_cung_cap' => '15', 'ten_thuong_hieu' => 'Amy Spa & Massage', 'hinh_anh' => 'spa5.png', 'tinh_thanh' => 'Hồ Chí Minh', 'dia_chi_cu_the' => '101 Nguyễn Đình Chiểu', 'mo_ta_ngan' => 'Spa thư giãn giá hợp lý', 'mo_ta_chi_tiet' => 'Massage dầu, chăm sóc mặt, gội đầu dưỡng sinh.'],

                ['id_dich_vu' => '4', 'id_nha_cung_cap' => '16', 'ten_thuong_hieu' => 'CGV Cinema', 'hinh_anh' => 'ent1.png', 'tinh_thanh' => 'TP.HCM', 'dia_chi_cu_the' => '72 Lê Lợi, Q1', 'mo_ta_ngan' => 'Rạp chiếu phim hiện đại', 'mo_ta_chi_tiet' => 'Chiếu 2D, 3D, IMAX, phòng VIP.'],
                ['id_dich_vu' => '4', 'id_nha_cung_cap' => '17', 'ten_thuong_hieu' => 'Lotte Cinema', 'hinh_anh' => 'ent2.png', 'tinh_thanh' => 'Hà Nội', 'dia_chi_cu_the' => '54 Liễu Giai, Ba Đình', 'mo_ta_ngan' => 'Rạp phim quốc tế', 'mo_ta_chi_tiet' => 'Phòng chiếu hiện đại, suất chiếu đa dạng.'],
                ['id_dich_vu' => '4', 'id_nha_cung_cap' => '18', 'ten_thuong_hieu' => 'Fun World Vietnam', 'hinh_anh' => 'ent3.png', 'tinh_thanh' => 'Hải Phòng', 'dia_chi_cu_the' => 'Khu du lịch Đồ Sơn', 'mo_ta_ngan' => 'Công viên giải trí ngoài trời', 'mo_ta_chi_tiet' => 'Nhiều trò chơi cảm giác mạnh, thích hợp gia đình và nhóm bạn.'],
                ['id_dich_vu' => '4', 'id_nha_cung_cap' => '19', 'ten_thuong_hieu' => 'Jump Arena Vietnam', 'hinh_anh' => 'ent4.png', 'tinh_thanh' => 'TP.HCM', 'dia_chi_cu_the' => '105 Trường Chinh, Tân Bình', 'mo_ta_ngan' => 'Khu nhảy trampoline', 'mo_ta_chi_tiet' => 'Khu thể thao giải trí, phù hợp trẻ em và người lớn.'],
                ['id_dich_vu' => '4', 'id_nha_cung_cap' => '20', 'ten_thuong_hieu' => 'Escape Room VN', 'hinh_anh' => 'ent5.png', 'tinh_thanh' => 'Hà Nội', 'dia_chi_cu_the' => '88 Nguyễn Ngọc Vũ', 'mo_ta_ngan' => 'Trò chơi giải đố', 'mo_ta_chi_tiet' => 'Phòng escape game nhiều chủ đề, phù hợp nhóm bạn và team building.'],
            ]
        );
    }
}
