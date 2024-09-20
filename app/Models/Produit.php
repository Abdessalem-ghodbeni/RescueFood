<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom_produit',
        'prix',
        'type',
        'stock_id', // Clé étrangère ajoutée

    ];

    // Relation : un produit appartient à un seul stock
    public function stock()
    {
        return $this->belongsTo(Stock::class);
    }
}
