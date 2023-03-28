<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataPribadi extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'data_pribadi';

    protected $fillable = [
        //additional
        'sekolah_id',
        'nama_lengkap',
        'gender',
        'nisn',
        'nik',
        'kk',
        'tempat_lahir',
        'tgl_lahir',
        'akta_kelahiran',
        'agama',
        'kewarganegaraan',
        'negara',
        'berkebutuhan_khusus',
        'alamat',
        'rt',
        'rw',
        'dusun',
        'kelurahan',
        'kecamatan',
        'kode_pos',
        'lintang',
        'bujur',
        'tempat_tinggal',
        'moda_tranportasi',
        'anak_ke',
        'kip',
        'menerima_kip',
        'pip',
    ];

    // public function pesertaDidik()
    // {
    //     return $this->belongsTo(PesertaDidik::class, 'data_pribadi');
    // }

    public function siswa()
    {
        return $this->hasOne(Siswa::class);
    }

    public function sekolah()
    {
        return $this->hasOne(Sekolah::class);
    }
    public function dataPeriodik()
    {
        return $this->hasOne(DataPeriodik::class);
    }
    public function dataAyah()
    {
        return $this->hasOne(DataAyah::class);
    }
    public function dataIbu()
    {
        return $this->hasOne(DataIbu::class);
    }
    public function dataWali()
    {
        return $this->hasOne(DataWali::class);
    }
    public function beasiswa()
    {
        return $this->hasOne(Beasiswa::class);
    }

    public function prestasi()
    {
        return $this->hasOne(Prestasi::class);
    }
    public function kesejahteraan()
    {
        return $this->hasOne(Kesejahteraan::class);
    }

}
