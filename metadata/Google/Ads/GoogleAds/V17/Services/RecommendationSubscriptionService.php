<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/services/recommendation_subscription_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Services;

class RecommendationSubscriptionService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v17/enums/response_content_type.protogoogle.ads.googleads.v17.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v17.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
8google/ads/googleads/v17/enums/recommendation_type.protogoogle.ads.googleads.v17.enums"�
RecommendationTypeEnum"�
RecommendationType
UNSPECIFIED 
UNKNOWN
CAMPAIGN_BUDGET
KEYWORD
TEXT_AD
TARGET_CPA_OPT_IN
MAXIMIZE_CONVERSIONS_OPT_IN
ENHANCED_CPC_OPT_IN
SEARCH_PARTNERS_OPT_IN
MAXIMIZE_CLICKS_OPT_IN	
OPTIMIZE_AD_ROTATION

KEYWORD_MATCH_TYPE
MOVE_UNUSED_BUDGET
FORECASTING_CAMPAIGN_BUDGET
TARGET_ROAS_OPT_IN
RESPONSIVE_SEARCH_AD 
MARGINAL_ROI_CAMPAIGN_BUDGET
USE_BROAD_MATCH_KEYWORD
RESPONSIVE_SEARCH_AD_ASSET6
2UPGRADE_SMART_SHOPPING_CAMPAIGN_TO_PERFORMANCE_MAX,
(RESPONSIVE_SEARCH_AD_IMPROVE_AD_STRENGTH
DISPLAY_EXPANSION_OPT_IN-
)UPGRADE_LOCAL_CAMPAIGN_TO_PERFORMANCE_MAX 
RAISE_TARGET_CPA_BID_TOO_LOW
FORECASTING_SET_TARGET_ROAS
CALLOUT_ASSET
SITELINK_ASSET

CALL_ASSET
SHOPPING_ADD_AGE_GROUP
SHOPPING_ADD_COLOR 
SHOPPING_ADD_GENDER!
SHOPPING_ADD_GTIN"!
SHOPPING_ADD_MORE_IDENTIFIERS#
SHOPPING_ADD_SIZE$%
!SHOPPING_ADD_PRODUCTS_TO_CAMPAIGN%%
!SHOPPING_FIX_DISAPPROVED_PRODUCTS&
SHOPPING_TARGET_ALL_OFFERS\'2
.SHOPPING_FIX_SUSPENDED_MERCHANT_CENTER_ACCOUNT(;
7SHOPPING_FIX_MERCHANT_CENTER_ACCOUNT_SUSPENSION_WARNING)H
DSHOPPING_MIGRATE_REGULAR_SHOPPING_CAMPAIGN_OFFERS_TO_PERFORMANCE_MAX*"
DYNAMIC_IMAGE_EXTENSION_OPT_IN+
RAISE_TARGET_CPA,
LOWER_TARGET_ROAS-
PERFORMANCE_MAX_OPT_IN.\'
#IMPROVE_PERFORMANCE_MAX_AD_STRENGTH/:
6MIGRATE_DYNAMIC_SEARCH_ADS_CAMPAIGN_TO_PERFORMANCE_MAX0
FORECASTING_SET_TARGET_CPA1
SET_TARGET_CPA2
SET_TARGET_ROAS3$
 MAXIMIZE_CONVERSION_VALUE_OPT_IN4
IMPROVE_GOOGLE_TAG_COVERAGE5$
 PERFORMANCE_MAX_FINAL_URL_OPT_IN6
REFRESH_CUSTOMER_MATCH_LIST7
CUSTOM_AUDIENCE_OPT_IN8
LEAD_FORM_ASSET9"
IMPROVE_DEMAND_GEN_AD_STRENGTH:B�
"com.google.ads.googleads.v17.enumsBRecommendationTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
Ggoogle/ads/googleads/v17/enums/recommendation_subscription_status.protogoogle.ads.googleads.v17.enums"�
$RecommendationSubscriptionStatusEnum"Y
 RecommendationSubscriptionStatus
UNSPECIFIED 
UNKNOWN
ENABLED

PAUSEDB�
"com.google.ads.googleads.v17.enumsB%RecommendationSubscriptionStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
Dgoogle/ads/googleads/v17/resources/recommendation_subscription.proto"google.ads.googleads.v17.resources8google/ads/googleads/v17/enums/recommendation_type.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
RecommendationSubscriptionR
resource_name (	B;�A�A5
3googleads.googleapis.com/RecommendationSubscription_
type (2I.google.ads.googleads.v17.enums.RecommendationTypeEnum.RecommendationTypeB�A�A"
create_date_time (	B�AH �"
modify_date_time (	B�AH�
status (2e.google.ads.googleads.v17.enums.RecommendationSubscriptionStatusEnum.RecommendationSubscriptionStatusB�AH�:��A�
3googleads.googleapis.com/RecommendationSubscriptionIcustomers/{customer_id}/recommendationSubscriptions/{recommendation_type}B
_create_date_timeB
_modify_date_timeB	
_statusB�
&com.google.ads.googleads.v17.resourcesBRecommendationSubscriptionProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v17/resources;resources�GAA�"Google.Ads.GoogleAds.V17.Resources�"Google\\Ads\\GoogleAds\\V17\\Resources�&Google::Ads::GoogleAds::V17::Resourcesbproto3
�
Kgoogle/ads/googleads/v17/services/recommendation_subscription_service.proto!google.ads.googleads.v17.servicesDgoogle/ads/googleads/v17/resources/recommendation_subscription.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
\'MutateRecommendationSubscriptionRequest
customer_id (	B�A_

operations (2F.google.ads.googleads.v17.services.RecommendationSubscriptionOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v17.enums.ResponseContentTypeEnum.ResponseContentType"�
#RecommendationSubscriptionOperation4
update_mask (2.google.protobuf.FieldMaskB�AP
create (2>.google.ads.googleads.v17.resources.RecommendationSubscriptionH P
update (2>.google.ads.googleads.v17.resources.RecommendationSubscriptionH B
	operation"�
(MutateRecommendationSubscriptionResponseZ
results (2I.google.ads.googleads.v17.services.MutateRecommendationSubscriptionResult1
partial_failure_error (2.google.rpc.Status"�
&MutateRecommendationSubscriptionResultO
resource_name (	B8�A5
3googleads.googleapis.com/RecommendationSubscriptionc
recommendation_subscription (2>.google.ads.googleads.v17.resources.RecommendationSubscription2�
!RecommendationSubscriptionService�
 MutateRecommendationSubscriptionJ.google.ads.googleads.v17.services.MutateRecommendationSubscriptionRequestK.google.ads.googleads.v17.services.MutateRecommendationSubscriptionResponse"�Acustomer_id,operations���`"[/v17/customers/{customer_id=*}/recommendationSubscriptions:mutateRecommendationSubscription:*E�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v17.servicesB&RecommendationSubscriptionServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v17/services;services�GAA�!Google.Ads.GoogleAds.V17.Services�!Google\\Ads\\GoogleAds\\V17\\Services�%Google::Ads::GoogleAds::V17::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

