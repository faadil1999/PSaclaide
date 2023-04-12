<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AIndividuel extends Model
{
    use HasFactory;

    protected $fillable = [
        'annonce_id',
        'formateur_id'     
    ];
    
    public function annonce()
    {
        return $this->belongsTo(Annonce::class);
    }
    public function hasStudent()
    {
        return count($this->annonce->students) != 0;
    }
    // public function annonceUnique()
    // {
    //     return $this->belongsTo(Annonce::class, 'annonceType_id')->where('annonceType_type', AIndividuel::class);
    // }
    
    public function formateur()
    {
        return $this->belongsTo(Formateur::class);
    }
    

}
