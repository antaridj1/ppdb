<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataPeriodik extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'data_periodik';

    protected $fillable = [
        'tinggi_badan',
        'berat_badan',
        'lingkar_kepala',
        'jarak',
        'km',
        'waktu_tempuh',
        'jumlah_saudara',
        'data_pribadi_id'
    ];

    // public function detailPesertaDidik()
    // {
    //     return $this->belongsTo(DetailPesertaDidik::class, 'data_periodik_id_id');
    // }

    //addition
    // public function dataPribadi()
    // {
    //     return $this->belongsTo(DetailPesertaDidik::class, 'data_periodik_id_id');
    // }
}
