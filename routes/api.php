<?php

use App\Http\Controllers\ChiTietThuongHieuController;
use App\Http\Controllers\DichVuController;
use App\Http\Controllers\KhachHangController;
use App\Http\Controllers\NhaCungCapController;
use App\Http\Controllers\ThuongHieuController;
use Database\Seeders\DichVuSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {return $request->user();})->middleware('auth:sanctum');
//http://127.0.0.1:8000/
//ngrok: https://gallinulelike-kymberly-gloomless.ngrok-free.dev
//khách hàng
Route::Post('/khach-hang/dang-nhap',[KhachHangController::class, 'login']);
Route::post('/khach-hang/dang-ky',[KhachHangController::class,'create']);

//nhà cung cấp
Route::Post('/nha-cung-cap/dang-nhap',[NhaCungCapController::class, 'login']);
Route::post('/nha-cung-cap/dang-ky',[NhaCungCapController::class,'create']);

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





