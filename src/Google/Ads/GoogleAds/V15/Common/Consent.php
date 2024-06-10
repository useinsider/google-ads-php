<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/common/consent.proto

namespace Google\Ads\GoogleAds\V15\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Consent
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.common.Consent</code>
 */
class Consent extends \Google\Protobuf\Internal\Message
{
    /**
     * This represents consent for ad user data.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.ConsentStatusEnum.ConsentStatus ad_user_data = 1;</code>
     */
    protected $ad_user_data = 0;
    /**
     * This represents consent for ad personalization.
     * This can only be set for OfflineUserDataJobService and UserDataService.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.ConsentStatusEnum.ConsentStatus ad_personalization = 2;</code>
     */
    protected $ad_personalization = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $ad_user_data
     *           This represents consent for ad user data.
     *     @type int $ad_personalization
     *           This represents consent for ad personalization.
     *           This can only be set for OfflineUserDataJobService and UserDataService.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Common\Consent::initOnce();
        parent::__construct($data);
    }

    /**
     * This represents consent for ad user data.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.ConsentStatusEnum.ConsentStatus ad_user_data = 1;</code>
     * @return int
     */
    public function getAdUserData()
    {
        return $this->ad_user_data;
    }

    /**
     * This represents consent for ad user data.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.ConsentStatusEnum.ConsentStatus ad_user_data = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setAdUserData($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\ConsentStatusEnum\ConsentStatus::class);
        $this->ad_user_data = $var;

        return $this;
    }

    /**
     * This represents consent for ad personalization.
     * This can only be set for OfflineUserDataJobService and UserDataService.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.ConsentStatusEnum.ConsentStatus ad_personalization = 2;</code>
     * @return int
     */
    public function getAdPersonalization()
    {
        return $this->ad_personalization;
    }

    /**
     * This represents consent for ad personalization.
     * This can only be set for OfflineUserDataJobService and UserDataService.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.ConsentStatusEnum.ConsentStatus ad_personalization = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAdPersonalization($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\ConsentStatusEnum\ConsentStatus::class);
        $this->ad_personalization = $var;

        return $this;
    }

}

