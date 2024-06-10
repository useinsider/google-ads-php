<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/price_extension_type.proto

namespace Google\Ads\GoogleAds\V13\Enums\PriceExtensionTypeEnum;

use UnexpectedValueException;

/**
 * Price extension type.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.PriceExtensionTypeEnum.PriceExtensionType</code>
 */
class PriceExtensionType
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
     * The type for showing a list of brands.
     *
     * Generated from protobuf enum <code>BRANDS = 2;</code>
     */
    const BRANDS = 2;
    /**
     * The type for showing a list of events.
     *
     * Generated from protobuf enum <code>EVENTS = 3;</code>
     */
    const EVENTS = 3;
    /**
     * The type for showing locations relevant to your business.
     *
     * Generated from protobuf enum <code>LOCATIONS = 4;</code>
     */
    const LOCATIONS = 4;
    /**
     * The type for showing sub-regions or districts within a city or region.
     *
     * Generated from protobuf enum <code>NEIGHBORHOODS = 5;</code>
     */
    const NEIGHBORHOODS = 5;
    /**
     * The type for showing a collection of product categories.
     *
     * Generated from protobuf enum <code>PRODUCT_CATEGORIES = 6;</code>
     */
    const PRODUCT_CATEGORIES = 6;
    /**
     * The type for showing a collection of related product tiers.
     *
     * Generated from protobuf enum <code>PRODUCT_TIERS = 7;</code>
     */
    const PRODUCT_TIERS = 7;
    /**
     * The type for showing a collection of services offered by your business.
     *
     * Generated from protobuf enum <code>SERVICES = 8;</code>
     */
    const SERVICES = 8;
    /**
     * The type for showing a collection of service categories.
     *
     * Generated from protobuf enum <code>SERVICE_CATEGORIES = 9;</code>
     */
    const SERVICE_CATEGORIES = 9;
    /**
     * The type for showing a collection of related service tiers.
     *
     * Generated from protobuf enum <code>SERVICE_TIERS = 10;</code>
     */
    const SERVICE_TIERS = 10;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::BRANDS => 'BRANDS',
        self::EVENTS => 'EVENTS',
        self::LOCATIONS => 'LOCATIONS',
        self::NEIGHBORHOODS => 'NEIGHBORHOODS',
        self::PRODUCT_CATEGORIES => 'PRODUCT_CATEGORIES',
        self::PRODUCT_TIERS => 'PRODUCT_TIERS',
        self::SERVICES => 'SERVICES',
        self::SERVICE_CATEGORIES => 'SERVICE_CATEGORIES',
        self::SERVICE_TIERS => 'SERVICE_TIERS',
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
class_alias(PriceExtensionType::class, \Google\Ads\GoogleAds\V13\Enums\PriceExtensionTypeEnum_PriceExtensionType::class);

