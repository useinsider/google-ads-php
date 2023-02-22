<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/services/campaign_asset_set_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V13\Services;

class CampaignAssetSetService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
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
�
:google/ads/googleads/v13/enums/response_content_type.protogoogle.ads.googleads.v13.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v13.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v13/enums;enums�GAA�Google.Ads.GoogleAds.V13.Enums�Google\\Ads\\GoogleAds\\V13\\Enums�"Google::Ads::GoogleAds::V13::Enumsbproto3
�
;google/ads/googleads/v13/resources/campaign_asset_set.proto"google.ads.googleads.v13.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
CampaignAssetSetH
resource_name (	B1�A�A+
)googleads.googleapis.com/CampaignAssetSet;
campaign (	B)�A�A#
!googleads.googleapis.com/Campaign<
	asset_set (	B)�A�A#
!googleads.googleapis.com/AssetSet^
status (2I.google.ads.googleads.v13.enums.AssetSetLinkStatusEnum.AssetSetLinkStatusB�A:v�As
)googleads.googleapis.com/CampaignAssetSetFcustomers/{customer_id}/campaignAssetSets/{campaign_id}~{asset_set_id}B�
&com.google.ads.googleads.v13.resourcesBCampaignAssetSetProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v13/resources;resources�GAA�"Google.Ads.GoogleAds.V13.Resources�"Google\\Ads\\GoogleAds\\V13\\Resources�&Google::Ads::GoogleAds::V13::Resourcesbproto3
�
Bgoogle/ads/googleads/v13/services/campaign_asset_set_service.proto!google.ads.googleads.v13.services;google/ads/googleads/v13/resources/campaign_asset_set.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/rpc/status.proto"�
MutateCampaignAssetSetsRequest
customer_id (	B�AU

operations (2<.google.ads.googleads.v13.services.CampaignAssetSetOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v13.enums.ResponseContentTypeEnum.ResponseContentType"�
CampaignAssetSetOperationF
create (24.google.ads.googleads.v13.resources.CampaignAssetSetH @
remove (	B.�A+
)googleads.googleapis.com/CampaignAssetSetH B
	operation"�
MutateCampaignAssetSetsResponseP
results (2?.google.ads.googleads.v13.services.MutateCampaignAssetSetResult1
partial_failure_error (2.google.rpc.Status"�
MutateCampaignAssetSetResultE
resource_name (	B.�A+
)googleads.googleapis.com/CampaignAssetSetP
campaign_asset_set (24.google.ads.googleads.v13.resources.CampaignAssetSet2�
CampaignAssetSetService�
MutateCampaignAssetSetsA.google.ads.googleads.v13.services.MutateCampaignAssetSetsRequestB.google.ads.googleads.v13.services.MutateCampaignAssetSetsResponse"[���<"7/v13/customers/{customer_id=*}/campaignAssetSets:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v13.servicesBCampaignAssetSetServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v13/services;services�GAA�!Google.Ads.GoogleAds.V13.Services�!Google\\Ads\\GoogleAds\\V13\\Services�%Google::Ads::GoogleAds::V13::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

