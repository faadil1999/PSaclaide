<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    use HasFactory;

    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }

    public function departements()
    {
        return $this->belongsToMany(Departement::class);
    }

    public function sousMatieres()
    {
        return $this->hasMany(SousMatiere::class);
    }
}
