<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataIbu extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nama_ibu',
        'nik_ibu',
        'tahun_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'berkebutuhan_khusus_ibu',
    ];

    public function pesertaDidik()
    {
        return $this->belongsTo(PesertaDidik::class, 'data_ibu_id');
    }
}
