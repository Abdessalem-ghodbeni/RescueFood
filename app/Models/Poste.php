<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poste extends Model
{
    use HasFactory;

    protected $fillable = [
        'titre',
        'contenu_poste',
        'image',
        'blog_id',
    ];

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }
}
