<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'type',
        'description',
        'restaurant_id',

    ];
    // Relation : un stock a plusieurs produits
    public function produits()
    {
        return $this->hasMany(Produit::class);
    }
    // Relation : un stock appartient à un restaurant
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
