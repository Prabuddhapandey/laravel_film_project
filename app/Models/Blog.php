<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable=[
        'blog_banner_title',
        'blog_banner_paragraph',
        'blog_banner_image',
        'name',
        'description',
        'date',
        'blog_image',
    ];

    public function meta()
    {
        return $this->hasOne(Meta::class, 'table_id');
    }
}
