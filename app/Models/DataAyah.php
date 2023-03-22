<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataAyah extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nama_ayah',
        'nik_ayah',
        'tahun_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'berkebutuhan_khusus_ayah',
    ];

    public function pesertaDidik()
    {
        return $this->belongsTo(PesertaDidik::class, 'data_ayah_id');
    }
}
