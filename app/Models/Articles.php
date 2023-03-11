<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    use HasFactory;

    protected $table = 'article';
    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'author',
        'is_deleted',
    ];
}
