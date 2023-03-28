<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class PesertaDidik extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'peserta_didik';

    protected $fillable = [
        'data_pribadi_id',
        'data_ayah_id',
        'data_ibu_id',
        'data_wali_id',
        'siswa_id',
    ];

    public function dataAyah()
    {
        return $this->hasMany(DataAyah::class, 'data_ayah_id');
    }

    public function dataIbu()
    {
        return $this->hasMany(DataIbu::class, 'data_ibu_id');
    }

    public function dataWali()
    {
        return $this->hasMany(DataWali::class, 'data_wali_id');
    }

    public function dataPribadi()
    {
        return $this->hasMany(DataPribadi::class, 'data_pribadi_id');
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'siswa_id');
    }

    public function ppdb()
    {
        return $this->belongsTo(PPDB::class, 'peserta_didik_id');
    }
}
