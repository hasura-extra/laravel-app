<?php

declare(strict_types=1);

namespace App\GraphQLExecutors;

class TypeConverters
{
    public static function Int(): \Spawnia\Sailor\Convert\IntConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\IntConverter();
    }

    public static function Float(): \Spawnia\Sailor\Convert\FloatConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\FloatConverter();
    }

    public static function String(): \Spawnia\Sailor\Convert\StringConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\StringConverter();
    }

    public static function Boolean(): \Spawnia\Sailor\Convert\BooleanConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\BooleanConverter();
    }

    public static function ID(): \Spawnia\Sailor\Convert\IDConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\IDConverter();
    }

    public static function ContinentFilterInput(): Types\ContinentFilterInput
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutors\Types\ContinentFilterInput();
    }

    public static function StringQueryOperatorInput(): Types\StringQueryOperatorInput
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutors\Types\StringQueryOperatorInput();
    }

    public static function CountryFilterInput(): Types\CountryFilterInput
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutors\Types\CountryFilterInput();
    }

    public static function LanguageFilterInput(): Types\LanguageFilterInput
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutors\Types\LanguageFilterInput();
    }

    public static function users_select_column(): \Spawnia\Sailor\Convert\EnumConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\EnumConverter();
    }

    public static function users_order_by(): Types\users_order_by
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutors\Types\users_order_by();
    }

    public static function order_by(): \Spawnia\Sailor\Convert\EnumConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\EnumConverter();
    }

    public static function users_bool_exp(): Types\users_bool_exp
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutors\Types\users_bool_exp();
    }

    public static function timestamp_comparison_exp(): Types\timestamp_comparison_exp
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutors\Types\timestamp_comparison_exp();
    }

    public static function timestamp(): \Hasura\SailorBridge\Convert\TimestampTypeConverter
    {
        static $converter;

        return $converter ??= new \Hasura\SailorBridge\Convert\TimestampTypeConverter();
    }

    public static function String_comparison_exp(): Types\String_comparison_exp
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutors\Types\String_comparison_exp();
    }

    public static function bigint_comparison_exp(): Types\bigint_comparison_exp
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutors\Types\bigint_comparison_exp();
    }

    public static function bigint(): \Spawnia\Sailor\Convert\ScalarConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\ScalarConverter();
    }

    public static function users_insert_input(): Types\users_insert_input
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutors\Types\users_insert_input();
    }

    public static function users_on_conflict(): Types\users_on_conflict
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutors\Types\users_on_conflict();
    }

    public static function users_constraint(): \Spawnia\Sailor\Convert\EnumConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\EnumConverter();
    }

    public static function users_update_column(): \Spawnia\Sailor\Convert\EnumConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\EnumConverter();
    }

    public static function registration_input(): Types\registration_input
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutors\Types\registration_input();
    }

    public static function users_inc_input(): Types\users_inc_input
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutors\Types\users_inc_input();
    }

    public static function users_set_input(): Types\users_set_input
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutors\Types\users_set_input();
    }

    public static function users_pk_columns_input(): Types\users_pk_columns_input
    {
        static $converter;

        return $converter ??= new \App\GraphQLExecutors\Types\users_pk_columns_input();
    }

    public static function __TypeKind(): \Spawnia\Sailor\Convert\EnumConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\EnumConverter();
    }

    public static function __DirectiveLocation(): \Spawnia\Sailor\Convert\EnumConverter
    {
        static $converter;

        return $converter ??= new \Spawnia\Sailor\Convert\EnumConverter();
    }

    public static function json(): \Hasura\SailorBridge\Convert\JsonTypeConverter
    {
        static $converter;

        return $converter ??= new \Hasura\SailorBridge\Convert\JsonTypeConverter();
    }

    public static function jsonb(): \Hasura\SailorBridge\Convert\JsonTypeConverter
    {
        static $converter;

        return $converter ??= new \Hasura\SailorBridge\Convert\JsonTypeConverter();
    }

    public static function date(): \Hasura\SailorBridge\Convert\DateTypeConverter
    {
        static $converter;

        return $converter ??= new \Hasura\SailorBridge\Convert\DateTypeConverter();
    }

    public static function time(): \Hasura\SailorBridge\Convert\TimeTypeConverter
    {
        static $converter;

        return $converter ??= new \Hasura\SailorBridge\Convert\TimeTypeConverter();
    }

    public static function timetz(): \Hasura\SailorBridge\Convert\TimetzTypeConverter
    {
        static $converter;

        return $converter ??= new \Hasura\SailorBridge\Convert\TimetzTypeConverter();
    }

    public static function timestamptz(): \Hasura\SailorBridge\Convert\TimestamptzTypeConverter
    {
        static $converter;

        return $converter ??= new \Hasura\SailorBridge\Convert\TimestamptzTypeConverter();
    }

    public static function uuid(): \Hasura\SailorBridge\Convert\UuidTypeConverter
    {
        static $converter;

        return $converter ??= new \Hasura\SailorBridge\Convert\UuidTypeConverter();
    }
}
