<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/enums/payment_mode.proto

namespace Google\Ads\GoogleAds\V17\Enums\PaymentModeEnum;

use UnexpectedValueException;

/**
 * Enum describing possible payment modes.
 *
 * Protobuf type <code>google.ads.googleads.v17.enums.PaymentModeEnum.PaymentMode</code>
 */
class PaymentMode
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
     * Pay per interaction.
     *
     * Generated from protobuf enum <code>CLICKS = 4;</code>
     */
    const CLICKS = 4;
    /**
     * Pay per conversion value. This mode is only supported by campaigns with
     * AdvertisingChannelType.HOTEL, BiddingStrategyType.COMMISSION, and
     * BudgetType.STANDARD.
     *
     * Generated from protobuf enum <code>CONVERSION_VALUE = 5;</code>
     */
    const CONVERSION_VALUE = 5;
    /**
     * Pay per conversion. This mode is only supported by campaigns with
     * AdvertisingChannelType.DISPLAY (excluding
     * AdvertisingChannelSubType.DISPLAY_GMAIL), BiddingStrategyType.TARGET_CPA,
     * and BudgetType.FIXED_CPA. The customer must also be eligible for this
     * mode. See Customer.eligibility_failure_reasons for details.
     *
     * Generated from protobuf enum <code>CONVERSIONS = 6;</code>
     */
    const CONVERSIONS = 6;
    /**
     * Pay per guest stay value. This mode is only supported by campaigns with
     * AdvertisingChannelType.HOTEL, BiddingStrategyType.COMMISSION, and
     * BudgetType.STANDARD.
     *
     * Generated from protobuf enum <code>GUEST_STAY = 7;</code>
     */
    const GUEST_STAY = 7;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CLICKS => 'CLICKS',
        self::CONVERSION_VALUE => 'CONVERSION_VALUE',
        self::CONVERSIONS => 'CONVERSIONS',
        self::GUEST_STAY => 'GUEST_STAY',
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
class_alias(PaymentMode::class, \Google\Ads\GoogleAds\V17\Enums\PaymentModeEnum_PaymentMode::class);

