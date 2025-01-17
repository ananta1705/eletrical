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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->increments('id_pelanggan'); //menggunakan increments id_penggunaan primary key
            $table->string('username', 50);
            $table->string('password', 50); // kata yang bisa maksimal 60
            $table->string('nomor_kwh', 50);
            $table->string('nama_pelanggan', 50);
            $table->string('alamat', 255);
            $table->string('id_tarif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembayarans');
    }
};
