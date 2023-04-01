<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataWaliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_wali', function (Blueprint $table) {
            $table->id();
            $table->integer('data_pribadi_id');
            $table->string('nama_wali')->nullable();
            $table->string('nik_wali')->nullable();
            $table->integer('tahun_wali')->nullable();
            $table->set('pendidikan_wali', ['Tidak Sekolah', 'Putus SD', 'SD Sederajat', 'SMP Sederajat', 'SMA Sederajat', 'D1', 'D2', 'D3', 'S1', 'S2'])->nullable();
            $table->set('pekerjaan_wali', ['Tidak Bekerja', 'Nelayan', 'Petani', 'Peternak', 'PNS/TNI/POLRI', 'Karyawan Swasta', 'Pedagang Kecil', 'Pedangan Besar', 'Wiraswasta', 'Wirausaha', 'Buruh', 'Pensiun'])->nullable();
            $table->set('penghasilan_wali', ['< Rp 500.000', 'Rp 500.000 - Rp 999.999', 'Rp 1000.000 - Rp 1.999.999', 'Rp 2.000.000 - Rp 4.999.999', 'Rp 5.000.000 - Rp 20.000.000', '> Rp 20.000.000', 'Tidak Berpenghasilan'])->nullable();
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
        Schema::dropIfExists('data_wali');
    }
}
