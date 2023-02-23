<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SousMatiere extends Model
{
    use HasFactory;

    public function annonces()
    {
        return $this->belongsToMany(Annonce::class);
    }

    public function matiere()
    {
        return $this->belongsTo(Matiere::class);
    }
}
