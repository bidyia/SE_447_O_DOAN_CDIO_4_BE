<?php

use App\Http\Controllers\ChiTietThuongHieuController;
use App\Http\Controllers\DatLichController;
use App\Http\Controllers\DichVuController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhaCungCapController;
use App\Http\Controllers\ThuongHieuController;
use Database\Seeders\DichVuSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {return $request->user();})->middleware('auth:sanctum');
//http://127.0.0.1:8000/api/chi-tiet-thuong-hieu/get-all-data
//ngrok: https://gallinulelike-kymberly-gloomless.ngrok-free.dev
//khách hàng
Route::Post('/khach-hang/dang-nhap',[KhachHangController::class, 'login']);
Route::post('/khach-hang/dang-ky',[KhachHangController::class,'create']);
Route::get('/khach-hang/profile',[KhachHangController::class,'getProfile'])->middleware('auth:sanctum');
Route::post('/khach-hang/check-login',[KhachHangController::class,'checkLogin']);
Route::post('/khach-hang/cap-nhat',[KhachHangController::class,'upDate']);

//nhà cung cấp
Route::Post('/nha-cung-cap/dang-nhap',[NhaCungCapController::class, 'login']);
Route::post('/nha-cung-cap/dang-ky',[NhaCungCapController::class,'create']);
Route::get('nha-cung-cap/lich-sap-toi',[NhaCungCapController::class, 'getDataLich']);
Route::post('/nha-cung-cap/check-login',[NhaCungCapController::class,'checkLogin']);
Route::get('/nha-cung-cap/count-booking',[NhaCungCapController::class,'countBooking']);
Route::get('/nha-cung-cap/booking',[NhaCungCapController::class,'dataBooking']);
Route::get('/nha-cung-cap/today-booking',[NhaCungCapController::class,'dataTodayBooking']);
Route::get('/nha-cung-cap/all-booking',[NhaCungCapController::class,'allDataBooking']);
Route::get('/nha-cung-cap/my-service',[NhaCungCapController::class,'dataMyService']);
Route::post('/nha-cung-cap/my-service/change-status',[NhaCungCapController::class,'changeStatus']);




//dịch vụ
Route::get('/dich-vu/get-data',[DichVuController::class , 'getData']);

//thương hiệu
Route::get('/thuong-hieu/get-data-by-ncc',[ThuongHieuController::class,'getDataByNhaCungCap']);
Route::post('/thuong-hieu/them-thuong-hieu',[ThuongHieuController::class,'addNew']);
Route::post('/thuong-hieu/cap-nhat-thuong-hieu',[ThuongHieuController::class,'update']);
Route::post('/thuong-hieu/xoa-thuong-hieu/{id}',[ThuongHieuController::class,'del']);

//chi tiết thương hiệu
//lấy toàn bộ các dịch vụ của các thương hiệu
Route::get('/chi-tiet-thuong-hieu/get-all-data',[ChiTietThuongHieuController::class, 'getAllData']);

Route::get('/chi-tiet-thuong-hieu/get-data-by-id/{id}',[ChiTietThuongHieuController::class, 'getDataByID']);



//lấy số lượng lịch sắp tới
Route::get('/dat-lich/count-data-lich',[DatLichController::class, 'countLichSapToi']);
//đặt lịch chưa trả đồng nào
Route::post('/dat-lich/them-moi',[DatLichController::class, 'datLich']);

// lấy lịch mới đặt
Route::get('/dat-lich/lich-moi-dat',[DatLichController::class, 'getLichMoiDat']);

Route::get('/dat-lich/lich-sap-toi',[DatLichController::class, 'getLichSapToi']);
Route::get('/dat-lich/lich-da-qua',[DatLichController::class, 'getLichDaQua']);
Route::get('/dat-lich/get-lich-by-kh',[DatLichController::class, 'getByUserLogin']);
Route::post('/dat-lich/huy-lich/{id}',[DatLichController::class, 'huyLich']);
Route::post('/dat-lich/change-status',[DatLichController::class, 'changeStatus']);

//đăng xuất 
Route::get('/dang-xuat',[KhachHangController::class,'logout']);


