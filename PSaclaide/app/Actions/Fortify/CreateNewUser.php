<?php

namespace App\Actions\Fortify;

use App\Models\Formateur;
use App\Models\Student;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
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
        ])->validate();
       
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
