<?php

namespace App\Http\Controllers;

use App\Models\DatLich;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Symfony\Component\Clock\now;

class DatLichController extends Controller
{
    public function getLichSapToi()
    {
        try {
            $khachang = Auth::guard('sanctum')->user();
            $so_lich_sap_toi = 0;
            $so_lich_da_qua = 0;
            $today = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
            $time = Carbon::now('Asia/Ho_Chi_Minh')->toTimeString();
            $so_lich_sap_toi = DatLich::where('id_khach_hang', $khachang->id)
                ->where('trang_thai', 1)
                ->where(function ($query) use ($today, $time) {
                    $query->where('ngay_dat_lich', '>', $today)
                        ->orWhere(function ($q) use ($today, $time) {
                            $q->where('ngay_dat_lich', '=', $today)
                                ->where('thoi_gian', '>', $time);
                        });
                })
                ->count();
            $so_lich_da_qua = DatLich::where('id_khach_hang', $khachang->id)
                ->where('trang_thai',1)
                ->where(function ($query) use ($today, $time) {
                    $query->where('ngay_dat_lich', '<', $today)
                        ->orWhere(function ($q) use ($today, $time) {
                            $q->where('ngay_dat_lich', '=', $today)
                                ->where('thoi_gian', '<', $time);
                        });
                })
                ->count();
            $diem_tich_luy = $khachang->diem_tich_luy;
            return response()->json([
                'status' => 'success',
                'so_lich_sap_toi' => $so_lich_sap_toi,
                'so_lich_da_qua' => $so_lich_da_qua,
                'diem_tich_luy' => $diem_tich_luy,
                'data3' => $time
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'failed',
                'data' => $e->getMessage()
            ]);
        }
    }
}
