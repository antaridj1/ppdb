<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'siswa';

    protected $fillable = [
        'no_tlp',
        'no_hp',
        'email',
        'sekolah_id',
        'password',
        'daftar',
        'data_pribadi_id'
    ];

    protected $hidden = [
        'password'
    ];

    // public function sekolah()
    // {
    //     return $this->belongsTo(Sekolah::class, 'sekolah_id');
    // }

    // public function pesertaDidik()
    // {
    //     return $this->hasMany(PesertaDidik::class, 'siswa_id');
    // }

    // public function detailPesertaDidik()
    // {
    //     return $this->belongsTo(DetailPesertaDidik::class, 'siswa_id');

    // }

    public function chats()
    {
        return $this->hasMany(Chat::class, 'siswa_id');
    }

    //addition
    public function dataPribadi()
    {
        return $this->hasOne(DataPribadi::class);
    }

}
