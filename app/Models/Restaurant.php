<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $fillable = [
        'Restorant',
        'specialite',
        'numero_fix',
        'localisation',
        'user_id'

    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function dons()
    {
        return $this->hasMany(Don::class);
    }
}
