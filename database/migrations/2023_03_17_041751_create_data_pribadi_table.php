<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPribadiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pribadi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap', 100);
            $table->set('gender', ['laki-laki', 'perempuan']);
            $table->integer('nisn');
            $table->integer('nik');
            $table->integer('kk');
            $table->string('tempat_lahir', 100);
            $table->date('tgl_lahir');
            $table->integer('akta_kelahiran');
            $table->set('gender', ['islam', 'kristen/protestan', 'khatolik', 'hindu', 'budha', 'konghucu', 'kepercayaan kepada tuhan yme']);
            $table->set('kewarganegaraan', ['wni', 'wna']);
            $table->string('negara')->default('indonesia');
            $table->set('berkebutuhan_khusus', ['tidak', 'netra', 'rungu', 'grahita ringan', 'grahita sedang', 'daksa ringan', 'daksa sedang', 'laras','wicara', 'tuna jganda', 'hiper aktif', 'cerdas aktif', 'bakat istimewa', 'kesulitan belajar', 'narkoba', 'indigo', 'down sindrome', 'autis']);
            $table->text('alamat');
            $table->string('RT');
            $table->string('RW');
            $table->string('dusun');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->string('lintang');
            $table->string('bujur');
            $table->set('tempat_tinggal', ['ortu', 'wali', 'kos', 'asrama', 'panti asuhan']);
            $table->set('moda_tranportasi', ['jalan kaki', 'kendaraan pribadi', 'kendaraan umum', 'jemputan sekolah', 'kereta api', 'ojek', 'becak', 'perahu penyebrangan', 'lainnya']);
            $table->integer('anak_ke');
            $table->enum('kip', ['iya', 'tidak']);
            $table->enum('menerima_kip', ['iya', 'tidak']);
            $table->set('pip', ['menerima bantuan serupa', 'menolak', 'sudah mampu']);
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
        Schema::dropIfExists('data_pribadi');
    }
}
