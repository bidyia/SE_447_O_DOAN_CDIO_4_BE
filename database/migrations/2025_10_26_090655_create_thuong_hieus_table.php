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
        Schema::create('thuong_hieus', function (Blueprint $table) {
            $table->id();
            $table->integer('id_dich_vu');
            $table->integer('id_nha_cung_cap');
            $table->string('ten_thuong_hieu');
            $table->string('hinh_anh');
            $table->string('tinh_thanh');
            $table->string('dia_chi_cu_the');
            $table->text('mo_ta_ngan');
            $table->text('mo_ta_chi_tiet');
            $table->integer('is_active')->default(1);
            $table->integer('is_block')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thuong_hieus');
    }
};
