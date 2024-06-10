<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/enums/local_services_verification_status.proto

namespace Google\Ads\GoogleAds\V15\Enums\LocalServicesVerificationStatusEnum;

use UnexpectedValueException;

/**
 * Enum describing status of a particular Local Services Ads verification
 * category.
 *
 * Protobuf type <code>google.ads.googleads.v15.enums.LocalServicesVerificationStatusEnum.LocalServicesVerificationStatus</code>
 */
class LocalServicesVerificationStatus
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Unknown verification status.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Verification has started, but has not finished.
     *
     * Generated from protobuf enum <code>NEEDS_REVIEW = 2;</code>
     */
    const NEEDS_REVIEW = 2;
    /**
     * Verification has failed.
     *
     * Generated from protobuf enum <code>FAILED = 3;</code>
     */
    const FAILED = 3;
    /**
     * Verification has passed.
     *
     * Generated from protobuf enum <code>PASSED = 4;</code>
     */
    const PASSED = 4;
    /**
     * Verification is not applicable.
     *
     * Generated from protobuf enum <code>NOT_APPLICABLE = 5;</code>
     */
    const NOT_APPLICABLE = 5;
    /**
     * Verification is required but pending submission.
     *
     * Generated from protobuf enum <code>NO_SUBMISSION = 6;</code>
     */
    const NO_SUBMISSION = 6;
    /**
     * Not all required verification has been submitted.
     *
     * Generated from protobuf enum <code>PARTIAL_SUBMISSION = 7;</code>
     */
    const PARTIAL_SUBMISSION = 7;
    /**
     * Verification needs review by Local Services Ads Ops Specialist.
     *
     * Generated from protobuf enum <code>PENDING_ESCALATION = 8;</code>
     */
    const PENDING_ESCALATION = 8;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::NEEDS_REVIEW => 'NEEDS_REVIEW',
        self::FAILED => 'FAILED',
        self::PASSED => 'PASSED',
        self::NOT_APPLICABLE => 'NOT_APPLICABLE',
        self::NO_SUBMISSION => 'NO_SUBMISSION',
        self::PARTIAL_SUBMISSION => 'PARTIAL_SUBMISSION',
        self::PENDING_ESCALATION => 'PENDING_ESCALATION',
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
class_alias(LocalServicesVerificationStatus::class, \Google\Ads\GoogleAds\V15\Enums\LocalServicesVerificationStatusEnum_LocalServicesVerificationStatus::class);

