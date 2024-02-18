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
        Schema::create('don_bans', function (Blueprint $table) {
            $table->id('MaDonban');
            $table->integer('MaKhachHang');
            $table->dateTime('NgayBan');
            $table->string('TrangThai');
            $table->double('TongTien');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('don_bans');
    }
};
