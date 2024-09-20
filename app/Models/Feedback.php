<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $fillable = [
        'commentaire',
        'association_id'

    ];
    public function association()
    {
        return $this->belongsTo(Association::class);
    }
}
