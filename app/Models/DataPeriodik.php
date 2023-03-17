<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPeriodik extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'tinggi_badan',
        'berat_badan',
        'lingkar_kepala',
        'jarak',
        'km',
        'waktu_tempuh',
        'jumlah_saudara',
    ];

    public function detailPesertaDidik()
    {
        return $this->belongsTo(DetailPesertaDidik::class, 'data_periodik_id_id');
    }
}
