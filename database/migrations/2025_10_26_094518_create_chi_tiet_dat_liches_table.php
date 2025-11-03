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
        Schema::create('chi_tiet_dat_lichs', function (Blueprint $table) {
            $table->id();
            $table->string('ma_hoa_don');
            $table->integer('id_khach_hang');
            $table->integer('id_dat_lich');
            $table->integer('tong_tien_thanh_toan');
            $table->integer('trang_thai_thanh_toan');
            $table->text('ghi_chu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chi_tiet_dat_lichs');
    }
};
