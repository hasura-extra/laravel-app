<?php

declare(strict_types=1);

namespace App\GraphQLExecutors\Types;

/**
 * @property DateTimeInterface|null $created_at
 * @property string|null $email
 * @property DateTimeInterface|null $email_verified_at
 * @property string|null $id
 * @property string|null $name
 * @property string|null $password
 * @property string|null $remember_token
 * @property DateTimeInterface|null $updated_at
 */
class users_set_input extends \Spawnia\Sailor\ObjectLike
{
    /**
     * @param DateTimeInterface|null $created_at
     * @param string|null $email
     * @param DateTimeInterface|null $email_verified_at
     * @param string|null $id
     * @param string|null $name
     * @param string|null $password
     * @param string|null $remember_token
     * @param DateTimeInterface|null $updated_at
     */
    public static function make(
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
            'created_at' => new \Spawnia\Sailor\Convert\NullConverter(new \Hasura\SailorBridge\Convert\TimestampTypeConverter),
            'email' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            'email_verified_at' => new \Spawnia\Sailor\Convert\NullConverter(new \Hasura\SailorBridge\Convert\TimestampTypeConverter),
            'id' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\ScalarConverter),
            'name' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            'password' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            'remember_token' => new \Spawnia\Sailor\Convert\NullConverter(new \Spawnia\Sailor\Convert\StringConverter),
            'updated_at' => new \Spawnia\Sailor\Convert\NullConverter(new \Hasura\SailorBridge\Convert\TimestampTypeConverter),
        ];
    }

    public static function endpoint(): string
    {
        return 'hasura';
    }
}
