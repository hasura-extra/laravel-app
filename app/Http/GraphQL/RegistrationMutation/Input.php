<?php

namespace App\Http\GraphQL\RegistrationMutation;

use TheCodingMachine\GraphQLite\Annotations as GQL;

#[GQL\Input(name: 'registration_input', default: true)]
class Input
{
    #[GQL\Field]
    public string $name;

    #[GQL\Field]
    public string $email;

    #[GQL\Field]
    public string $password;

    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:App\Models\User,email',
            'password' => 'required'
        ];
    }
}
