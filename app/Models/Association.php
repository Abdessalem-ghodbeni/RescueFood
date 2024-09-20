<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Association extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'numero_telphone',
        'user_id', // Clé étrangère ajoutée

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
