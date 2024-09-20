<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_plat',
        'prix',
        'description',
        'restaurant_id', // Clé étrangère pour relier le menu au restaurant
    ];
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
