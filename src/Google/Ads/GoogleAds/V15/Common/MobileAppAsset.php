<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/common/asset_types.proto

namespace Google\Ads\GoogleAds\V15\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An asset representing a mobile app.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.common.MobileAppAsset</code>
 */
class MobileAppAsset extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A string that uniquely identifies a mobile application. It should
     * just contain the platform native id, like "com.android.ebay" for Android or
     * "12345689" for iOS.
     *
     * Generated from protobuf field <code>string app_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $app_id = '';
    /**
     * Required. The application store that distributes this specific app.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.MobileAppVendorEnum.MobileAppVendor app_store = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $app_store = 0;
    /**
     * Required. The visible text displayed when the link is rendered in an ad.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>string link_text = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $link_text = '';
    /**
     * Start date of when this asset is effective and can begin serving, in
     * yyyy-MM-dd format.
     *
     * Generated from protobuf field <code>string start_date = 4;</code>
     */
    protected $start_date = '';
    /**
     * Last date of when this asset is effective and still serving, in yyyy-MM-dd
     * format.
     *
     * Generated from protobuf field <code>string end_date = 5;</code>
     */
    protected $end_date = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $app_id
     *           Required. A string that uniquely identifies a mobile application. It should
     *           just contain the platform native id, like "com.android.ebay" for Android or
     *           "12345689" for iOS.
     *     @type int $app_store
     *           Required. The application store that distributes this specific app.
     *     @type string $link_text
     *           Required. The visible text displayed when the link is rendered in an ad.
     *           The length of this string should be between 1 and 25, inclusive.
     *     @type string $start_date
     *           Start date of when this asset is effective and can begin serving, in
     *           yyyy-MM-dd format.
     *     @type string $end_date
     *           Last date of when this asset is effective and still serving, in yyyy-MM-dd
     *           format.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Common\AssetTypes::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A string that uniquely identifies a mobile application. It should
     * just contain the platform native id, like "com.android.ebay" for Android or
     * "12345689" for iOS.
     *
     * Generated from protobuf field <code>string app_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getAppId()
    {
        return $this->app_id;
    }

    /**
     * Required. A string that uniquely identifies a mobile application. It should
     * just contain the platform native id, like "com.android.ebay" for Android or
     * "12345689" for iOS.
     *
     * Generated from protobuf field <code>string app_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setAppId($var)
    {
        GPBUtil::checkString($var, True);
        $this->app_id = $var;

        return $this;
    }

    /**
     * Required. The application store that distributes this specific app.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.MobileAppVendorEnum.MobileAppVendor app_store = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getAppStore()
    {
        return $this->app_store;
    }

    /**
     * Required. The application store that distributes this specific app.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.enums.MobileAppVendorEnum.MobileAppVendor app_store = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setAppStore($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Enums\MobileAppVendorEnum\MobileAppVendor::class);
        $this->app_store = $var;

        return $this;
    }

    /**
     * Required. The visible text displayed when the link is rendered in an ad.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>string link_text = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getLinkText()
    {
        return $this->link_text;
    }

    /**
     * Required. The visible text displayed when the link is rendered in an ad.
     * The length of this string should be between 1 and 25, inclusive.
     *
     * Generated from protobuf field <code>string link_text = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setLinkText($var)
    {
        GPBUtil::checkString($var, True);
        $this->link_text = $var;

        return $this;
    }

    /**
     * Start date of when this asset is effective and can begin serving, in
     * yyyy-MM-dd format.
     *
     * Generated from protobuf field <code>string start_date = 4;</code>
     * @return string
     */
    public function getStartDate()
    {
        return $this->start_date;
    }

    /**
     * Start date of when this asset is effective and can begin serving, in
     * yyyy-MM-dd format.
     *
     * Generated from protobuf field <code>string start_date = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setStartDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->start_date = $var;

        return $this;
    }

    /**
     * Last date of when this asset is effective and still serving, in yyyy-MM-dd
     * format.
     *
     * Generated from protobuf field <code>string end_date = 5;</code>
     * @return string
     */
    public function getEndDate()
    {
        return $this->end_date;
    }

    /**
     * Last date of when this asset is effective and still serving, in yyyy-MM-dd
     * format.
     *
     * Generated from protobuf field <code>string end_date = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setEndDate($var)
    {
        GPBUtil::checkString($var, True);
        $this->end_date = $var;

        return $this;
    }

}

