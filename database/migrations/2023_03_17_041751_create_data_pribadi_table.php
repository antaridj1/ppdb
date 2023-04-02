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
            $table->integer('sekolah_id');
            $table->string('nama_lengkap', 100);
            $table->set('gender', ['Laki-laki', 'Perempuan']);
            $table->string('nisn', 10);
            $table->string('nik', 16);
            $table->string('kk');
            $table->string('tempat_lahir', 100);
            $table->date('tgl_lahir');
            $table->string('akta_kelahiran');
            $table->set('agama', ['Islam', 'Kristen/Protestan', 'Khatolik', 'Hindu', 'Budha', 'Konghucu', 'Kepercayaan kepada Tuhan YME']);
            $table->set('kewarganegaraan', ['WNI', 'WNA']);
            $table->string('negara')->default('Indonesia');
            $table->set('berkebutuhan_khusus', ['Tidak', 'Netra', 'Rungu', 'Grahita Ringan', 'Grahita Sedang', 'Daksa Ringan', 'Daksa Sedang', 'Laras','Wicara', 'Tuna Ganda', 'Hiper Aktif', 'Cerdas Aktif', 'Bakat Istimewa', 'Kesulitan Belajar', 'Narkoba', 'Indigo', 'Down Sindrome', 'Autis']);
            $table->text('alamat');
            $table->string('rt', 3);
            $table->string('rw', 3);
            $table->string('dusun');
            $table->string('kelurahan');
            $table->string('kecamatan');
            $table->string('kode_pos');
            $table->string('lintang');
            $table->string('bujur');
            $table->set('tempat_tinggal', ['Bersama orang tua', 'Wali', 'Kos', 'Asrama', 'Panti Asuhan']);
            $table->set('moda_tranportasi', ['Jalan kaki', 'Kendaraan pribadi', 'Kendaraan umum', 'Jemputan sekolah', 'Kereta api', 'Ojek', 'Becak', 'Perahu penyebrangan', 'Lainnya']);
            $table->integer('anak_ke');
            $table->enum('kip', ['iya', 'tidak']);
            $table->enum('menerima_kip', ['iya', 'tidak']);
            $table->set('pip', ['Menerima bantuan serupa', 'Menolak', 'Sudah mampu']);
            $table->boolean('isAccepted')->default(false); // si anak diterima
            $table->boolean('isVerificated')->nullable(); // data lengkap
            $table->text('saran_perbaikan')->nullable();
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
        Schema::dropIfExists('data_pribadi');
    }
}
