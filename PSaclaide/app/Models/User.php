<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'password',
        'first_name',
        'last_name',
        'studyYear',
        'speciality',
        'isTeacher',
        'departement_id',
        'currentState',
        'stateUser'
    ];

    protected $attributes = [
        'first_name' => null,
        'last_name'  => null,  
        'email_verified_at' => null,
        'studyYear'  => null,
        'speciality' => null,
        'isTeacher'  => false,
        'nbCoursesGiven'    => 0,
        'nbCoursesReceived' => 0,
        'sumGrades' => 0,
        'avgGrades' => 0,
        'balance'   => 0,
        'departement_id' => null,
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function ready_to_use()
    {
      return $this->last_name==null;
    }

    public function annonces()
    {
        return $this->hasMany(Annonce::class);
    }

    public function formateur()
    {
        return $this->hasOne(Formateur::class);
    }

    public function student()
    {
        return$this->hasOne(Student::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
}
