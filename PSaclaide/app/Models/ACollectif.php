<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ACollectif extends Model
{
    use HasFactory;

        
    protected $fillable = [
        'annonce_id'     
    ];

    protected $attributes = [
        'maximum_number_people' => 10,
        'current_number_people' => 0,
        'location' => '620 A200'
    ];

    public function annonce()
    {
        return $this->morphOne(Annonce::class, 'annonceType');
    }

    public function annonceUnique()
    {
        return $this->belongsTo(Annonce::class, 'annonceType_id')->where('annonceType_type', ACollectif::class);
    }

    public function formateur()
    {
        return $this->belongsTo(Formateur::class );
    }

}

