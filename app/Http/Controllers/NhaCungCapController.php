<?php

namespace App\Http\Controllers;

use App\Models\ChiTietDatLich;
use App\Models\ChiTietThuongHieu;
use App\Models\DatLich;
use App\Models\NhaCungCap;
use App\Models\ThuongHieu;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class NhaCungCapController extends Controller
{
    public function changeStatus(Request $request)
    {
        $data = ChiTietThuongHieu::where('id', $request->id)->first();
        if ($data) {
            $data->trang_thai = $request->trang_thai;
            $data->save();
            return response()->json([
                'status' => true,
                'message' => 'Đổi trạng thái thành công'
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'đã có lỗi sảy ra'
            ]);
        }
    }
    public function dataMyService()
    {
        $NhaCungCap = $this->isNhaCungCap();
        if ($NhaCungCap) {
            $id_thuong_hieu = ThuongHieu::where('id_nha_cung_cap', $NhaCungCap->id)->first();
            $count_booking = DatLich::where('id_nha_cung_cap', $NhaCungCap->id)->count();
            $data = ChiTietThuongHieu::where('id_thuong_hieu', $id_thuong_hieu->id)
                ->join('thuong_hieus', 'chi_tiet_thuong_hieus.id_thuong_hieu', 'thuong_hieus.id')
                ->join('dich_vus', 'thuong_hieus.id_dich_vu', 'dich_vus.id')
                ->select(
                    'chi_tiet_thuong_hieus.id',
                    'chi_tiet_thuong_hieus.ten_san_pham',
                    'chi_tiet_thuong_hieus.don_gia',
                    'chi_tiet_thuong_hieus.trang_thai',
                    'thuong_hieus.hinh_anh',
                    'chi_tiet_thuong_hieus.mo_ta_ngan',
                    'dich_vus.ten_dich_vu'
                )
                ->get();
            return response()->json([
                'status' => true,
                'data' => $data,
                'count_booking' => $count_booking,
                'nha_cung_cap' => $NhaCungCap->ho_ten,

            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'đã có lỗi sảy ra'
            ]);
        }
    }
    public function dataTodayBooking()
    {
        $NCC = $this->isNhaCungCap();
        $today = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $time = Carbon::now('Asia/Ho_Chi_Minh')->toTimeString();
        if (!$NCC) {
            return response()->json([
                'status' => false,
                'message' => 'đã có lỗi sảy ra'
            ]);
        } else {
            $data = DatLich::join('chi_tiet_dat_lichs', 'dat_lichs.id', 'chi_tiet_dat_lichs.id_dat_lich')
                ->where('dat_lichs.id_nha_cung_cap', $NCC->id)
                ->where(function ($query) use ($today, $time) {
                    $query->where('ngay_dat_lich', '>', $today)
                        ->orWhere(function ($q) use ($today, $time) {
                            $q->where('ngay_dat_lich', '=', $today)
                                ->where('thoi_gian', '>', $time);
                        });
                })
                ->whereNotIn('dat_lichs.trang_thai', [2, 3])
                ->join('chi_tiet_thuong_hieus', 'dat_lichs.id_chi_tiet_thuong_hieu', 'chi_tiet_thuong_hieus.id')
                ->join('thuong_hieus', 'chi_tiet_thuong_hieus.id_thuong_hieu', 'thuong_hieus.id')
                ->join('dich_vus', 'thuong_hieus.id_dich_vu', 'dich_vus.id')
                ->select(
                    'dat_lichs.id',
                    'dat_lichs.ten_khach_hang',
                    'chi_tiet_thuong_hieus.ten_san_pham',
                    'dich_vus.ten_dich_vu',
                    'chi_tiet_dat_lichs.ma_hoa_don',
                    'dat_lichs.trang_thai',
                    'dat_lichs.thoi_gian',
                    'dat_lichs.ngay_dat_lich',

                )
                ->orderBy('dat_lichs.thoi_gian', 'ASC')
                ->get();
            if ($data) {
                return response()->json([
                    'status' => true,
                    'data' => $data
                ]);
            }
        }
    }
    public function allDataBooking()
    {
        $NCC = $this->isNhaCungCap();
        $today = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $time = Carbon::now('Asia/Ho_Chi_Minh')->toTimeString();
        if (!$NCC) {
            return response()->json([
                'status' => false,
                'message' => 'đã có lỗi sảy ra'
            ]);
        } else {

            $data = DatLich::join('chi_tiet_dat_lichs', 'dat_lichs.id', 'chi_tiet_dat_lichs.id_dat_lich')
                ->join('chi_tiet_thuong_hieus', 'dat_lichs.id_chi_tiet_thuong_hieu', 'chi_tiet_thuong_hieus.id')
                ->join('thuong_hieus', 'chi_tiet_thuong_hieus.id_thuong_hieu', 'thuong_hieus.id')
                ->join('dich_vus', 'thuong_hieus.id_dich_vu', 'dich_vus.id')
                ->where('dat_lichs.id_nha_cung_cap', $NCC->id)
                ->where(function ($query) use ($today, $time) {
                    $query->where('dat_lichs.ngay_dat_lich', '>=', $today)
                        ->orWhere(function ($q) use ($today, $time) {
                            $q->where('dat_lichs.ngay_dat_lich', $today)
                                ->where('thoi_gian', '>', $time);
                        });
                })
                ->select(
                    'dat_lichs.id',
                    'dat_lichs.ten_khach_hang',
                    'dat_lichs.so_dien_thoai',
                    'chi_tiet_thuong_hieus.ten_san_pham',
                    'dich_vus.ten_dich_vu',
                    'chi_tiet_dat_lichs.ma_hoa_don',
                    'dat_lichs.trang_thai',
                    'dat_lichs.thoi_gian',
                    'dat_lichs.ngay_dat_lich',
                    'chi_tiet_dat_lichs.tong_tien_thanh_toan',
                    'chi_tiet_dat_lichs.tong_tien_da_tra',
                    'chi_tiet_dat_lichs.ghi_chu',

                )
                ->orderBy('dat_lichs.ngay_dat_lich', 'ASC')
                ->orderBy('dat_lichs.thoi_gian', 'ASC')
                ->get();
            return response()->json([
                'status' => true,
                'data' => $data
            ]);
        }
    }
    public function dataBooking()
    {
        $NCC = $this->isNhaCungCap();
        $today = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $time = Carbon::now('Asia/Ho_Chi_Minh')->toTimeString();
        if (!$NCC) {
            return response()->json([
                'status' => false,
                'message' => 'đã có lỗi sảy ra'
            ]);
        } else {

            $data = DatLich::join('chi_tiet_dat_lichs', 'dat_lichs.id', 'chi_tiet_dat_lichs.id_dat_lich')
                ->join('chi_tiet_thuong_hieus', 'dat_lichs.id_chi_tiet_thuong_hieu', 'chi_tiet_thuong_hieus.id')
                ->join('thuong_hieus', 'chi_tiet_thuong_hieus.id_thuong_hieu', 'thuong_hieus.id')
                ->join('dich_vus', 'thuong_hieus.id_dich_vu', 'dich_vus.id')
                ->where('dat_lichs.id_nha_cung_cap', $NCC->id)
                ->where(function ($query) use ($today, $time) {
                    $query->where('ngay_dat_lich', '>', $today)
                        ->orWhere(function ($q) use ($today, $time) {
                            $q->where('ngay_dat_lich', '=', $today)
                                ->where('thoi_gian', '>', $time);
                        });
                })
                ->whereNotIn('dat_lichs.trang_thai', [2, 3])
                ->select(
                    'dat_lichs.id',
                    'dat_lichs.ten_khach_hang',
                    'dat_lichs.so_dien_thoai',
                    'chi_tiet_thuong_hieus.ten_san_pham',
                    'dich_vus.ten_dich_vu',
                    'chi_tiet_dat_lichs.ma_hoa_don',
                    'dat_lichs.trang_thai',
                    'dat_lichs.thoi_gian',
                    'dat_lichs.ngay_dat_lich',
                    'chi_tiet_dat_lichs.tong_tien_thanh_toan',
                    'chi_tiet_dat_lichs.tong_tien_da_tra',
                    'chi_tiet_dat_lichs.ghi_chu',

                )
                ->orderBy('dat_lichs.ngay_dat_lich', 'ASC')
                ->orderBy('dat_lichs.thoi_gian', 'ASC')
                ->get();
            return response()->json([
                'status' => true,
                'data' => $data
            ]);
        }
    }
    public function countBooking()
    {
        try {
            $NCC = $this->isNhaCungCap();
            if (!$NCC) {
                return response()->json([
                    'status' => false,
                    'message' => 'đã có lỗi sảy ra'
                ]);
            } else {
                $so_lich_sap_toi = 0;
                $lich_bi_huy = 0;
                $doanh_thu = 0;
                $today = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
                $time = Carbon::now('Asia/Ho_Chi_Minh')->toTimeString();
                $so_lich_sap_toi = DatLich::where('id_nha_cung_cap', $NCC->id)
                    ->whereNotIn('dat_lichs.trang_thai', [2, 3])
                    ->where(function ($query) use ($today, $time) {
                        $query->where('ngay_dat_lich', '>', $today)
                            ->orWhere(function ($q) use ($today, $time) {
                                $q->where('ngay_dat_lich', '=', $today)
                                    ->where('thoi_gian', '>', $time);
                            });
                    })
                    ->count();
                $lich_bi_huy = DatLich::where('id_nha_cung_cap', $NCC->id)
                    ->where('trang_thai', 2)
                    ->count();

                $dat_lich_by_ncc = DatLich::where('dat_lichs.id_nha_cung_cap', $NCC->id)
                    ->where('dat_lichs.trang_thai', '<>', 2)
                    ->pluck('dat_lichs.id');
                $doanh_thu = ChiTietDatLich::whereIn('id_dat_lich', $dat_lich_by_ncc)
                    ->sum('tong_tien_thanh_toan');
                return response()->json([
                    'status' => true,
                    'so_lich_sap_toi' => $so_lich_sap_toi,
                    'lich_bi_huy' => $lich_bi_huy,
                    'doanh_thu' => $doanh_thu,
                ]);
            }
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'data' => $e->getMessage()
            ]);
        }
    }
    public function checkLogin()
    {
        $NhaCungCap = $this->isNhaCungCap();
        if ($NhaCungCap) {
            return response()->json([
                'status' => true,
                'data'   => $NhaCungCap
            ]);
        } else {
            return response()->json([
                'status' => false,
                'message' => 'Bạn phải đăng nhập nhé!'
            ]);
        }
    }
    public function getDataLich() {}
    public function create(Request $request)
    {
        try {
            $data = NhaCungCap::create([
                'ho_ten'        => $request->ho_ten,
                'email'         => $request->email,
                'so_dien_thoai' => $request->so_dien_thoai,
                'password'      => bcrypt($request->password),
            ]);
            return response()->json([
                'message' => 'Tạo tài khoản thành công',
                'status' => true,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Lỗi ' . $e->getMessage(),
                'status' => false,
            ]);
        }
    }
    public function login(Request $request)
    {
        try {
            $check = Auth::guard('nha_cung_cap')->attempt(['email' => $request->email, 'password' => $request->password]);
            if ($check) {
                $user   =   Auth::guard('nha_cung_cap')->user();
                if ($user->is_active == 0) {
                    return response()->json([
                        'message'  =>   'Tài khoản của bạn chưa được kích hoạt!',
                        'status'   =>   2
                    ]);
                } else {
                    if ($user->is_block) {
                        return response()->json([
                            'message'  =>   'Tài khoản của bạn đã bị khóa!',
                            'status'   =>   0
                        ]);
                    }

                    return response()->json([
                        'message'             =>   'Đã đăng nhập thành công!',
                        'status'              =>   1,
                        'key'                 =>   $user->createToken('ma_so_bi_mat_nha_cung_cap')->plainTextToken,
                        'ten'                 =>   $user->ho_ten,
                        'so_dien_thoai'       =>   $user->so_dien_thoai,
                        'id'                  =>   $user->id,

                    ]);
                }
            } else {
                return response()->json([
                    'message'  =>   'Tài khoản hoặc mật khẩu không đúng!',
                    'status'   =>   0
                ]);
            }
        } catch (Exception $e) {
            return response()->json([
                'message' => 'Lỗi ' . $e->getMessage(),
                'status' => false,
            ]);
        }
    }
}
