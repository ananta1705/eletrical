<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tagihans', function (Blueprint $table) {
            $table->increments('id_tagihan'); //menggunakan increments id_penggunaan primary key
            $table->integer('id_penggunaan');
            $table->integer('id_pelanggan'); // kata yang bisa maksimal 60
            $table->string('bulan', 20);
            $table->year('tahun');
            $table->string('jumlah_meter');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tagihans');
    }
};
