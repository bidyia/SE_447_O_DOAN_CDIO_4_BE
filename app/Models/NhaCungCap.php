<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class NhaCungCap extends Authenticatable
{
    use HasFactory, HasApiTokens, Notifiable;
    protected $table = 'nha_cung_caps';
    protected $fillable = [
        'ho_ten',
        'email',
        'so_dien_thoai',
        'password',
        'dia_chi',
        'hinh_anh',
        'is_active',
        'is_block',
    ];
}
