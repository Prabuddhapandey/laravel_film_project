<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;
    protected $fillable=[
     'slider_text_one',
    'slider_text_two',
    'slider_text_three',
    'slider_image',
    'service_header',
    'project_header',
    'link',
    ];
}
