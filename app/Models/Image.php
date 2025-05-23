<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'description', 
        'path', 
    ];

    public function categotry()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
}
