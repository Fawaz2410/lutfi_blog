<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Mendaftarkan kolom agar bisa diisi data
protected $fillable = ['title', 'content', 'author', 'published_at', 'image_url'];
}