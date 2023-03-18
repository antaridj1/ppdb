<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PPDB extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'sekolah_id',
        'peserta_didik_id',
        'detail_peserta_didik_id',
        'file_id',
    ];

    public function sekolah()
    {
        return $this->hasMany(Sekolah::class, 'sekolah_id');
    }

    public function pesertaDidik()
    {
        return $this->hasMany(PesertaDidik::class, 'peserta_didik_id');
    }

    public function detailPesertaDidik()
    {
        return $this->hasMany(DetailPesertaDidik::class, 'detail_peserta_didik_id');
    }

    public function file()
    {
        return $this->hasMany(File::class, 'file_id');
    }
}
