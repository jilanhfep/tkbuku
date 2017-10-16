<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->increments('id_buku');
            $table->string('judul');
            $table->string('noisbn');
            $table->string('penulis');
            $table->string('penerbit');
            $table->string('tahun');
            $table->string('stok');
            $table->string('harga_pokok');
            $table->string('harga_jual');
            $table->string('ppn');
            $table->integer('diskon');
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
        Schema::dropIfExists('buku');
    }
}
