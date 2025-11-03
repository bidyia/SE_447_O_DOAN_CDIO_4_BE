<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietThuongHieu extends Model
{
    use HasFactory;
    protected $table = 'chi_tiet_thuong_hieus';
    protected $fillable = [
        'id_thuong_hieu',
        'id_don_vi_tinh',
        'ten_san_pham',
        'mo_ta_ngan',
        'mo_ta_dai',
        'don_gia',
        'ghi_chu',

    ];
}
