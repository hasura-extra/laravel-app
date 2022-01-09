<?php

declare(strict_types=1);

namespace App\GraphQLExecutors\Types;

/**
 * @property \App\GraphQLExecutors\Types\StringQueryOperatorInput|null $code
 */
class LanguageFilterInput extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param \App\GraphQLExecutors\Types\StringQueryOperatorInput|null $code
     */
    public static function make($code = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.'): self
    {
        $instance = new self;

        if ($code !== self::UNDEFINED) {
            $instance->code = $code;
        }

        return $instance;
    }

    protected function converters(): array
    {
        static $converters;

        return $converters ??= [
            'code' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutors\Types\StringQueryOperatorInput),
        ];
    }

    public static function endpoint(): string
    {
        return 'hasura';
    }
}
