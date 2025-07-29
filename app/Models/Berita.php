<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
        'published_at',
        'user_id',
    ];

    // Ini akan membuat 'published_at' menjadi objek tanggal yang lebih mudah diolah
    protected $casts = [
        'published_at' => 'datetime',
    ];
}
