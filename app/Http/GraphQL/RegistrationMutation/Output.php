<?php

namespace App\Http\GraphQL\RegistrationMutation;

use App\Models\User;
use TheCodingMachine\GraphQLite\Annotations as GQL;

#[GQL\Type(class: User::class, name: 'registration_output', default: false)]
#[GQL\MagicField(name: 'id', outputType: 'Int!')]
class Output
{
}
