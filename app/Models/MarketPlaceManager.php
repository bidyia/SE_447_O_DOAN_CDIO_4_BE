<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketPlaceManager extends Model
{
    use HasFactory;
    protected $table = 'market_place_managers';
    protected $fillable = [
        'email',
        'so_dien_thoai',
        'password',
    ];
}
