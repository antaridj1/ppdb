<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesertaDidik extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_periodik_id',
        'prestasi_id',
        'beasiswa_id',
        'kesejahteraan_id',
        'siswa_id',
    ];

    public function dataPeriodik()
    {
        return $this->hasMany(DataPeriodik::class, 'data_periodik_id');
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'siswa_id');
    }

    public function prestasi()
    {
        return $this->hasMany(Prestasi::class, 'prestasi_id');
    }

    public function beasiswa()
    {
        return $this->hasMany(Beasiswa::class, 'beasiswa_id');
    }

    public function kesejahteraan()
    {
        return $this->hasMany(Kesejahteraan::class, 'kesejahteraan_id');
    }

    public function ppdb()
    {
        return $this->belongsTo(PPDB::class, 'detail_peserta_didik_id');
    }
}
