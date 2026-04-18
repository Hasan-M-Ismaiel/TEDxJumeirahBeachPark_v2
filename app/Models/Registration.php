<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'country',
        'city',
        'birthday',
        'education',
        'work',
        'industry',
        'heard_about_us',
        'attending_as',
        'why_attend',
    ];
}
