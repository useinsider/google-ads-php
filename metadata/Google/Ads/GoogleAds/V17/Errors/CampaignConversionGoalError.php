<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/errors/campaign_conversion_goal_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Errors;

class CampaignConversionGoalError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Dgoogle/ads/googleads/v17/errors/campaign_conversion_goal_error.protogoogle.ads.googleads.v17.errors"�
CampaignConversionGoalErrorEnum"�
CampaignConversionGoalError
UNSPECIFIED 
UNKNOWN@
<CANNOT_USE_CAMPAIGN_GOAL_FOR_SEARCH_ADS_360_MANAGED_CAMPAIGN;
7CANNOT_USE_STORE_SALE_GOAL_FOR_PERFORMANCE_MAX_CAMPAIGNB�
#com.google.ads.googleads.v17.errorsB CampaignConversionGoalErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/errors;errors�GAA�Google.Ads.GoogleAds.V17.Errors�Google\\Ads\\GoogleAds\\V17\\Errors�#Google::Ads::GoogleAds::V17::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

