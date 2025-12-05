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
        Schema::create('dat_lichs', function (Blueprint $table) {
            $table->id();
            $table->integer('id_nha_cung_cap');
            $table->integer('id_khach_hang');
            $table->string('ten_khach_hang');
            $table->string('so_dien_thoai');
            $table->integer('id_chi_tiet_thuong_hieu');
            $table->date('ngay_dat_lich');
            $table->time('thoi_gian');
            $table->integer('trang_thai')->default(0); 
            $table->text('ghi_chu')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dat_lichs');
    }
};
