<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestasi extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'nama_prestasi',
        'tahun',
        'penyelenggara',
        'jenis_prestasi',
        'tingkat',
    ];

    public function detailPesertaDidik()
    {
        return $this->belongsTo(DetailPesertaDidik::class, 'prestasi_id');
    }
}
