<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'no_tlp',
        'no_hp',
        'email',
        'password'
    ];

    protected $hidden = [
        'password'
    ];

    public function pesertaDidik()
    {
        return $this->belongsTo(PesertaDidik::class, 'siswa_id');
    }
}
