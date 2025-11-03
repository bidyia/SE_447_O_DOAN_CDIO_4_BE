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
        'so_luong',
        'ghi_chu',
    ];
}
