<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DonViTinh extends Model
{
    use HasFactory;
    protected $table = 'don_vi_tinhs';
    protected $fillable = [
        'id_dich_vu',
        'ten_chi_tiet',
    ];
}
