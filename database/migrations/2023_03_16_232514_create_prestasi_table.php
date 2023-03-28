<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasi', function (Blueprint $table) {
            $table->id();
            $table->integer('data_pribadi_id');
            $table->string('nama_prestasi');
            $table->integer('tahun');
            $table->string('penyelenggara');
            $table->set('jenis_prestasi', ['sains', 'seni', 'olah raga', 'lain-lain']);
            $table->set('tingkat', ['kecamatan', 'kabupaten', 'provinsi', 'nasional','internasional']);
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
        Schema::dropIfExists('prestasi');
    }
}
