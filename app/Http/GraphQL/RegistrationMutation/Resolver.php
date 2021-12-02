<?php

namespace App\Http\GraphQL\RegistrationMutation;

use App\Models\User;
use Hasura\GraphQLiteBridge\Attribute\Roles;
use Hasura\Laravel\GraphQLite\Attribute\ValidateObject;
use Illuminate\Support\Facades\Hash;
use TheCodingMachine\GraphQLite\Annotations as GQL;

class Resolver
{
    #[GQL\Mutation(name: 'registration', outputType: 'registration_output')]
    #[ValidateObject(for: 'input')]
    #[Roles('anonymous')]
    public function __invoke(Input $input): User
    {
        $user = new User();
        $user->name = $input->name;
        $user->email = $input->email;
        $user->password = Hash::make($input->password);
        $user->saveOrFail();

        return $user;
    }
}
