<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/mobile_device_type.proto

namespace Google\Ads\GoogleAds\V13\Enums\MobileDeviceTypeEnum;

use UnexpectedValueException;

/**
 * The type of mobile device.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.MobileDeviceTypeEnum.MobileDeviceType</code>
 */
class MobileDeviceType
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
     * Mobile phones.
     *
     * Generated from protobuf enum <code>MOBILE = 2;</code>
     */
    const MOBILE = 2;
    /**
     * Tablets.
     *
     * Generated from protobuf enum <code>TABLET = 3;</code>
     */
    const TABLET = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::MOBILE => 'MOBILE',
        self::TABLET => 'TABLET',
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
class_alias(MobileDeviceType::class, \Google\Ads\GoogleAds\V13\Enums\MobileDeviceTypeEnum_MobileDeviceType::class);

