<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengunjungArtikelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengunjung_artikels', function (Blueprint $table) {
            $table->id();
            $table->string('ip');
            $table->string('slug');
            $table->string('countryName');
            $table->string('regionName');
            $table->string('cityName');
            $table->date('created_at');
            $table->date('update_at');
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
        Schema::dropIfExists('pengunjung_artikels');
    }
}
