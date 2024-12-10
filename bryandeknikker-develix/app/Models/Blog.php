<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog-develix';

    protected $fillable = [
        'title',
        'slug',
        'intro',
        'content',
        'author',
        'status',
        'featured_image',
        'meta_title',
        'meta_description',
        'publication_date',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });

        static::updating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }

    protected $casts = [
        'publication_date' => 'date',
    ];
}
