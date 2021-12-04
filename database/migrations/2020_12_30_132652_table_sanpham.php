<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sanpham', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id')->unsigned();
            $table->string('TenSP')->nullable();
            $table->integer('Gia')->unsigned()->nullable();
            $table->integer('GiaMoi')->unsigned()->nullable();
            $table->string('Image')->nullable();
            $table->string('Size')->nullable();
            $table->integer('SoLuong')->nullable();
            $table->string('Mota')->nullable();
            $table->Integer('TrangThai')->nullable();
            $table->timestamps();
            $table->integer('MaLoai')->unsigned()->nullable();
            $table->foreign('MaLoai')->references('id')->on('LoaiSP');
            $table->integer('DanhMuc')->unsigned()->nullable();
            $table->foreign('DanhMuc')->references('id')->on('danhmuc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
