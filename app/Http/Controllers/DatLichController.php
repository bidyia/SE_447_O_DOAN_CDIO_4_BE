<?php

namespace App\Http\Controllers;

use App\Models\ChiTietDatLich;
use App\Models\DatLich;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Symfony\Component\Clock\now;

class DatLichController extends Controller
{
    public function datLich(Request $request)
    {
        try {
            $dat_lich_data = DatLich::create([
                'id_khach_hang'           => $request->id_khach_hang,
                'id_chi_tiet_thuong_hieu' => $request->id_chi_tiet_thuong_hieu,
                'ngay_dat_lich'           => $request->ngay_dat_lich,
                'thoi_gian'               => $request->thoi_gian,
                'trang_thai'              => 0, //chưa xác nhận từ nhà cung cấp
            ]);
            $trang_thai_thanh_toan =
                $request->tong_tien_da_tra == 0 ? 0 : ($request->tong_tien_da_tra == $request->tong_tien_thanh_toan ? 1 : 2);
                //0: chưa trả đồng nào
                //1: đã trả đủ
                //2: trả một phần
            ChiTietDatLich::create([
                'ma_hoa_don' => 'HDSE4470CDIO400' . $dat_lich_data->id,
                'id_dat_lich' => $dat_lich_data->id,
                'tong_tien_da_tra' => $request->tong_tien_da_tra,
                'tong_tien_thanh_toan' => $request->tong_tien_thanh_toan,
                'trang_thai_thanh_toan' => $trang_thai_thanh_toan,
                'ghi_chu' => $request->ghi_chu,
            ]);
            return response()->json([
                'status' => true,
                'message' => 'Đặt lịch thành công'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'status' => false,
                'message' => "đã có lỗi sảy ra " . $e->getMessage()
            ]);
        }
    }
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
                ->where('trang_thai', 1)
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
