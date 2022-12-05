<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;
    protected $fillable = [
        'member_fname',
        'member_lname',
        'member_national_id',
        "ikibina_id",
        "ikibinaname",
        "telefone",
        "intara",
        "akarere",
        "umurenge",
        "akagari",
        "umudugudu",
        "password",
        "role"
    ];
    protected $hidden = [
        'password',
    ];
}
