<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/enums/smart_campaign_status.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Enums;

class SmartCampaignStatus
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v13/enums/smart_campaign_status.protogoogle.ads.googleads.v13.enums"�
SmartCampaignStatusEnum"�
SmartCampaignStatus
UNSPECIFIED 
UNKNOWN

PAUSED
NOT_ELIGIBLE
PENDING
ELIGIBLE
REMOVED	
ENDEDB�
"com.google.ads.googleads.v13.enumsBSmartCampaignStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

