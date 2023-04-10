<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'matiere',
        'author',
        'location',
        'isIndividual',
        'matiere_id',
        'date',
        'heure',
        'user_id'     
    ];

    protected $attributes = [
        'isAvailable' => true,
        'isIndividual' => true
    ];

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
