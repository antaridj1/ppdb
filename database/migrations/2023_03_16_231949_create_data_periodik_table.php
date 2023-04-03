<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPeriodikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_periodik', function (Blueprint $table) {
            $table->id();
            $table->integer('data_pribadi_id');
            $table->integer('tinggi_badan');
            $table->integer('berat_badan');
            $table->integer('lingkar_kepala');
            $table->set('jarak', ['Kurang dari 1 Km', 'Lebih dari 1 Km']);
            $table->string('km');
            $table->string('waktu_tempuh');
            $table->string('jumlah_saudara');
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
        Schema::dropIfExists('data_periodik');
    }
}
