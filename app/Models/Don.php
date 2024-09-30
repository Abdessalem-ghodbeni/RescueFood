<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Don extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_don',
        'description',
        'restaurant_id', // Clé étrangère pour le restaurant
        'association_id', // Clé étrangère pour l'association
    ];

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    /**
     * Relation avec l'association : un don est effectué par une seule association
     */
    public function association()
    {
        return $this->belongsTo(Association::class);
    }
}
