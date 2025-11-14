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
            $data = ChiTietThuongHieu::get();
            return response()->json([
                'data' => $data
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message' => "Lỗi  ". $e->getMessage() 
            ]);
        }
    }
}
