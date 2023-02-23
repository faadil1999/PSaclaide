<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }

    public function sousMatieres()
    {
        return $this->belongsToMany(SousMatiere::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function annonceType()
    {
        return $this->morphTo();
    }
}
