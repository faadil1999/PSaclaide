<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Mail\VerifMail;
use App\Models\Student;
use App\Models\Formateur;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            //'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'ends_with:@universite-paris-saclay.fr',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            ], [
                'email.unique'    => 'L\'email est déjà utilisé.',
                'email.ends_with' => 'L\'email doit finir par "@universite-paris-saclay.fr".',
            ]
        )->validate();
       
        $user = User::create([
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
  
        Student::create([
            'user_id' => $user->id
        ]);

        return $user;
    }
}
