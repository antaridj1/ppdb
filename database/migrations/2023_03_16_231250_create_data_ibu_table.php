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
            $table->string('nama');
            $table->integer('nik');
            $table->integer('tahun');
            $table->set('pendidikan', ['Tidak Sekolah', 'Putus SD', 'SD Sederajat', 'SMP Sederajat', 'SMA Sederajat', 'D1', 'D2', 'D3', 'S1', 'S2']);
            $table->set('pekerjaan', ['Tidak Bekerja', 'Nelayan', 'Petani', 'Peternak', 'PNS/TNI/POLRI', 'Karyawan Swasta', 'Pedagang Kecil', 'Pedangan Besar', 'Wiraswasta', 'Wirausaha', 'Buruh', 'Pensiun']);
            $table->set('Penghasilan', ['< Rp 500.000', 'Rp 500.000 - Rp 999.999', 'Rp 1000.000 - Rp 1.999.999', 'Rp 2.000.000 - Rp 4.999.999', 'Rp 5.000.000 - Rp 20.000.000', '> Rp 20.000.000', 'Tidak Berpenghasilan']);
            $table->set('berkebutuhan_khusus', ['tidak', 'netra', 'rungu', 'grahita ringan', 'grahita sedang', 'daksa ringan', 'daksa sedang', 'laras','wicara', 'tuna jganda', 'hiper aktif', 'cerdas aktif', 'bakat istimewa', 'kesulitan belajar', 'narkoba', 'indigo', 'down sindrome', 'autis']);
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
        Schema::dropIfExists('data_ibu');
    }
}
