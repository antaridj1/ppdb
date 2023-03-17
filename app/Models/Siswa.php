<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Siswa extends Authenticatable
{
    use HasFactory;

    protected $guard= 'siswa';

    protected $fillable = [
        'no_tlp',
        'no_hp',
        'email',
        'password'
    ];

    protected $hidden = [
        'password'
    ];
}
