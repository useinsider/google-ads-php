<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/errors/asset_link_error.proto

namespace Google\Ads\GoogleAds\V15\Errors\AssetLinkErrorEnum;

use UnexpectedValueException;

/**
 * Enum describing possible asset link errors.
 *
 * Protobuf type <code>google.ads.googleads.v15.errors.AssetLinkErrorEnum.AssetLinkError</code>
 */
class AssetLinkError
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
     * Pinning is not supported for the given asset link field.
     *
     * Generated from protobuf enum <code>PINNING_UNSUPPORTED = 2;</code>
     */
    const PINNING_UNSUPPORTED = 2;
    /**
     * The given field type is not supported to be added directly through asset
     * links.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_FIELD_TYPE = 3;</code>
     */
    const UNSUPPORTED_FIELD_TYPE = 3;
    /**
     * The given asset's type and the specified field type are incompatible.
     *
     * Generated from protobuf enum <code>FIELD_TYPE_INCOMPATIBLE_WITH_ASSET_TYPE = 4;</code>
     */
    const FIELD_TYPE_INCOMPATIBLE_WITH_ASSET_TYPE = 4;
    /**
     * The specified field type is incompatible with the given campaign type.
     *
     * Generated from protobuf enum <code>FIELD_TYPE_INCOMPATIBLE_WITH_CAMPAIGN_TYPE = 5;</code>
     */
    const FIELD_TYPE_INCOMPATIBLE_WITH_CAMPAIGN_TYPE = 5;
    /**
     * The campaign advertising channel type cannot be associated with the given
     * asset due to channel-based restrictions on the asset's fields.
     *
     * Generated from protobuf enum <code>INCOMPATIBLE_ADVERTISING_CHANNEL_TYPE = 6;</code>
     */
    const INCOMPATIBLE_ADVERTISING_CHANNEL_TYPE = 6;
    /**
     * The image asset provided is not within the dimension constraints
     * specified for the submitted asset field.
     *
     * Generated from protobuf enum <code>IMAGE_NOT_WITHIN_SPECIFIED_DIMENSION_RANGE = 7;</code>
     */
    const IMAGE_NOT_WITHIN_SPECIFIED_DIMENSION_RANGE = 7;
    /**
     * The pinned field is not valid for the submitted asset field.
     *
     * Generated from protobuf enum <code>INVALID_PINNED_FIELD = 8;</code>
     */
    const INVALID_PINNED_FIELD = 8;
    /**
     * The media bundle asset provided is too large for the submitted asset
     * field.
     *
     * Generated from protobuf enum <code>MEDIA_BUNDLE_ASSET_FILE_SIZE_TOO_LARGE = 9;</code>
     */
    const MEDIA_BUNDLE_ASSET_FILE_SIZE_TOO_LARGE = 9;
    /**
     * Not enough assets are available for use with other fields since other
     * assets are pinned to specific fields.
     *
     * Generated from protobuf enum <code>NOT_ENOUGH_AVAILABLE_ASSET_LINKS_FOR_VALID_COMBINATION = 10;</code>
     */
    const NOT_ENOUGH_AVAILABLE_ASSET_LINKS_FOR_VALID_COMBINATION = 10;
    /**
     * Not enough assets with fallback are available. When validating the
     * minimum number of assets, assets without fallback (for example, assets
     * that contain location tag without default value "{LOCATION(City)}") will
     * not be counted.
     *
     * Generated from protobuf enum <code>NOT_ENOUGH_AVAILABLE_ASSET_LINKS_WITH_FALLBACK = 11;</code>
     */
    const NOT_ENOUGH_AVAILABLE_ASSET_LINKS_WITH_FALLBACK = 11;
    /**
     * This is a combination of the
     * NOT_ENOUGH_AVAILABLE_ASSET_LINKS_FOR_VALID_COMBINATION and
     * NOT_ENOUGH_AVAILABLE_ASSET_LINKS_WITH_FALLBACK errors. Not enough assets
     * with fallback are available since some assets are pinned.
     *
     * Generated from protobuf enum <code>NOT_ENOUGH_AVAILABLE_ASSET_LINKS_WITH_FALLBACK_FOR_VALID_COMBINATION = 12;</code>
     */
    const NOT_ENOUGH_AVAILABLE_ASSET_LINKS_WITH_FALLBACK_FOR_VALID_COMBINATION = 12;
    /**
     * The YouTube video referenced in the provided asset has been removed.
     *
     * Generated from protobuf enum <code>YOUTUBE_VIDEO_REMOVED = 13;</code>
     */
    const YOUTUBE_VIDEO_REMOVED = 13;
    /**
     * The YouTube video referenced in the provided asset is too long for the
     * field submitted.
     *
     * Generated from protobuf enum <code>YOUTUBE_VIDEO_TOO_LONG = 14;</code>
     */
    const YOUTUBE_VIDEO_TOO_LONG = 14;
    /**
     * The YouTube video referenced in the provided asset is too short for the
     * field submitted.
     *
     * Generated from protobuf enum <code>YOUTUBE_VIDEO_TOO_SHORT = 15;</code>
     */
    const YOUTUBE_VIDEO_TOO_SHORT = 15;
    /**
     * The specified field type is excluded for given campaign or ad group.
     *
     * Generated from protobuf enum <code>EXCLUDED_PARENT_FIELD_TYPE = 16;</code>
     */
    const EXCLUDED_PARENT_FIELD_TYPE = 16;
    /**
     * The status is invalid for the operation specified.
     *
     * Generated from protobuf enum <code>INVALID_STATUS = 17;</code>
     */
    const INVALID_STATUS = 17;
    /**
     * The YouTube video referenced in the provided asset has unknown duration.
     * This might be the case for a livestream video or a video being currently
     * uploaded to YouTube. In both cases, the video duration should eventually
     * get resolved.
     *
     * Generated from protobuf enum <code>YOUTUBE_VIDEO_DURATION_NOT_DEFINED = 18;</code>
     */
    const YOUTUBE_VIDEO_DURATION_NOT_DEFINED = 18;
    /**
     * User cannot create automatically created links.
     *
     * Generated from protobuf enum <code>CANNOT_CREATE_AUTOMATICALLY_CREATED_LINKS = 19;</code>
     */
    const CANNOT_CREATE_AUTOMATICALLY_CREATED_LINKS = 19;
    /**
     * Advertiser links cannot link to automatically created asset.
     *
     * Generated from protobuf enum <code>CANNOT_LINK_TO_AUTOMATICALLY_CREATED_ASSET = 20;</code>
     */
    const CANNOT_LINK_TO_AUTOMATICALLY_CREATED_ASSET = 20;
    /**
     * Automatically created links cannot be changed into advertiser links or
     * the reverse.
     *
     * Generated from protobuf enum <code>CANNOT_MODIFY_ASSET_LINK_SOURCE = 21;</code>
     */
    const CANNOT_MODIFY_ASSET_LINK_SOURCE = 21;
    /**
     * Lead Form asset with Location answer type can't be linked to the
     * Customer/Campaign because there are no Location assets.
     *
     * Generated from protobuf enum <code>CANNOT_LINK_LOCATION_LEAD_FORM_WITHOUT_LOCATION_ASSET = 22;</code>
     */
    const CANNOT_LINK_LOCATION_LEAD_FORM_WITHOUT_LOCATION_ASSET = 22;
    /**
     * Customer is not verified.
     *
     * Generated from protobuf enum <code>CUSTOMER_NOT_VERIFIED = 23;</code>
     */
    const CUSTOMER_NOT_VERIFIED = 23;
    /**
     * Call to action value is not supported.
     *
     * Generated from protobuf enum <code>UNSUPPORTED_CALL_TO_ACTION = 24;</code>
     */
    const UNSUPPORTED_CALL_TO_ACTION = 24;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::PINNING_UNSUPPORTED => 'PINNING_UNSUPPORTED',
        self::UNSUPPORTED_FIELD_TYPE => 'UNSUPPORTED_FIELD_TYPE',
        self::FIELD_TYPE_INCOMPATIBLE_WITH_ASSET_TYPE => 'FIELD_TYPE_INCOMPATIBLE_WITH_ASSET_TYPE',
        self::FIELD_TYPE_INCOMPATIBLE_WITH_CAMPAIGN_TYPE => 'FIELD_TYPE_INCOMPATIBLE_WITH_CAMPAIGN_TYPE',
        self::INCOMPATIBLE_ADVERTISING_CHANNEL_TYPE => 'INCOMPATIBLE_ADVERTISING_CHANNEL_TYPE',
        self::IMAGE_NOT_WITHIN_SPECIFIED_DIMENSION_RANGE => 'IMAGE_NOT_WITHIN_SPECIFIED_DIMENSION_RANGE',
        self::INVALID_PINNED_FIELD => 'INVALID_PINNED_FIELD',
        self::MEDIA_BUNDLE_ASSET_FILE_SIZE_TOO_LARGE => 'MEDIA_BUNDLE_ASSET_FILE_SIZE_TOO_LARGE',
        self::NOT_ENOUGH_AVAILABLE_ASSET_LINKS_FOR_VALID_COMBINATION => 'NOT_ENOUGH_AVAILABLE_ASSET_LINKS_FOR_VALID_COMBINATION',
        self::NOT_ENOUGH_AVAILABLE_ASSET_LINKS_WITH_FALLBACK => 'NOT_ENOUGH_AVAILABLE_ASSET_LINKS_WITH_FALLBACK',
        self::NOT_ENOUGH_AVAILABLE_ASSET_LINKS_WITH_FALLBACK_FOR_VALID_COMBINATION => 'NOT_ENOUGH_AVAILABLE_ASSET_LINKS_WITH_FALLBACK_FOR_VALID_COMBINATION',
        self::YOUTUBE_VIDEO_REMOVED => 'YOUTUBE_VIDEO_REMOVED',
        self::YOUTUBE_VIDEO_TOO_LONG => 'YOUTUBE_VIDEO_TOO_LONG',
        self::YOUTUBE_VIDEO_TOO_SHORT => 'YOUTUBE_VIDEO_TOO_SHORT',
        self::EXCLUDED_PARENT_FIELD_TYPE => 'EXCLUDED_PARENT_FIELD_TYPE',
        self::INVALID_STATUS => 'INVALID_STATUS',
        self::YOUTUBE_VIDEO_DURATION_NOT_DEFINED => 'YOUTUBE_VIDEO_DURATION_NOT_DEFINED',
        self::CANNOT_CREATE_AUTOMATICALLY_CREATED_LINKS => 'CANNOT_CREATE_AUTOMATICALLY_CREATED_LINKS',
        self::CANNOT_LINK_TO_AUTOMATICALLY_CREATED_ASSET => 'CANNOT_LINK_TO_AUTOMATICALLY_CREATED_ASSET',
        self::CANNOT_MODIFY_ASSET_LINK_SOURCE => 'CANNOT_MODIFY_ASSET_LINK_SOURCE',
        self::CANNOT_LINK_LOCATION_LEAD_FORM_WITHOUT_LOCATION_ASSET => 'CANNOT_LINK_LOCATION_LEAD_FORM_WITHOUT_LOCATION_ASSET',
        self::CUSTOMER_NOT_VERIFIED => 'CUSTOMER_NOT_VERIFIED',
        self::UNSUPPORTED_CALL_TO_ACTION => 'UNSUPPORTED_CALL_TO_ACTION',
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
class_alias(AssetLinkError::class, \Google\Ads\GoogleAds\V15\Errors\AssetLinkErrorEnum_AssetLinkError::class);

