<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/conversion_value_rule_service.proto

namespace Google\Ads\GoogleAds\V16\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the conversion value rule mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.services.MutateConversionValueRuleResult</code>
 */
class MutateConversionValueRuleResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The mutated conversion value rule with only mutable fields after
     * mutate. The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.ConversionValueRule conversion_value_rule = 2;</code>
     */
    protected $conversion_value_rule = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V16\Resources\ConversionValueRule $conversion_value_rule
     *           The mutated conversion value rule with only mutable fields after
     *           mutate. The field will only be returned when response_content_type is set
     *           to "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Services\ConversionValueRuleService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The mutated conversion value rule with only mutable fields after
     * mutate. The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.ConversionValueRule conversion_value_rule = 2;</code>
     * @return \Google\Ads\GoogleAds\V16\Resources\ConversionValueRule|null
     */
    public function getConversionValueRule()
    {
        return $this->conversion_value_rule;
    }

    public function hasConversionValueRule()
    {
        return isset($this->conversion_value_rule);
    }

    public function clearConversionValueRule()
    {
        unset($this->conversion_value_rule);
    }

    /**
     * The mutated conversion value rule with only mutable fields after
     * mutate. The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.ConversionValueRule conversion_value_rule = 2;</code>
     * @param \Google\Ads\GoogleAds\V16\Resources\ConversionValueRule $var
     * @return $this
     */
    public function setConversionValueRule($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V16\Resources\ConversionValueRule::class);
        $this->conversion_value_rule = $var;

        return $this;
    }

}

