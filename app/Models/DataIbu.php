<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataIbu extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'data_ibu';

    protected $fillable = [
        'nama_ibu',
        'nik_ibu',
        'tahun_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'berkebutuhan_khusus_ibu',
        'data_pribadi_id'
    ];

    // public function siswa()
    // {
    //     return $this->belongsTo(Siswa::class);
    // }
    // public function pesertaDidik()
    // {
    //     return $this->belongsTo(PesertaDidik::class, 'data_ibu_id');
    // }
}
