<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'jenis_anak_berprestasi',
        'keterangan',
        'tahun_mulai',
        'tahun_selesai',
    ];

    public function detailPesertaDidik()
    {
        return $this->belongsTo(DetailPesertaDidik::class, 'beasiswa_id');
    }
}
