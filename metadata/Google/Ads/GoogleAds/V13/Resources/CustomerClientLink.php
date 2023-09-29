<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/customer_client_link.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Resources;

class CustomerClientLink
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
8google/ads/googleads/v13/enums/manager_link_status.protogoogle.ads.googleads.v13.enums"�
ManagerLinkStatusEnum"s
ManagerLinkStatus
UNSPECIFIED 
UNKNOWN

ACTIVE
INACTIVE
PENDING
REFUSED
CANCELEDB�
"com.google.ads.googleads.v13.enumsBManagerLinkStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
=google/ads/googleads/v13/resources/customer_client_link.proto"google.ads.googleads.v13.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
CustomerClientLinkJ
resource_name (	B3�A�A-
+googleads.googleapis.com/CustomerClientLinkG
client_customer (	B)�A�A#
!googleads.googleapis.com/CustomerH �!
manager_link_id (B�AH�W
status (2G.google.ads.googleads.v13.enums.ManagerLinkStatusEnum.ManagerLinkStatus
hidden	 (H�:��A�
+googleads.googleapis.com/CustomerClientLinkRcustomers/{customer_id}/customerClientLinks/{client_customer_id}~{manager_link_id}B
_client_customerB
_manager_link_idB	
_hiddenB�
&com.google.ads.googleads.v13.resourcesBCustomerClientLinkProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v13/resources;resources�GAA�"Google.Ads.GoogleAds.V13.Resources�"Google\\Ads\\GoogleAds\\V13\\Resources�&Google::Ads::GoogleAds::V13::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

