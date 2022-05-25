<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'umur' => ['required', 'string', 'max:25'],
            'domisili' => ['required', 'string', 'max:25'],
            'no_telp' => ['required', 'integer', 'max:11'],
            'keluhan' => ['required', 'string', 'max:25'],
            'lama_keluhan' => ['required', 'string', 'max:255'],
            // 'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'umur' => $input['umur'],
            'domisili' => $input['domisili'],
            'no_telp' => $input['no_telp'],
            'keluhan' => $input['keluhan'],
            'lama_keluhan' => $input['lama_keluhan'],
            // 'password' => Hash::make($input['password']),
        ]);
    }
}
