<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->string('klasifikasi', 255);
            $table->string('sender', 255);
            $table->string('title', 255);
            $table->string('content', 255);
            $table->string('time', 255);
            $table->string('date', 255);
            $table->string('location', 255);
            $table->string('category', 255);
            $table->string('file', 255);
            $table->string('checkbox', 255);
            
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
        Schema::dropIfExists('laporan');
    }
}
