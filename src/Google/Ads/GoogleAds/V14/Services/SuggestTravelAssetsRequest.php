<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v14/services/travel_asset_suggestion_service.proto

namespace Google\Ads\GoogleAds\V14\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 * [TravelAssetSuggestionService.SuggestTravelAssets][google.ads.googleads.v14.services.TravelAssetSuggestionService.SuggestTravelAssets].
 *
 * Generated from protobuf message <code>google.ads.googleads.v14.services.SuggestTravelAssetsRequest</code>
 */
class SuggestTravelAssetsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The language specifications in BCP 47 format (for example, en-US,
     * zh-CN, etc.) for the asset suggestions. Text will be in this language.
     * Usually matches one of the campaign target languages.
     *
     * Generated from protobuf field <code>string language_option = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $language_option = '';
    /**
     * The Google Maps Place IDs of hotels for which assets are requested. See
     * https://developers.google.com/places/web-service/place-id for more
     * information.
     *
     * Generated from protobuf field <code>repeated string place_ids = 4;</code>
     */
    private $place_ids;

    /**
     * @param string $customerId     Required. The ID of the customer.
     * @param string $languageOption Required. The language specifications in BCP 47 format (for example, en-US,
     *                               zh-CN, etc.) for the asset suggestions. Text will be in this language.
     *                               Usually matches one of the campaign target languages.
     *
     * @return \Google\Ads\GoogleAds\V14\Services\SuggestTravelAssetsRequest
     *
     * @experimental
     */
    public static function build(string $customerId, string $languageOption): self
    {
        return (new self())
            ->setCustomerId($customerId)
            ->setLanguageOption($languageOption);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The ID of the customer.
     *     @type string $language_option
     *           Required. The language specifications in BCP 47 format (for example, en-US,
     *           zh-CN, etc.) for the asset suggestions. Text will be in this language.
     *           Usually matches one of the campaign target languages.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $place_ids
     *           The Google Maps Place IDs of hotels for which assets are requested. See
     *           https://developers.google.com/places/web-service/place-id for more
     *           information.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V14\Services\TravelAssetSuggestionService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The ID of the customer.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. The language specifications in BCP 47 format (for example, en-US,
     * zh-CN, etc.) for the asset suggestions. Text will be in this language.
     * Usually matches one of the campaign target languages.
     *
     * Generated from protobuf field <code>string language_option = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getLanguageOption()
    {
        return $this->language_option;
    }

    /**
     * Required. The language specifications in BCP 47 format (for example, en-US,
     * zh-CN, etc.) for the asset suggestions. Text will be in this language.
     * Usually matches one of the campaign target languages.
     *
     * Generated from protobuf field <code>string language_option = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageOption($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_option = $var;

        return $this;
    }

    /**
     * The Google Maps Place IDs of hotels for which assets are requested. See
     * https://developers.google.com/places/web-service/place-id for more
     * information.
     *
     * Generated from protobuf field <code>repeated string place_ids = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPlaceIds()
    {
        return $this->place_ids;
    }

    /**
     * The Google Maps Place IDs of hotels for which assets are requested. See
     * https://developers.google.com/places/web-service/place-id for more
     * information.
     *
     * Generated from protobuf field <code>repeated string place_ids = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPlaceIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->place_ids = $arr;

        return $this;
    }

}

