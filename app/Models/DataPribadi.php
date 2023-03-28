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
        'isVerificated'
    ];

    public function siswa()
    {
        return $this->hasOne(Siswa::class);
    }
    public function sekolah()
    {
        return $this->belongsTo(Sekolah::class);
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
        return $this->hasMany(Beasiswa::class);
    }
    public function prestasi()
    {
        return $this->hasMany(Prestasi::class);
    }
    public function kesejahteraan()
    {
        return $this->hasOne(Kesejahteraan::class);
    }
    public function file()
    {
        return $this->hasOne(File::class);
    }

}
