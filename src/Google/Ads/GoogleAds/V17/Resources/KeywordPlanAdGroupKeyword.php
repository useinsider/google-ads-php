<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/keyword_plan_ad_group_keyword.proto

namespace Google\Ads\GoogleAds\V17\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Keyword Plan ad group keyword.
 * Max number of keyword plan keywords per plan: 10000.
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.resources.KeywordPlanAdGroupKeyword</code>
 */
class KeywordPlanAdGroupKeyword extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name of the Keyword Plan ad group keyword.
     * KeywordPlanAdGroupKeyword resource names have the form:
     * `customers/{customer_id}/keywordPlanAdGroupKeywords/{kp_ad_group_keyword_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The Keyword Plan ad group to which this keyword belongs.
     *
     * Generated from protobuf field <code>optional string keyword_plan_ad_group = 8 [(.google.api.resource_reference) = {</code>
     */
    protected $keyword_plan_ad_group = null;
    /**
     * Output only. The ID of the Keyword Plan keyword.
     *
     * Generated from protobuf field <code>optional int64 id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $id = null;
    /**
     * The keyword text.
     *
     * Generated from protobuf field <code>optional string text = 10;</code>
     */
    protected $text = null;
    /**
     * The keyword match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 5;</code>
     */
    protected $match_type = 0;
    /**
     * A keyword level max cpc bid in micros (for example, $1 = 1mm). The currency
     * is the same as the account currency code. This will override any CPC bid
     * set at the keyword plan ad group level. Not applicable for negative
     * keywords. (negative = true) This field is Optional.
     *
     * Generated from protobuf field <code>optional int64 cpc_bid_micros = 11;</code>
     */
    protected $cpc_bid_micros = null;
    /**
     * Immutable. If true, the keyword is negative.
     *
     * Generated from protobuf field <code>optional bool negative = 12 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $negative = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. The resource name of the Keyword Plan ad group keyword.
     *           KeywordPlanAdGroupKeyword resource names have the form:
     *           `customers/{customer_id}/keywordPlanAdGroupKeywords/{kp_ad_group_keyword_id}`
     *     @type string $keyword_plan_ad_group
     *           The Keyword Plan ad group to which this keyword belongs.
     *     @type int|string $id
     *           Output only. The ID of the Keyword Plan keyword.
     *     @type string $text
     *           The keyword text.
     *     @type int $match_type
     *           The keyword match type.
     *     @type int|string $cpc_bid_micros
     *           A keyword level max cpc bid in micros (for example, $1 = 1mm). The currency
     *           is the same as the account currency code. This will override any CPC bid
     *           set at the keyword plan ad group level. Not applicable for negative
     *           keywords. (negative = true) This field is Optional.
     *     @type bool $negative
     *           Immutable. If true, the keyword is negative.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Resources\KeywordPlanAdGroupKeyword::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name of the Keyword Plan ad group keyword.
     * KeywordPlanAdGroupKeyword resource names have the form:
     * `customers/{customer_id}/keywordPlanAdGroupKeywords/{kp_ad_group_keyword_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. The resource name of the Keyword Plan ad group keyword.
     * KeywordPlanAdGroupKeyword resource names have the form:
     * `customers/{customer_id}/keywordPlanAdGroupKeywords/{kp_ad_group_keyword_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
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
     * The Keyword Plan ad group to which this keyword belongs.
     *
     * Generated from protobuf field <code>optional string keyword_plan_ad_group = 8 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKeywordPlanAdGroup()
    {
        return isset($this->keyword_plan_ad_group) ? $this->keyword_plan_ad_group : '';
    }

    public function hasKeywordPlanAdGroup()
    {
        return isset($this->keyword_plan_ad_group);
    }

    public function clearKeywordPlanAdGroup()
    {
        unset($this->keyword_plan_ad_group);
    }

    /**
     * The Keyword Plan ad group to which this keyword belongs.
     *
     * Generated from protobuf field <code>optional string keyword_plan_ad_group = 8 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKeywordPlanAdGroup($var)
    {
        GPBUtil::checkString($var, True);
        $this->keyword_plan_ad_group = $var;

        return $this;
    }

    /**
     * Output only. The ID of the Keyword Plan keyword.
     *
     * Generated from protobuf field <code>optional int64 id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Output only. The ID of the Keyword Plan keyword.
     *
     * Generated from protobuf field <code>optional int64 id = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkInt64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * The keyword text.
     *
     * Generated from protobuf field <code>optional string text = 10;</code>
     * @return string
     */
    public function getText()
    {
        return isset($this->text) ? $this->text : '';
    }

    public function hasText()
    {
        return isset($this->text);
    }

    public function clearText()
    {
        unset($this->text);
    }

    /**
     * The keyword text.
     *
     * Generated from protobuf field <code>optional string text = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->text = $var;

        return $this;
    }

    /**
     * The keyword match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 5;</code>
     * @return int
     */
    public function getMatchType()
    {
        return $this->match_type;
    }

    /**
     * The keyword match type.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.KeywordMatchTypeEnum.KeywordMatchType match_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMatchType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\KeywordMatchTypeEnum\KeywordMatchType::class);
        $this->match_type = $var;

        return $this;
    }

    /**
     * A keyword level max cpc bid in micros (for example, $1 = 1mm). The currency
     * is the same as the account currency code. This will override any CPC bid
     * set at the keyword plan ad group level. Not applicable for negative
     * keywords. (negative = true) This field is Optional.
     *
     * Generated from protobuf field <code>optional int64 cpc_bid_micros = 11;</code>
     * @return int|string
     */
    public function getCpcBidMicros()
    {
        return isset($this->cpc_bid_micros) ? $this->cpc_bid_micros : 0;
    }

    public function hasCpcBidMicros()
    {
        return isset($this->cpc_bid_micros);
    }

    public function clearCpcBidMicros()
    {
        unset($this->cpc_bid_micros);
    }

    /**
     * A keyword level max cpc bid in micros (for example, $1 = 1mm). The currency
     * is the same as the account currency code. This will override any CPC bid
     * set at the keyword plan ad group level. Not applicable for negative
     * keywords. (negative = true) This field is Optional.
     *
     * Generated from protobuf field <code>optional int64 cpc_bid_micros = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCpcBidMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->cpc_bid_micros = $var;

        return $this;
    }

    /**
     * Immutable. If true, the keyword is negative.
     *
     * Generated from protobuf field <code>optional bool negative = 12 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return bool
     */
    public function getNegative()
    {
        return isset($this->negative) ? $this->negative : false;
    }

    public function hasNegative()
    {
        return isset($this->negative);
    }

    public function clearNegative()
    {
        unset($this->negative);
    }

    /**
     * Immutable. If true, the keyword is negative.
     *
     * Generated from protobuf field <code>optional bool negative = 12 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param bool $var
     * @return $this
     */
    public function setNegative($var)
    {
        GPBUtil::checkBool($var);
        $this->negative = $var;

        return $this;
    }

}

