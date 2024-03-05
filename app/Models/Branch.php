<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable=[
        
        'location',
        'map',
        'email',
        'phone',
        'banner_image',
        'banner_title',
        'banner_paragraph',
       
    ];
}
