<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePesertaDidikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peserta_didik', function (Blueprint $table) {
            $table->id();
            $table->foreign('data_pribadi_id')->references('id')->on('data_pribadi');
            $table->foreign('data_ayah_id')->references('id')->on('data_ayah');
            $table->foreign('data_ibu_id')->references('id')->on('data_ibu');
            $table->foreign('data_wali')->references('id')->on('data_wali');
            $table->foreign('kontak_id')->references('id')->on('kontak');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peserta_didik');
    }
}
