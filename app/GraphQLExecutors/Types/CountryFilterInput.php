<?php

declare(strict_types=1);

namespace App\GraphQLExecutors\Types;

/**
 * @property \App\GraphQLExecutors\Types\StringQueryOperatorInput|null $code
 * @property \App\GraphQLExecutors\Types\StringQueryOperatorInput|null $continent
 * @property \App\GraphQLExecutors\Types\StringQueryOperatorInput|null $currency
 */
class CountryFilterInput extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param \App\GraphQLExecutors\Types\StringQueryOperatorInput|null $code
     * @param \App\GraphQLExecutors\Types\StringQueryOperatorInput|null $continent
     * @param \App\GraphQLExecutors\Types\StringQueryOperatorInput|null $currency
     */
    public static function make(
        $code = 1.7976931348623157E+308,
        $continent = 1.7976931348623157E+308,
        $currency = 1.7976931348623157E+308
    ): self {
        $instance = new self;

        if ($code !== self::UNDEFINED) {
            $instance->code = $code;
        }
        if ($continent !== self::UNDEFINED) {
            $instance->continent = $continent;
        }
        if ($currency !== self::UNDEFINED) {
            $instance->currency = $currency;
        }

        return $instance;
    }

    protected function converters(): array
    {
        static $converters;

        return $converters ??= [
            'code' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutors\Types\StringQueryOperatorInput),
            'continent' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutors\Types\StringQueryOperatorInput),
            'currency' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutors\Types\StringQueryOperatorInput),
        ];
    }
}
