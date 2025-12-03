<?php

namespace App\Http\Controllers;

use App\Models\KhachHang;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KhachHangController extends Controller
{
    public function checkLogin(){
        $khachhang = $this->isKhachHang();
        if($khachhang){
            return response()->json([
                'status' =>true
            ]);
        } else{
            return response()->json([
                'status' =>false,
                'message' => 'Bạn phải đăng nhập nhé!'
            ]);
        }
    }
    public function getProfile(){
        $khachhang = Auth::guard('sanctum')->user();
        if($khachhang){
            return response()->json([
                'data' => $khachhang,
                'status' =>true
            ]);
        } else{
            return response()->json([
                'status' =>false
            ]);
        }
    }
    public function create(Request $request)
    {
        try {
            $data = KhachHang::create([
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
                'message' => $e->getMessage(),
                'status' => false,
            ]);
        }
    }
    public function login(Request $request)
    {
        try {
            $check = Auth::guard('khach_hang')->attempt(['email' => $request->email, 'password' => $request->password]);
            if ($check) {
                $user   =   Auth::guard('khach_hang')->user();
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
                        'message'   =>   'Đã đăng nhập thành công!',
                        'status'    =>   1,
                        'key'       =>   $user->createToken('ma_so_bi_mat_khach_hang')->plainTextToken,
                        'ten'       =>   $user->ho_ten,
                        'so_dien_thoai' =>   $user->so_dien_thoai,
                        'id'    =>   $user->id,
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
                'message' => $e->getMessage(),
                'status' => false,
            ]);
        }
    }
}
