<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Prestasi extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'prestasi';

    protected $fillable = [
        'nama_prestasi',
        'tahun',
        'penyelenggara',
        'jenis_prestasi',
        'tingkat',
        'data_pribadi_id'
    ];

    // public function siswa()
    // {
    //     return $this->belongsTo(Siswa::class, 'prestasi_id');
    // }
}
