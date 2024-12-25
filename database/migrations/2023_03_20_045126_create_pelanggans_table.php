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
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->increments('id_pelanggan'); //menggunakan increments id_penggunaan primary key
            $table->string('username');
            $table->string('password', 60); // kata yang bisa maksimal 60
            $table->string('nomor_kwh');
            $table->string('nama_pelanggan');
            $table->string('alamat');
            $table->string('id_tarif')->unique();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pelanggans');
    }
};
