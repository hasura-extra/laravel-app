<?php

declare(strict_types=1);

namespace App\GraphQLExecutors\Types;

/**
 * @property string|null $created_at
 * @property string|null $email
 * @property string|null $email_verified_at
 * @property string|null $id
 * @property string|null $name
 * @property string|null $password
 * @property string|null $remember_token
 * @property string|null $updated_at
 */
class users_insert_input extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param string|null $created_at
     * @param string|null $email
     * @param string|null $email_verified_at
     * @param string|null $id
     * @param string|null $name
     * @param string|null $password
     * @param string|null $remember_token
     * @param string|null $updated_at
     */
    public static function make(
        $created_at = 1.7976931348623157E+308,
        $email = 1.7976931348623157E+308,
        $email_verified_at = 1.7976931348623157E+308,
        $id = 1.7976931348623157E+308,
        $name = 1.7976931348623157E+308,
        $password = 1.7976931348623157E+308,
        $remember_token = 1.7976931348623157E+308,
        $updated_at = 1.7976931348623157E+308
    ): self {
        $instance = new self;

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
            'created_at' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ScalarConverter),
            'email' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            'email_verified_at' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ScalarConverter),
            'id' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ScalarConverter),
            'name' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            'password' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            'remember_token' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            'updated_at' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ScalarConverter),
        ];
    }
}
