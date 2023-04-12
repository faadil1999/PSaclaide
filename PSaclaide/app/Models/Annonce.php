<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }

}
