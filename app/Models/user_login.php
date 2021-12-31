<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_login extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
     protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
