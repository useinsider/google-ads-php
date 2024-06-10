<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/async_action_status.proto

namespace Google\Ads\GoogleAds\V13\Enums\AsyncActionStatusEnum;

use UnexpectedValueException;

/**
 * The async action status of the experiment.
 *
 * Protobuf type <code>google.ads.googleads.v13.enums.AsyncActionStatusEnum.AsyncActionStatus</code>
 */
class AsyncActionStatus
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The value is unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Action has not started.
     *
     * Generated from protobuf enum <code>NOT_STARTED = 2;</code>
     */
    const NOT_STARTED = 2;
    /**
     * Action is in progress.
     *
     * Generated from protobuf enum <code>IN_PROGRESS = 3;</code>
     */
    const IN_PROGRESS = 3;
    /**
     * Action has completed successfully.
     *
     * Generated from protobuf enum <code>COMPLETED = 4;</code>
     */
    const COMPLETED = 4;
    /**
     * Action has failed.
     *
     * Generated from protobuf enum <code>FAILED = 5;</code>
     */
    const FAILED = 5;
    /**
     * Action has completed successfully with warnings.
     *
     * Generated from protobuf enum <code>COMPLETED_WITH_WARNING = 6;</code>
     */
    const COMPLETED_WITH_WARNING = 6;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::NOT_STARTED => 'NOT_STARTED',
        self::IN_PROGRESS => 'IN_PROGRESS',
        self::COMPLETED => 'COMPLETED',
        self::FAILED => 'FAILED',
        self::COMPLETED_WITH_WARNING => 'COMPLETED_WITH_WARNING',
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
class_alias(AsyncActionStatus::class, \Google\Ads\GoogleAds\V13\Enums\AsyncActionStatusEnum_AsyncActionStatus::class);

