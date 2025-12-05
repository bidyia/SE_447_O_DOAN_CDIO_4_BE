<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatLich extends Model
{
    use HasFactory;
    protected $table = 'dat_lichs';
    protected $fillable = [
        'id_nha_cung_cap',
        'id_khach_hang',
        'ten_khach_hang',
        'so_dien_thoai',
        'id_chi_tiet_thuong_hieu',
        'ngay_dat_lich',
        'thoi_gian',
        'trang_thai',
        'ghi_chu',
    ];
}
