<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietDatLich extends Model
{
    use HasFactory;
    protected $table = 'chi_tiet_dat_lichs';
    protected $fillable = [
        'ma_hoa_don',
        'id_khach_hang',
        'id_dat_lich',
        'tong_tien_thanh_toan',
        'trang_thai_thanh_toan',
        'ghi_chu',
    ];
}
