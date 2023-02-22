<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/common/keyword_plan_common.proto

namespace Google\Ads\GoogleAds\V13\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Historical metrics options.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.common.HistoricalMetricsOptions</code>
 */
class HistoricalMetricsOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * The year month range for historical metrics. If not specified the searches
     * will be returned for past 12 months.
     * Searches data is available for the past 4 years. If the search volume is
     * not available for the entire year_month_range provided, the subset of the
     * year month range for which search volume is available will be returned.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v13.common.YearMonthRange year_month_range = 1;</code>
     */
    protected $year_month_range = null;
    /**
     * Indicates whether to include average cost per click value.
     * Average CPC is a legacy value that will be removed and replaced in the
     * future, and as such we are including it as an optioanl value so clients
     * only use it when strictly necessary and to better track clients that use
     * this value.
     *
     * Generated from protobuf field <code>bool include_average_cpc = 2;</code>
     */
    protected $include_average_cpc = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Ads\GoogleAds\V13\Common\YearMonthRange $year_month_range
     *           The year month range for historical metrics. If not specified the searches
     *           will be returned for past 12 months.
     *           Searches data is available for the past 4 years. If the search volume is
     *           not available for the entire year_month_range provided, the subset of the
     *           year month range for which search volume is available will be returned.
     *     @type bool $include_average_cpc
     *           Indicates whether to include average cost per click value.
     *           Average CPC is a legacy value that will be removed and replaced in the
     *           future, and as such we are including it as an optioanl value so clients
     *           only use it when strictly necessary and to better track clients that use
     *           this value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Common\KeywordPlanCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * The year month range for historical metrics. If not specified the searches
     * will be returned for past 12 months.
     * Searches data is available for the past 4 years. If the search volume is
     * not available for the entire year_month_range provided, the subset of the
     * year month range for which search volume is available will be returned.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v13.common.YearMonthRange year_month_range = 1;</code>
     * @return \Google\Ads\GoogleAds\V13\Common\YearMonthRange|null
     */
    public function getYearMonthRange()
    {
        return $this->year_month_range;
    }

    public function hasYearMonthRange()
    {
        return isset($this->year_month_range);
    }

    public function clearYearMonthRange()
    {
        unset($this->year_month_range);
    }

    /**
     * The year month range for historical metrics. If not specified the searches
     * will be returned for past 12 months.
     * Searches data is available for the past 4 years. If the search volume is
     * not available for the entire year_month_range provided, the subset of the
     * year month range for which search volume is available will be returned.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v13.common.YearMonthRange year_month_range = 1;</code>
     * @param \Google\Ads\GoogleAds\V13\Common\YearMonthRange $var
     * @return $this
     */
    public function setYearMonthRange($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V13\Common\YearMonthRange::class);
        $this->year_month_range = $var;

        return $this;
    }

    /**
     * Indicates whether to include average cost per click value.
     * Average CPC is a legacy value that will be removed and replaced in the
     * future, and as such we are including it as an optioanl value so clients
     * only use it when strictly necessary and to better track clients that use
     * this value.
     *
     * Generated from protobuf field <code>bool include_average_cpc = 2;</code>
     * @return bool
     */
    public function getIncludeAverageCpc()
    {
        return $this->include_average_cpc;
    }

    /**
     * Indicates whether to include average cost per click value.
     * Average CPC is a legacy value that will be removed and replaced in the
     * future, and as such we are including it as an optioanl value so clients
     * only use it when strictly necessary and to better track clients that use
     * this value.
     *
     * Generated from protobuf field <code>bool include_average_cpc = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setIncludeAverageCpc($var)
    {
        GPBUtil::checkBool($var);
        $this->include_average_cpc = $var;

        return $this;
    }

}

