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
            $table->integer('id_khach_hang');
            $table->integer('id_chi_tiet_thuong_hieu');
            $table->integer('so_luong');
            $table->text('ghi_chu');
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
