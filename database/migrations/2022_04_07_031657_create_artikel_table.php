<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel', function (Blueprint $table) {
            $table->increments('id');
            $table->string('kode_artikel');
            $table->string('judul');
            $table->string('gambar_artikel');
            $table->text('isi_artikel');
            $table->text('keyword');
            $table->string('slug');
            $table->text('tagar');
            $table->integer('total_views')->default(0);
            $table->integer('hitung_tayang');
            $table->integer('status_publish');
            $table->string('penulis_artikel');
            $table->integer('id_domain');
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
        Schema::dropIfExists('artikel');
    }
}
