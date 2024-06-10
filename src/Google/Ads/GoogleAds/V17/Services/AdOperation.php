<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/services/ad_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single update operation on an ad.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.AdOperation</code>
 */
class AdOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    protected $update_mask = null;
    /**
     * Configuration for how policies are validated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.PolicyValidationParameter policy_validation_parameter = 3;</code>
     */
    protected $policy_validation_parameter = null;
    protected $operation;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           FieldMask that determines which resource fields are modified in an update.
     *     @type \Google\Ads\GoogleAds\V17\Common\PolicyValidationParameter $policy_validation_parameter
     *           Configuration for how policies are validated.
     *     @type \Google\Ads\GoogleAds\V17\Resources\Ad $update
     *           Update operation: The ad is expected to have a valid resource name
     *           in this format:
     *           `customers/{customer_id}/ads/{ad_id}`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\AdService::initOnce();
        parent::__construct($data);
    }

    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * FieldMask that determines which resource fields are modified in an update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Configuration for how policies are validated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.PolicyValidationParameter policy_validation_parameter = 3;</code>
     * @return \Google\Ads\GoogleAds\V17\Common\PolicyValidationParameter|null
     */
    public function getPolicyValidationParameter()
    {
        return $this->policy_validation_parameter;
    }

    public function hasPolicyValidationParameter()
    {
        return isset($this->policy_validation_parameter);
    }

    public function clearPolicyValidationParameter()
    {
        unset($this->policy_validation_parameter);
    }

    /**
     * Configuration for how policies are validated.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.common.PolicyValidationParameter policy_validation_parameter = 3;</code>
     * @param \Google\Ads\GoogleAds\V17\Common\PolicyValidationParameter $var
     * @return $this
     */
    public function setPolicyValidationParameter($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Common\PolicyValidationParameter::class);
        $this->policy_validation_parameter = $var;

        return $this;
    }

    /**
     * Update operation: The ad is expected to have a valid resource name
     * in this format:
     * `customers/{customer_id}/ads/{ad_id}`
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Ad update = 1;</code>
     * @return \Google\Ads\GoogleAds\V17\Resources\Ad|null
     */
    public function getUpdate()
    {
        return $this->readOneof(1);
    }

    public function hasUpdate()
    {
        return $this->hasOneof(1);
    }

    /**
     * Update operation: The ad is expected to have a valid resource name
     * in this format:
     * `customers/{customer_id}/ads/{ad_id}`
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.resources.Ad update = 1;</code>
     * @param \Google\Ads\GoogleAds\V17\Resources\Ad $var
     * @return $this
     */
    public function setUpdate($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V17\Resources\Ad::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
        return $this->whichOneof("operation");
    }

}

