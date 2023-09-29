<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/served_asset_field_type.proto

namespace Google\Ads\GoogleAds\V13\Enums\ServedAssetFieldTypeEnum;

use UnexpectedValueException;

/**
 * The possible asset field types.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.ServedAssetFieldTypeEnum.ServedAssetFieldType</code>
 */
class ServedAssetFieldType
{
    /**
     * No value has been specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received value is not known in this version.
     * This is a response-only value.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The asset is used in headline 1.
     *
     * Generated from protobuf enum <code>HEADLINE_1 = 2;</code>
     */
    const HEADLINE_1 = 2;
    /**
     * The asset is used in headline 2.
     *
     * Generated from protobuf enum <code>HEADLINE_2 = 3;</code>
     */
    const HEADLINE_2 = 3;
    /**
     * The asset is used in headline 3.
     *
     * Generated from protobuf enum <code>HEADLINE_3 = 4;</code>
     */
    const HEADLINE_3 = 4;
    /**
     * The asset is used in description 1.
     *
     * Generated from protobuf enum <code>DESCRIPTION_1 = 5;</code>
     */
    const DESCRIPTION_1 = 5;
    /**
     * The asset is used in description 2.
     *
     * Generated from protobuf enum <code>DESCRIPTION_2 = 6;</code>
     */
    const DESCRIPTION_2 = 6;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::HEADLINE_1 => 'HEADLINE_1',
        self::HEADLINE_2 => 'HEADLINE_2',
        self::HEADLINE_3 => 'HEADLINE_3',
        self::DESCRIPTION_1 => 'DESCRIPTION_1',
        self::DESCRIPTION_2 => 'DESCRIPTION_2',
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
class_alias(ServedAssetFieldType::class, \Google\Ads\GoogleAds\V13\Enums\ServedAssetFieldTypeEnum_ServedAssetFieldType::class);

