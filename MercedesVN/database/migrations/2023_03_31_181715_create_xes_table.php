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
        Schema::create('xes', function (Blueprint $table) {
            $table->id('MaXe');
            // $table->int('MaXe');
            $table->string('TenXe');
            $table->int('NamSanXuat');
            $table->float('GiaBan');
            $table->string('HinhAnh');
            $table->string('MoTa');
            $table->int('MaLoaiXe');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('xes');
    }
};
