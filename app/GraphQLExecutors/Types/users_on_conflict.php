<?php

declare(strict_types=1);

namespace App\GraphQLExecutors\Types;

/**
 * @property string $constraint
 * @property array<int, string> $update_columns
 * @property \App\GraphQLExecutors\Types\users_bool_exp|null $where
 */
class users_on_conflict extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param string $constraint
     * @param array<int, string> $update_columns
     * @param \App\GraphQLExecutors\Types\users_bool_exp|null $where
     */
    public static function make(
        $constraint,
        $update_columns = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $where = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.'
    ): self {
        $instance = new self;

        if ($constraint !== self::UNDEFINED) {
            $instance->constraint = $constraint;
        }
        if ($update_columns !== self::UNDEFINED) {
            $instance->update_columns = $update_columns;
        }
        if ($where !== self::UNDEFINED) {
            $instance->where = $where;
        }

        return $instance;
    }

    protected function converters(): array
    {
        static $converters;

        return $converters ??= [
            'constraint' => new \Spawnia\Sailor\Convert\NonNullConverter(new \Spawnia\Sailor\Convert\EnumConverter),
            'update_columns' => new \Spawnia\Sailor\Convert\NonNullConverter(new \Spawnia\Sailor\Convert\ListConverter(new \Spawnia\Sailor\Convert\NonNullConverter(new \Spawnia\Sailor\Convert\EnumConverter))),
            'where' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutors\Types\users_bool_exp),
        ];
    }

    public static function endpoint(): string
    {
        return 'hasura';
    }
}
