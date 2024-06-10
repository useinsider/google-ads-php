<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/services/smart_campaign_setting_service.proto

namespace Google\Ads\GoogleAds\V15\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Details related to Smart campaigns that are not eligible to serve.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.services.SmartCampaignNotEligibleDetails</code>
 */
class SmartCampaignNotEligibleDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * The reason why the Smart campaign is not eligible to serve.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v15.enums.SmartCampaignNotEligibleReasonEnum.SmartCampaignNotEligibleReason not_eligible_reason = 1;</code>
     */
    protected $not_eligible_reason = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $not_eligible_reason
     *           The reason why the Smart campaign is not eligible to serve.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Services\SmartCampaignSettingService::initOnce();
        parent::__construct($data);
    }

    /**
     * The reason why the Smart campaign is not eligible to serve.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v15.enums.SmartCampaignNotEligibleReasonEnum.SmartCampaignNotEligibleReason not_eligible_reason = 1;</code>
     * @return int
     */
    public function getNotEligibleReason()
    {
        return isset($this->not_eligible_reason) ? $this->not_eligible_reason : 0;
    }

    public function hasNotEligibleReason()
    {
        return isset($this->not_eligible_reason);
    }

    public function clearNotEligibleReason()
    {
        unset($this->not_eligible_reason);
    }

    /**
     * The reason why the Smart campaign is not eligible to serve.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v15.enums.SmartCampaignNotEligibleReasonEnum.SmartCampaignNotEligibleReason not_eligible_reason = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNotEligibleReason($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\SmartCampaignNotEligibleReasonEnum\SmartCampaignNotEligibleReason::class);
        $this->not_eligible_reason = $var;

        return $this;
    }

}

