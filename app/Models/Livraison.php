<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livraison extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_de_livraison',
        'destination',
        'numero_livraison',
        'user_id',
        'trajet_id',
        'produit_id',     // Ajout de la clé étrangère produit
        'etat',           // Ajout du champ état
    ];

    // Dans le modèle Livraison
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function trajet()
    {
        return $this->belongsTo(Trajet::class);
    }

    // Relation avec le modèle Produit
    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }
}