<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penggunaans', function (Blueprint $table) {
            $table->increments('id_penggunaan'); //menggunakan increments id_penggunaan primary key
            $table->integer('id_pelanggan')->Unique();
            $table->string('bulan', 20); // kata yang bisa maksimal 20
            $table->year('tahun');
            $table->integer('meter_awal');
            $table->integer('meter_akhir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penggunaans');
    }
};
