<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/location_ownership_type.proto

namespace Google\Ads\GoogleAds\V15\Enums\LocationOwnershipTypeEnum;

use UnexpectedValueException;

/**
 * Possible types of a location ownership.
 *
 * Protobuf type <code>google.ads.googleads.v15.enums.LocationOwnershipTypeEnum.LocationOwnershipType</code>
 */
class LocationOwnershipType
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
     * Business Owner of location(legacy location extension - LE).
     *
     * Generated from protobuf enum <code>BUSINESS_OWNER = 2;</code>
     */
    const BUSINESS_OWNER = 2;
    /**
     * Affiliate location(Third party location extension - ALE).
     *
     * Generated from protobuf enum <code>AFFILIATE = 3;</code>
     */
    const AFFILIATE = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::BUSINESS_OWNER => 'BUSINESS_OWNER',
        self::AFFILIATE => 'AFFILIATE',
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
class_alias(LocationOwnershipType::class, \Google\Ads\GoogleAds\V15\Enums\LocationOwnershipTypeEnum_LocationOwnershipType::class);

