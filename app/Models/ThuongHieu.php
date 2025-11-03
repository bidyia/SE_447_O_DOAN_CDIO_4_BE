<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThuongHieu extends Model
{
    use HasFactory;
    protected $table = 'thuong_hieus';
    protected $fillable = [
            'id_dich_vu',
            'id_nha_cung_cap',
            'ten_thuong_hieu',
            'hinh_anh',
            'tinh_thanh',
            'dia_chi_cu_the',
            'mo_ta_ngan',
            'mo_ta_chi_tiet',
            'is_active',
            'is_block',
    ];
}
