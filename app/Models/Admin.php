<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use SoftDeletes;
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guard = 'admin';
    protected $dates = ['deleted_at'];
    
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number',
        'isAdmin',
        'status',
        'deleted_at'
    ];

    public function chats()
    {
        return $this->hasMany(Chat::class, 'user_id');
    }

}
