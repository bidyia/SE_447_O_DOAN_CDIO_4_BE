<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chi_tiet_thuong_hieus', function (Blueprint $table) {
            $table->id();
            $table->integer('id_thuong_hieu');
            $table->integer('id_don_vi_tinh');
            $table->string('ten_san_pham');
            $table->text('mo_ta_ngan');
            $table->text('mo_ta_dai');
            $table->string('don_gia');
            $table->integer('trang_thai');//0 bị block 1: accecpt hiển thị
            $table->string('ghi_chu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_thuong_hieus');
    }
};
