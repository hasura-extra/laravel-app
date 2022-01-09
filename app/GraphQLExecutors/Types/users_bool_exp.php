<?php

declare(strict_types=1);

namespace App\GraphQLExecutors\Types;

/**
 * @property array<int, \App\GraphQLExecutors\Types\users_bool_exp>|null $_and
 * @property \App\GraphQLExecutors\Types\users_bool_exp|null $_not
 * @property array<int, \App\GraphQLExecutors\Types\users_bool_exp>|null $_or
 * @property \App\GraphQLExecutors\Types\timestamp_comparison_exp|null $created_at
 * @property \App\GraphQLExecutors\Types\String_comparison_exp|null $email
 * @property \App\GraphQLExecutors\Types\timestamp_comparison_exp|null $email_verified_at
 * @property \App\GraphQLExecutors\Types\bigint_comparison_exp|null $id
 * @property \App\GraphQLExecutors\Types\String_comparison_exp|null $name
 * @property \App\GraphQLExecutors\Types\String_comparison_exp|null $password
 * @property \App\GraphQLExecutors\Types\String_comparison_exp|null $remember_token
 * @property \App\GraphQLExecutors\Types\timestamp_comparison_exp|null $updated_at
 */
class users_bool_exp extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param array<int, \App\GraphQLExecutors\Types\users_bool_exp>|null $_and
     * @param \App\GraphQLExecutors\Types\users_bool_exp|null $_not
     * @param array<int, \App\GraphQLExecutors\Types\users_bool_exp>|null $_or
     * @param \App\GraphQLExecutors\Types\timestamp_comparison_exp|null $created_at
     * @param \App\GraphQLExecutors\Types\String_comparison_exp|null $email
     * @param \App\GraphQLExecutors\Types\timestamp_comparison_exp|null $email_verified_at
     * @param \App\GraphQLExecutors\Types\bigint_comparison_exp|null $id
     * @param \App\GraphQLExecutors\Types\String_comparison_exp|null $name
     * @param \App\GraphQLExecutors\Types\String_comparison_exp|null $password
     * @param \App\GraphQLExecutors\Types\String_comparison_exp|null $remember_token
     * @param \App\GraphQLExecutors\Types\timestamp_comparison_exp|null $updated_at
     */
    public static function make(
        $_and = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_not = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $_or = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $created_at = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $email = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $email_verified_at = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $id = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $name = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $password = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $remember_token = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.',
        $updated_at = 'Special default value that allows Sailor to differentiate between explicitly passing null and not passing a value at all.'
    ): self {
        $instance = new self;

        if ($_and !== self::UNDEFINED) {
            $instance->_and = $_and;
        }
        if ($_not !== self::UNDEFINED) {
            $instance->_not = $_not;
        }
        if ($_or !== self::UNDEFINED) {
            $instance->_or = $_or;
        }
        if ($created_at !== self::UNDEFINED) {
            $instance->created_at = $created_at;
        }
        if ($email !== self::UNDEFINED) {
            $instance->email = $email;
        }
        if ($email_verified_at !== self::UNDEFINED) {
            $instance->email_verified_at = $email_verified_at;
        }
        if ($id !== self::UNDEFINED) {
            $instance->id = $id;
        }
        if ($name !== self::UNDEFINED) {
            $instance->name = $name;
        }
        if ($password !== self::UNDEFINED) {
            $instance->password = $password;
        }
        if ($remember_token !== self::UNDEFINED) {
            $instance->remember_token = $remember_token;
        }
        if ($updated_at !== self::UNDEFINED) {
            $instance->updated_at = $updated_at;
        }

        return $instance;
    }

    protected function converters(): array
    {
        static $converters;

        return $converters ??= [
            '_and' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ListConverter(new \Spawnia\Sailor\Convert\NonNullConverter(new \App\GraphQLExecutors\Types\users_bool_exp))),
            '_not' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutors\Types\users_bool_exp),
            '_or' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ListConverter(new \Spawnia\Sailor\Convert\NonNullConverter(new \App\GraphQLExecutors\Types\users_bool_exp))),
            'created_at' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutors\Types\timestamp_comparison_exp),
            'email' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutors\Types\String_comparison_exp),
            'email_verified_at' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutors\Types\timestamp_comparison_exp),
            'id' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutors\Types\bigint_comparison_exp),
            'name' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutors\Types\String_comparison_exp),
            'password' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutors\Types\String_comparison_exp),
            'remember_token' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutors\Types\String_comparison_exp),
            'updated_at' => new \Spawnia\Sailor\Convert\NullConverter(new \App\GraphQLExecutors\Types\timestamp_comparison_exp),
        ];
    }

    public static function endpoint(): string
    {
        return 'hasura';
    }
}
