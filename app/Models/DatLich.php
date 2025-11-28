<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatLich extends Model
{
    use HasFactory;
    protected $table = 'dat_lichs';
    protected $fillable = [
        'id_khach_hang',
        'id_chi_tiet_thuong_hieu',
        'ngay_dat_lich',
        'thoi_gian',
        'trang_thai',
        'ghi_chu',
    ];
}
