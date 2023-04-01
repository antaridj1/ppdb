<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAyahTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_ayah', function (Blueprint $table) {
            $table->id();
            $table->integer('data_pribadi_id');
            $table->string('nama_ayah');
            $table->string('nik_ayah');
            $table->integer('tahun_ayah');
            $table->set('pendidikan_ayah', ['Tidak Sekolah', 'Putus SD', 'SD Sederajat', 'SMP Sederajat', 'SMA Sederajat', 'D1', 'D2', 'D3', 'S1', 'S2']);
            $table->set('pekerjaan_ayah', ['Tidak Bekerja', 'Nelayan', 'Petani', 'Peternak', 'PNS/TNI/POLRI', 'Karyawan Swasta', 'Pedagang Kecil', 'Pedangan Besar', 'Wiraswasta', 'Wirausaha', 'Buruh', 'Pensiun']);
            $table->set('penghasilan_ayah', ['< Rp 500.000', 'Rp 500.000 - Rp 999.999', 'Rp 1000.000 - Rp 1.999.999', 'Rp 2.000.000 - Rp 4.999.999', 'Rp 5.000.000 - Rp 20.000.000', '> Rp 20.000.000', 'Tidak Berpenghasilan']);
            $table->set('berkebutuhan_khusus_ayah', ['tidak', 'netra', 'rungu', 'grahita ringan', 'grahita sedang', 'daksa ringan', 'daksa sedang', 'laras','wicara', 'tuna jganda', 'hiper aktif', 'cerdas aktif', 'bakat istimewa', 'kesulitan belajar', 'narkoba', 'indigo', 'down sindrome', 'autis']);
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
        Schema::dropIfExists('data_ayah');
    }
}
