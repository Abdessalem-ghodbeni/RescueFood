<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    use HasFactory;

    protected $fillable = [
        'point_depart',
        'point_arrive',
        'duree',

    ];

    public function livraisons()
    {
        return $this->hasMany(Livraison::class);
    }
}
