<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kesejahteraan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'kesejahteraan';

    protected $fillable = [
        'jenis_kesejahteraan',
        'no_kartu',
        'nama_sejahtera',
    ];

    public function detailPesertaDidik()
    {
        return $this->belongsTo(DetailPesertaDidik::class, 'kesejahteraan_id');
    }
}
