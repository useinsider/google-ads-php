<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/enums/asset_group_primary_status.proto

namespace Google\Ads\GoogleAds\V16\Enums\AssetGroupPrimaryStatusEnum;

use UnexpectedValueException;

/**
 * Enum describing the possible asset group primary status. Provides insights
 * into why an asset group is not serving or not serving optimally.
 *
 * Protobuf type <code>google.ads.googleads.v16.enums.AssetGroupPrimaryStatusEnum.AssetGroupPrimaryStatus</code>
 */
class AssetGroupPrimaryStatus
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
     * The asset group is eligible to serve.
     *
     * Generated from protobuf enum <code>ELIGIBLE = 2;</code>
     */
    const ELIGIBLE = 2;
    /**
     * The asset group is paused.
     *
     * Generated from protobuf enum <code>PAUSED = 3;</code>
     */
    const PAUSED = 3;
    /**
     * The asset group is removed.
     *
     * Generated from protobuf enum <code>REMOVED = 4;</code>
     */
    const REMOVED = 4;
    /**
     * The asset group is not eligible to serve.
     *
     * Generated from protobuf enum <code>NOT_ELIGIBLE = 5;</code>
     */
    const NOT_ELIGIBLE = 5;
    /**
     * The asset group has limited servability.
     *
     * Generated from protobuf enum <code>LIMITED = 6;</code>
     */
    const LIMITED = 6;
    /**
     * The asset group is pending approval and may serve in the future.
     *
     * Generated from protobuf enum <code>PENDING = 7;</code>
     */
    const PENDING = 7;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ELIGIBLE => 'ELIGIBLE',
        self::PAUSED => 'PAUSED',
        self::REMOVED => 'REMOVED',
        self::NOT_ELIGIBLE => 'NOT_ELIGIBLE',
        self::LIMITED => 'LIMITED',
        self::PENDING => 'PENDING',
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
class_alias(AssetGroupPrimaryStatus::class, \Google\Ads\GoogleAds\V16\Enums\AssetGroupPrimaryStatusEnum_AssetGroupPrimaryStatus::class);

