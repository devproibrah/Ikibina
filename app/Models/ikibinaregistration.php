<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class ikibinaregistration extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        "ikibinaname",
        "telefone",
        "intara",
        "akarere",
        "umurenge",
        "akagari",
        "umudugudu",
        "adminpassword"
    ];
    protected $hidden = [
        'adminpassword',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
