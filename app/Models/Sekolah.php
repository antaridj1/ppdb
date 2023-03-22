<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    use HasFactory;

    protected $table = 'sekolah';

    protected $fillable = [
        'nama_sekolah',
        'alamat_sekolah',
        'tlp_sekolah',
        'email',
        'password',
    ];

    protected $hidden = [
        'password'
    ];

    public function ppdb()
    {
        return $this->belongsTo(PPDB::class, 'sekolah_id');
    }

    public function siswa()
    {
        return $this->hasMany(Siswa::class, 'sekolah_id');
    }
}
