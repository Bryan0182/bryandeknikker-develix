<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog-develix';

    protected $fillable = ['title', 'intro', 'content', 'publication_date', 'author', 'status', 'featured_image', 'meta_title', 'meta_description'];

    protected $casts = [
        'publication_date' => 'date',
    ];
}
