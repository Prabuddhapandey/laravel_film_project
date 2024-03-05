<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    Protected $fillable=[
        'service_name',
        'description',
        'service_image',

    ];
}
