<?php

declare(strict_types=1);

namespace App\GraphQLExecutors\Countries;

class Countries extends \Spawnia\Sailor\TypedObject
{
    /** @var array<int, \App\GraphQLExecutors\Countries\Countries\Countries> */
    public $countries;

    public function countriesTypeMapper(): callable
    {
        return static function (\stdClass $value): \Spawnia\Sailor\TypedObject {
            return \App\GraphQLExecutors\Countries\Countries\Countries::fromStdClass($value);
        };
    }
}
