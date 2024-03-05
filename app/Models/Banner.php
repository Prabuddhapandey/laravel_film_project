<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $fillable=[
        'headerone',
        'headertwo',
        'headerthree',
        'banner_image_one',
        'banner_image_two',
        'banner_image_three',
        'link',
        'fb',
        'insta',
        'twitter',
        'youtube',
    ];
}
