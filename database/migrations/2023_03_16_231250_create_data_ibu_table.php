<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataIbuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_ibu', function (Blueprint $table) {
            $table->id();
            $table->integer('data_pribadi_id');
            $table->string('nama_ibu');
            $table->string('nik_ibu');
            $table->integer('tahun_ibu');
            $table->set('pendidikan_ibu', ['Tidak Sekolah', 'Putus SD', 'SD Sederajat', 'SMP Sederajat', 'SMA Sederajat', 'D1', 'D2', 'D3', 'S1', 'S2']);
            $table->set('pekerjaan_ibu', ['Tidak Bekerja', 'Nelayan', 'Petani', 'Peternak', 'PNS/TNI/POLRI', 'Karyawan Swasta', 'Pedagang Kecil', 'Pedangan Besar', 'Wiraswasta', 'Wirausaha', 'Buruh', 'Pensiun']);
            $table->set('penghasilan_ibu', ['< Rp 500.000', 'Rp 500.000 - Rp 999.999', 'Rp 1000.000 - Rp 1.999.999', 'Rp 2.000.000 - Rp 4.999.999', 'Rp 5.000.000 - Rp 20.000.000', '> Rp 20.000.000', 'Tidak Berpenghasilan']);
            $table->set('berkebutuhan_khusus_ibu', ['tidak', 'netra', 'rungu', 'grahita ringan', 'grahita sedang', 'daksa ringan', 'daksa sedang', 'laras','wicara', 'tuna jganda', 'hiper aktif', 'cerdas aktif', 'bakat istimewa', 'kesulitan belajar', 'narkoba', 'indigo', 'down sindrome', 'autis']);
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
        Schema::dropIfExists('data_ibu');
    }
}
