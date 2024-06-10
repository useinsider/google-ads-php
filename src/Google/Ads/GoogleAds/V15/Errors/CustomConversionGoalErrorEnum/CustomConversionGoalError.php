<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/errors/custom_conversion_goal_error.proto

namespace Google\Ads\GoogleAds\V15\Errors\CustomConversionGoalErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible custom conversion goal errors.
 *
 * Protobuf type <code>google.ads.googleads.v15.errors.CustomConversionGoalErrorEnum.CustomConversionGoalError</code>
 */
class CustomConversionGoalError
{
    /**
     * Enum unspecified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The received error code is not known in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Cannot find a conversion action with the specified id.
     *
     * Generated from protobuf enum <code>INVALID_CONVERSION_ACTION = 2;</code>
     */
    const INVALID_CONVERSION_ACTION = 2;
    /**
     * The conversion action is not enabled so it cannot be included in a custom
     * conversion goal.
     *
     * Generated from protobuf enum <code>CONVERSION_ACTION_NOT_ENABLED = 3;</code>
     */
    const CONVERSION_ACTION_NOT_ENABLED = 3;
    /**
     * The custom conversion goal cannot be removed because it's linked to a
     * campaign.
     *
     * Generated from protobuf enum <code>CANNOT_REMOVE_LINKED_CUSTOM_CONVERSION_GOAL = 4;</code>
     */
    const CANNOT_REMOVE_LINKED_CUSTOM_CONVERSION_GOAL = 4;
    /**
     * Custom goal with the same name already exists.
     *
     * Generated from protobuf enum <code>CUSTOM_GOAL_DUPLICATE_NAME = 5;</code>
     */
    const CUSTOM_GOAL_DUPLICATE_NAME = 5;
    /**
     * Custom goal with the same conversion action list already exists.
     *
     * Generated from protobuf enum <code>DUPLICATE_CONVERSION_ACTION_LIST = 6;</code>
     */
    const DUPLICATE_CONVERSION_ACTION_LIST = 6;
    /**
     * Conversion types that cannot be biddable should not be included in custom
     * goal.
     *
     * Generated from protobuf enum <code>NON_BIDDABLE_CONVERSION_ACTION_NOT_ELIGIBLE_FOR_CUSTOM_GOAL = 7;</code>
     */
    const NON_BIDDABLE_CONVERSION_ACTION_NOT_ELIGIBLE_FOR_CUSTOM_GOAL = 7;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::INVALID_CONVERSION_ACTION => 'INVALID_CONVERSION_ACTION',
        self::CONVERSION_ACTION_NOT_ENABLED => 'CONVERSION_ACTION_NOT_ENABLED',
        self::CANNOT_REMOVE_LINKED_CUSTOM_CONVERSION_GOAL => 'CANNOT_REMOVE_LINKED_CUSTOM_CONVERSION_GOAL',
        self::CUSTOM_GOAL_DUPLICATE_NAME => 'CUSTOM_GOAL_DUPLICATE_NAME',
        self::DUPLICATE_CONVERSION_ACTION_LIST => 'DUPLICATE_CONVERSION_ACTION_LIST',
        self::NON_BIDDABLE_CONVERSION_ACTION_NOT_ELIGIBLE_FOR_CUSTOM_GOAL => 'NON_BIDDABLE_CONVERSION_ACTION_NOT_ELIGIBLE_FOR_CUSTOM_GOAL',
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
class_alias(CustomConversionGoalError::class, \Google\Ads\GoogleAds\V15\Errors\CustomConversionGoalErrorEnum_CustomConversionGoalError::class);

