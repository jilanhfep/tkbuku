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
        $table->increments('id');
        $table->string('judul');
        $table->string('no_isbn');
        $table->string('penulis');
        $table->string('penerbit');
        $table->string('tahun');
        $table->string('stok');
        $table->string('harga_pokok');
        $table->string('harga_jual');
        $table->string('ppn');
        $table->string('diskon');
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
        Schema::drop('buku');
    }
}
