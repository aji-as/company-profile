<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'title',
        'slug',
        'content',
        'image',
    ];

    // Relasi ke User (Author)
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
