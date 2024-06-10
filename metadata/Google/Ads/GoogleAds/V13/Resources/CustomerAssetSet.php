<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/customer_asset_set.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Resources;

class CustomerAssetSet
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v13/enums/asset_set_link_status.protogoogle.ads.googleads.v13.enums"f
AssetSetLinkStatusEnum"L
AssetSetLinkStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
"com.google.ads.googleads.v13.enumsBAssetSetLinkStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
;google/ads/googleads/v13/resources/customer_asset_set.proto"google.ads.googleads.v13.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
CustomerAssetSetH
resource_name (	B1�A�A+
)googleads.googleapis.com/CustomerAssetSet<
	asset_set (	B)�A�A#
!googleads.googleapis.com/AssetSet;
customer (	B)�A�A#
!googleads.googleapis.com/Customer^
status (2I.google.ads.googleads.v13.enums.AssetSetLinkStatusEnum.AssetSetLinkStatusB�A:h�Ae
)googleads.googleapis.com/CustomerAssetSet8customers/{customer_id}/customerAssetSets/{asset_set_id}B�
&com.google.ads.googleads.v13.resourcesBCustomerAssetSetProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v13/resources;resources�GAA�"Google.Ads.GoogleAds.V13.Resources�"Google\\Ads\\GoogleAds\\V13\\Resources�&Google::Ads::GoogleAds::V13::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

