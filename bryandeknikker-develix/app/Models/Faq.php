<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    use HasFactory;

    protected $table = 'faq-develix';

    protected $fillable = ['category', 'question', 'answer', 'is_active'];

    // Scope to filter by category
    public function scopeByCategory($query, $category)
    {
        return $query->where('category', $category)->where('is_active', true);
    }

    // Scope to get all active FAQs
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}
