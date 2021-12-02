<?php

namespace App\Http\GraphQL\LoginMutation;

use TheCodingMachine\GraphQLite\Annotations as GQL;

#[GQL\Type(name: 'login_output', default: true)]
class Output
{
    #[GQL\Field]
    public string $token;
}
