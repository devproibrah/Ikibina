<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memberregistration extends Model
{
    // use HasFactory;
    protected $table = 'memberregistrations';
    protected $primaryKey = 'id';
    protected $fillable = [
        'member_fname',
        'member_lname',
        'member_telephone',
        'member_national_id',
        'password',
        'ikibina_id',
        'role'
    ];

    protected $hidden = [
        'password',
        'created_at',
        'updated_at',
    ];

    public function payment()
    {
        return $this->hasMany(payment::class);
    }
}
