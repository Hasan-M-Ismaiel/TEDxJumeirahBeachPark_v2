<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainEvent extends Model
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
        'selected_options',
        'mainSelect',         //'you_are',
        'secondaryDropdown', //'S_P_guest', //this could be null if the "you are is ===> speaker | guest | team member"
        'why', 
    ];
}
