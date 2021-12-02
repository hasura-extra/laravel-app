<?php

namespace App\Http\GraphQL\LoginMutation;

use App\Models\User;
use Hasura\GraphQLiteBridge\Attribute\Roles;
use Hasura\Laravel\GraphQLite\Attribute\ArgModel;
use Illuminate\Support\Facades\Hash;
use TheCodingMachine\GraphQLite\Annotations as GQL;
use TheCodingMachine\GraphQLite\Exceptions\GraphQLException;
use TheCodingMachine\GraphQLite\Laravel\Annotations\Validate;

class Resolver
{
    #[GQL\Mutation(name: 'login')]
    #[ArgModel(for: 'user', argName: 'email', fieldName: 'email', inputType: 'String!')]
    #[Roles('anonymous')]
    public function __invoke(
        User $user,
        #[Validate(['rule' => 'required'])] string $password,
        #[Validate(['rule' => 'required'])] string $device
    ): Output {
        if (!Hash::check($password, $user->getAuthPassword())) {
            throw new GraphQLException('Invalid credentials', category: 'InvalidCredentials');
        }

        $output = new Output();
        $output->token = $user->createToken($device)->plainTextToken;

        return $output;
    }
}
