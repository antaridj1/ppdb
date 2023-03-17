<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kesejahteraan extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'jenis_kesejahteraan',
        'no_kartu',
        'nama',
    ];

    public function detailPesertaDidik()
    {
        return $this->belongsTo(DetailPesertaDidik::class, 'kesejahteraan_id');
    }
}
