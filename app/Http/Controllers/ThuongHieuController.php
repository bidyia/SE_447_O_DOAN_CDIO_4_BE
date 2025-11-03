<?php

namespace App\Http\Controllers;

use App\Models\ThuongHieu;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThuongHieuController extends Controller
{
    public function del($id)
    {

    }
    public function getDataByNhaCungCap()
    {
        try {
            $nha_cung_cap = Auth::guard('sanctum')->user();
            $data = ThuongHieu::where('id_nha_cung_cap',$nha_cung_cap->id)->get();
            return response()->json([
                'data' => $data,
                'status' => true
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Lỗi ' . $e->getMessage(),
                'status'  =>   false
            ]);
        }
    }
    public function addNew(Request $request)
    {
        try {
            ThuongHieu::create([
                'id_dich_vu'        => $request->id_dich_vu,
                'id_nha_cung_cap'   => $request->id_nha_cung_cap,
                'ten_thuong_hieu'   => $request->ten_thuong_hieu,
                'hinh_anh'          => $request->hinh_anh,
                'tinh_thanh'        => $request->tinh_thanh,
                'dia_chi_cu_the'    => $request->dia_chi_cu_the,
                'mo_ta_ngan'        => $request->mo_ta_ngan,
                'mo_ta_chi_tiet'    => $request->mo_ta_chi_tiet,

            ]);
            return response()->json([
                'message' => 'Tạo thương hiệu mới thành công',
                'status'  => true
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Lỗi ' . $e->getMessage(),
                'status'  =>   false
            ]);
        }
    }
    public function update(Request $request)
    {
        try {
            $data = ThuongHieu::where('id', $request->id)->first();
            if ($data) {
                $data->update([
                    'id_dich_vu'        => $request->id_dich_vu,
                    'id_nha_cung_cap'   => $request->id_nha_cung_cap,
                    'ten_thuong_hieu'   => $request->ten_thuong_hieu,
                    'hinh_anh'          => $request->hinh_anh,
                    'tinh_thanh'        => $request->tinh_thanh,
                    'dia_chi_cu_the'    => $request->dia_chi_cu_the,
                    'mo_ta_ngan'        => $request->mo_ta_ngan,
                    'mo_ta_chi_tiet'    => $request->mo_ta_chi_tiet,

                ]);
                return response()->json([
                    'message' => 'Cập nhật thương hiệu thành công',
                    'status'  => true
                ]);
            }else{
                 return response()->json([
                    'message' => 'Không có mã id này',
                    'status'  => false
                ]);
            }
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Lỗi ' . $e->getMessage(),
                'status'  =>   false
            ]);
        }
    }
}
