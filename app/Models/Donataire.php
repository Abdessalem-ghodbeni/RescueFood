<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donataire extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'don_id'];

    // Un Donataire appartient à un Don
    public function don()
    {
        return $this->belongsTo(Don::class);
    }
}
