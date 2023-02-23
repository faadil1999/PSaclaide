<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ACollectif extends Model
{
    use HasFactory;
    public function annonce()
    {
        return $this->morphOne(Annonce::class, 'annonceType');
    }

    public function annonceUnique()
    {
        return $this->belongsTo(Annonce::class, 'annonceType_id')->where('annonceType_type', ACollectif::class);
    }
}
