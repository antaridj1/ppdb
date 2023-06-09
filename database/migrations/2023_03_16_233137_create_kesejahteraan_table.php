<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKesejahteraanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesejahteraan', function (Blueprint $table) {
            $table->id();
            $table->integer('data_pribadi_id');
            $table->set('jenis_kesejahteraan', ['PKH', 'PIP', 'Kartu Perlindungan Sosial', 'Kartu Kesehatan']);
            $table->string('no_kartu');
            $table->string('nama_sejahtera');
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('kesejahteraan');
    }
}
