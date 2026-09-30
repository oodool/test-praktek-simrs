<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'name',
        'specialization',
        'phone_number',
        'address',
        'joined_date',
    ];
}
