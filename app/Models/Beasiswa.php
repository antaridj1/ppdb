<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Beasiswa extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'beasiswa';

    protected $fillable = [
        'jenis_anak_berprestasi',
        'keterangan',
        'tahun_mulai',
        'tahun_selesai',
        'data_pribadi_id'
    ];

    // public function siswa()
    // {
    //     return $this->belongsTo(Siswa::class, 'beasiswa_id');
    // }
}
