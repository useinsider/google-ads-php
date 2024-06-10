<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/asset_source.proto

namespace Google\Ads\GoogleAds\V13\Enums\AssetSourceEnum;

use UnexpectedValueException;

/**
 * Enum describing possible source of asset.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.AssetSourceEnum.AssetSource</code>
 */
class AssetSource
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
     * The asset or asset link is provided by advertiser.
     *
     * Generated from protobuf enum <code>ADVERTISER = 2;</code>
     */
    const ADVERTISER = 2;
    /**
     * The asset or asset link is generated by Google.
     *
     * Generated from protobuf enum <code>AUTOMATICALLY_CREATED = 3;</code>
     */
    const AUTOMATICALLY_CREATED = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ADVERTISER => 'ADVERTISER',
        self::AUTOMATICALLY_CREATED => 'AUTOMATICALLY_CREATED',
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
class_alias(AssetSource::class, \Google\Ads\GoogleAds\V13\Enums\AssetSourceEnum_AssetSource::class);

