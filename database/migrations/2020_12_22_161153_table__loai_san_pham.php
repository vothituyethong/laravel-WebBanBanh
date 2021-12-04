<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableLoaiSanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('LoaiSP', function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('tenloai');
            $table->integer('nhacungcap')->unsigned()->nullable();
            $table->foreign('nhacungcap')->references('id')->on('nhacungcap');
            $table->string('trangthai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('LoaiSanPham');
    }
}
