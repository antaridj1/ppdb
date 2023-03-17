<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRincianPesertaDidikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rincian_peserta_didik', function (Blueprint $table) {
            $table->id();
            $table->integer('data_periodik_id');
            $table->string('prestasi_id');
            $table->string('beasiswa_id');
            $table->integer('kesejahteraan');
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
        Schema::dropIfExists('rincian_peserta_didik');
    }
}