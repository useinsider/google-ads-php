<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/enums/app_store.proto

namespace Google\Ads\GoogleAds\V16\Enums\AppStoreEnum;

use UnexpectedValueException;

/**
 * App store type in an app extension.
 *
 * Protobuf type <code>google.ads.googleads.v16.enums.AppStoreEnum.AppStore</code>
 */
class AppStore
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Apple iTunes.
     *
     * Generated from protobuf enum <code>APPLE_ITUNES = 2;</code>
     */
    const APPLE_ITUNES = 2;
    /**
     * Google Play.
     *
     * Generated from protobuf enum <code>GOOGLE_PLAY = 3;</code>
     */
    const GOOGLE_PLAY = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::APPLE_ITUNES => 'APPLE_ITUNES',
        self::GOOGLE_PLAY => 'GOOGLE_PLAY',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AppStore::class, \Google\Ads\GoogleAds\V16\Enums\AppStoreEnum_AppStore::class);

