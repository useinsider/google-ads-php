<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/travel_activity_group_view.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Resources;

class TravelActivityGroupView
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
�
Cgoogle/ads/googleads/v13/resources/travel_activity_group_view.proto"google.ads.googleads.v13.resourcesgoogle/api/resource.proto"�
TravelActivityGroupViewO
resource_name (	B8�A�A2
0googleads.googleapis.com/TravelActivityGroupView:��A�
0googleads.googleapis.com/TravelActivityGroupViewMcustomers/{customer_id}/travelActivityGroupViews/{ad_group_id}~{criterion_id}B�
&com.google.ads.googleads.v13.resourcesBTravelActivityGroupViewProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v13/resources;resources�GAA�"Google.Ads.GoogleAds.V13.Resources�"Google\\Ads\\GoogleAds\\V13\\Resources�&Google::Ads::GoogleAds::V13::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

