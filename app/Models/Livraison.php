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
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function trajet()
    {
        return $this->belongsTo(Trajet::class);
    }
}
