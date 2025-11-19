<?php

namespace App\Http\Controllers;

use App\Models\ChiTietThuongHieu;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ChiTietThuongHieuController extends Controller
{
    public function getAllData()
    {
        try {
            $data = ChiTietThuongHieu::join('thuong_hieus', 'chi_tiet_thuong_hieus.id_thuong_hieu', 'thuong_hieus.id')
                ->join('don_vi_tinhs', 'chi_tiet_thuong_hieus.id_don_vi_tinh', 'don_vi_tinhs.id')
                ->join('dich_vus', 'thuong_hieus.id_dich_vu', 'dich_vus.id')
                ->select(
                    'dich_vus.ten_dich_vu',
                    'thuong_hieus.id_dich_vu',
                    'thuong_hieus.ten_thuong_hieu',
                    'thuong_hieus.hinh_anh',
                    'don_vi_tinhs.ten_chi_tiet as don_vi_tinh',
                    'chi_tiet_thuong_hieus.ten_san_pham',
                    'chi_tiet_thuong_hieus.mo_ta_ngan',
                    'chi_tiet_thuong_hieus.mo_ta_dai',
                    'chi_tiet_thuong_hieus.don_gia',
                )->get();
            return response()->json([
                'data' => $data
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => "Lỗi  " . $e->getMessage()
            ]);
        }
    }
}
