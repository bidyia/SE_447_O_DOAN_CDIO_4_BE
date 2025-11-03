<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HinhAnhThuongHieu extends Model
{
    use HasFactory;
     protected $table = 'hinh_anh_thuong_hieus';
    protected $fillable = [
            'id_thuong_hieu',
            'hinh_anh',
    ];
}
