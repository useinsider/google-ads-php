<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/resources/recommendation_subscription.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V16\Resources;

class RecommendationSubscription
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
8google/ads/googleads/v16/enums/recommendation_type.protogoogle.ads.googleads.v16.enums"�
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
"com.google.ads.googleads.v16.enumsBRecommendationTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
Ggoogle/ads/googleads/v16/enums/recommendation_subscription_status.protogoogle.ads.googleads.v16.enums"�
$RecommendationSubscriptionStatusEnum"Y
 RecommendationSubscriptionStatus
UNSPECIFIED 
UNKNOWN
ENABLED

PAUSEDB�
"com.google.ads.googleads.v16.enumsB%RecommendationSubscriptionStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v16/enums;enums�GAA�Google.Ads.GoogleAds.V16.Enums�Google\\Ads\\GoogleAds\\V16\\Enums�"Google::Ads::GoogleAds::V16::Enumsbproto3
�
Dgoogle/ads/googleads/v16/resources/recommendation_subscription.proto"google.ads.googleads.v16.resources8google/ads/googleads/v16/enums/recommendation_type.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
RecommendationSubscriptionR
resource_name (	B;�A�A5
3googleads.googleapis.com/RecommendationSubscription_
type (2I.google.ads.googleads.v16.enums.RecommendationTypeEnum.RecommendationTypeB�A�A"
create_date_time (	B�AH �"
modify_date_time (	B�AH�
status (2e.google.ads.googleads.v16.enums.RecommendationSubscriptionStatusEnum.RecommendationSubscriptionStatusB�AH�:��A�
3googleads.googleapis.com/RecommendationSubscriptionIcustomers/{customer_id}/recommendationSubscriptions/{recommendation_type}B
_create_date_timeB
_modify_date_timeB	
_statusB�
&com.google.ads.googleads.v16.resourcesBRecommendationSubscriptionProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v16/resources;resources�GAA�"Google.Ads.GoogleAds.V16.Resources�"Google\\Ads\\GoogleAds\\V16\\Resources�&Google::Ads::GoogleAds::V16::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

