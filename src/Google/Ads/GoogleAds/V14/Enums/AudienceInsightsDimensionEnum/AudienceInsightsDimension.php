<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/enums/audience_insights_dimension.proto

namespace Google\Ads\GoogleAds\V14\Enums\AudienceInsightsDimensionEnum;

use UnexpectedValueException;

/**
 * Possible dimensions for use in generating insights.
 *
 * Protobuf type <code>google.ads.googleads.v14.enums.AudienceInsightsDimensionEnum.AudienceInsightsDimension</code>
 */
class AudienceInsightsDimension
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
     * A Product & Service category.
     *
     * Generated from protobuf enum <code>CATEGORY = 2;</code>
     */
    const CATEGORY = 2;
    /**
     * A Knowledge Graph entity.
     *
     * Generated from protobuf enum <code>KNOWLEDGE_GRAPH = 3;</code>
     */
    const KNOWLEDGE_GRAPH = 3;
    /**
     * A country, represented by a geo target.
     *
     * Generated from protobuf enum <code>GEO_TARGET_COUNTRY = 4;</code>
     */
    const GEO_TARGET_COUNTRY = 4;
    /**
     * A geographic location within a country.
     *
     * Generated from protobuf enum <code>SUB_COUNTRY_LOCATION = 5;</code>
     */
    const SUB_COUNTRY_LOCATION = 5;
    /**
     * A YouTube channel.
     *
     * Generated from protobuf enum <code>YOUTUBE_CHANNEL = 6;</code>
     */
    const YOUTUBE_CHANNEL = 6;
    /**
     * A YouTube Dynamic Lineup.
     *
     * Generated from protobuf enum <code>YOUTUBE_DYNAMIC_LINEUP = 7;</code>
     */
    const YOUTUBE_DYNAMIC_LINEUP = 7;
    /**
     * An Affinity UserInterest.
     *
     * Generated from protobuf enum <code>AFFINITY_USER_INTEREST = 8;</code>
     */
    const AFFINITY_USER_INTEREST = 8;
    /**
     * An In-Market UserInterest.
     *
     * Generated from protobuf enum <code>IN_MARKET_USER_INTEREST = 9;</code>
     */
    const IN_MARKET_USER_INTEREST = 9;
    /**
     * A Parental Status value (parent, or not a parent).
     *
     * Generated from protobuf enum <code>PARENTAL_STATUS = 10;</code>
     */
    const PARENTAL_STATUS = 10;
    /**
     * A household income percentile range.
     *
     * Generated from protobuf enum <code>INCOME_RANGE = 11;</code>
     */
    const INCOME_RANGE = 11;
    /**
     * An age range.
     *
     * Generated from protobuf enum <code>AGE_RANGE = 12;</code>
     */
    const AGE_RANGE = 12;
    /**
     * A gender.
     *
     * Generated from protobuf enum <code>GENDER = 13;</code>
     */
    const GENDER = 13;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::CATEGORY => 'CATEGORY',
        self::KNOWLEDGE_GRAPH => 'KNOWLEDGE_GRAPH',
        self::GEO_TARGET_COUNTRY => 'GEO_TARGET_COUNTRY',
        self::SUB_COUNTRY_LOCATION => 'SUB_COUNTRY_LOCATION',
        self::YOUTUBE_CHANNEL => 'YOUTUBE_CHANNEL',
        self::YOUTUBE_DYNAMIC_LINEUP => 'YOUTUBE_DYNAMIC_LINEUP',
        self::AFFINITY_USER_INTEREST => 'AFFINITY_USER_INTEREST',
        self::IN_MARKET_USER_INTEREST => 'IN_MARKET_USER_INTEREST',
        self::PARENTAL_STATUS => 'PARENTAL_STATUS',
        self::INCOME_RANGE => 'INCOME_RANGE',
        self::AGE_RANGE => 'AGE_RANGE',
        self::GENDER => 'GENDER',
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
class_alias(AudienceInsightsDimension::class, \Google\Ads\GoogleAds\V14\Enums\AudienceInsightsDimensionEnum_AudienceInsightsDimension::class);

