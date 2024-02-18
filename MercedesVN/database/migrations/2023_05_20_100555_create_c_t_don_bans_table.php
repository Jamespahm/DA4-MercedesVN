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
        Schema::create('c_t_don_bans', function (Blueprint $table) {
            // $table->id();
            $table->integer('MaDonBan');
            $table->integer('MaXe');
            $table->int('SoLuong');
            $table->double('GiaBan');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_t_don_bans');
    }
};
