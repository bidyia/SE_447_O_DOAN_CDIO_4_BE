<?php

namespace App\Http\Controllers;

use App\Models\DichVu;
use Exception;
use Illuminate\Http\Request;

class DichVuController extends Controller
{
   public function getData()
   {
      try {
         $data = DichVu::get();
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
}
