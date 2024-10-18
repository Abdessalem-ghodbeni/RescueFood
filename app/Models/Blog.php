<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_blog',
        'objectif',
        'sujet',
        'association_id',
        "image",


    ];
    public function postes()
    {
        return $this->hasMany(Poste::class);
    }
    public function association()
    {
        return $this->belongsTo(Association::class);
    }
}
