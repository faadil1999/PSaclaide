<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function Aindividuel()
    {
        return $this->hasMany( AIndividuel::class );
    }

    public function ACollectif()
    {
        return $this->hasMany( ACollectif::class );
    }

}
