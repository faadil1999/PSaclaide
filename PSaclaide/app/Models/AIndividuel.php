<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AIndividuel extends Model
{
    use HasFactory;

    protected $fillable = [
        'annonce_id'     
    ];
    
    public function annonce()
    {
        return $this->morphOne(Annonce::class, 'annonceType');
    }
    
    public function annonceUnique()
    {
        return $this->belongsTo(Annonce::class, 'annonceType_id')->where('annonceType_type', AIndividuel::class);
    }
    
    public function formateur()
    {
        return $this->belongsTo(Formateur::class);
    }
    

}
