<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/errors/campaign_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Errors;

class CampaignError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
4google/ads/googleads/v17/errors/campaign_error.protogoogle.ads.googleads.v17.errors"�
CampaignErrorEnum"�
CampaignError
UNSPECIFIED 
UNKNOWN!
CANNOT_TARGET_CONTENT_NETWORK 
CANNOT_TARGET_SEARCH_NETWORK6
2CANNOT_TARGET_SEARCH_NETWORK_WITHOUT_GOOGLE_SEARCH0
,CANNOT_TARGET_GOOGLE_SEARCH_FOR_CPM_CAMPAIGN-
)CAMPAIGN_MUST_TARGET_AT_LEAST_ONE_NETWORK(
$CANNOT_TARGET_PARTNER_SEARCH_NETWORKK
GCANNOT_TARGET_CONTENT_NETWORK_ONLY_WITH_CRITERIA_LEVEL_BIDDING_STRATEGY	6
2CAMPAIGN_DURATION_MUST_CONTAIN_ALL_RUNNABLE_TRIALS
$
 CANNOT_MODIFY_FOR_TRIAL_CAMPAIGN
DUPLICATE_CAMPAIGN_NAME
INCOMPATIBLE_CAMPAIGN_FIELD
INVALID_CAMPAIGN_NAME*
&INVALID_AD_SERVING_OPTIMIZATION_STATUS
INVALID_TRACKING_URL>
:CANNOT_SET_BOTH_TRACKING_URL_TEMPLATE_AND_TRACKING_SETTING 
MAX_IMPRESSIONS_NOT_IN_RANGE
TIME_UNIT_NOT_SUPPORTED1
-INVALID_OPERATION_IF_SERVING_STATUS_HAS_ENDED
BUDGET_CANNOT_BE_SHARED%
!CAMPAIGN_CANNOT_USE_SHARED_BUDGET0
,CANNOT_CHANGE_BUDGET_ON_CAMPAIGN_WITH_TRIALS!
CAMPAIGN_LABEL_DOES_NOT_EXIST!
CAMPAIGN_LABEL_ALREADY_EXISTS
MISSING_SHOPPING_SETTING"
INVALID_SHOPPING_SALES_COUNTRY;
7ADVERTISING_CHANNEL_TYPE_NOT_AVAILABLE_FOR_ACCOUNT_TYPE(
$INVALID_ADVERTISING_CHANNEL_SUB_TYPE ,
(AT_LEAST_ONE_CONVERSION_MUST_BE_SELECTED!
CANNOT_SET_AD_ROTATION_MODE"/
+CANNOT_MODIFY_START_DATE_IF_ALREADY_STARTED#
CANNOT_SET_DATE_TO_PAST$
MISSING_HOTEL_CUSTOMER_LINK%
INVALID_HOTEL_CUSTOMER_LINK&
MISSING_HOTEL_SETTING\'B
>CANNOT_USE_SHARED_CAMPAIGN_BUDGET_WHILE_PART_OF_CAMPAIGN_GROUP(
APP_NOT_FOUND)9
5SHOPPING_ENABLE_LOCAL_NOT_SUPPORTED_FOR_CAMPAIGN_TYPE*3
/MERCHANT_NOT_ALLOWED_FOR_COMPARISON_LISTING_ADS+#
INSUFFICIENT_APP_INSTALLS_COUNT,
SENSITIVE_CATEGORY_APP-
HEC_AGREEMENT_REQUIRED.<
8NOT_COMPATIBLE_WITH_VIEW_THROUGH_CONVERSION_OPTIMIZATION1,
(INVALID_EXCLUDED_PARENT_ASSET_FIELD_TYPE0:
6CANNOT_CREATE_APP_PRE_REGISTRATION_FOR_NON_ANDROID_APP2=
9APP_NOT_AVAILABLE_TO_CREATE_APP_PRE_REGISTRATION_CAMPAIGN3
INCOMPATIBLE_BUDGET_TYPE4)
%LOCAL_SERVICES_DUPLICATE_CATEGORY_BID5\'
#LOCAL_SERVICES_INVALID_CATEGORY_BID6\'
#LOCAL_SERVICES_MISSING_CATEGORY_BID7
INVALID_STATUS_CHANGE9 
MISSING_TRAVEL_CUSTOMER_LINK: 
INVALID_TRAVEL_CUSTOMER_LINK;*
&INVALID_EXCLUDED_PARENT_ASSET_SET_TYPE>,
(ASSET_SET_NOT_A_HOTEL_PROPERTY_ASSET_SET?F
BHOTEL_PROPERTY_ASSET_SET_ONLY_FOR_PERFORMANCE_MAX_FOR_TRAVEL_GOALS@ 
AVERAGE_DAILY_SPEND_TOO_HIGHA+
\'CANNOT_ATTACH_TO_REMOVED_CAMPAIGN_GROUPB%
!CANNOT_ATTACH_TO_BIDDING_STRATEGYC
CANNOT_CHANGE_BUDGET_PERIODD
NOT_ENOUGH_CONVERSIONSG.
*CANNOT_SET_MORE_THAN_ONE_CONVERSION_ACTIONH#
NOT_COMPATIBLE_WITH_BUDGET_TYPEI0
,NOT_COMPATIBLE_WITH_UPLOAD_CLICKS_CONVERSIONJ.
*APP_ID_MUST_MATCH_CONVERSION_ACTION_APP_IDL8
4CONVERSION_ACTION_WITH_DOWNLOAD_CATEGORY_NOT_ALLOWEDM5
1CONVERSION_ACTION_WITH_DOWNLOAD_CATEGORY_REQUIREDN#
CONVERSION_TRACKING_NOT_ENABLEDO-
)NOT_COMPATIBLE_WITH_BIDDING_STRATEGY_TYPEP6
2NOT_COMPATIBLE_WITH_GOOGLE_ATTRIBUTION_CONVERSIONSQ
CONVERSION_LAG_TOO_HIGHR"
NOT_LINKED_ADVERTISING_PARTNERS-
)INVALID_NUMBER_OF_ADVERTISING_PARTNER_IDST1
-CANNOT_TARGET_DISPLAY_NETWORK_WITHOUT_YOUTUBEU6
2CANNOT_LINK_TO_COMPARISON_SHOPPING_SERVICE_ACCOUNTVI
ECANNOT_TARGET_NETWORK_FOR_COMPARISON_SHOPPING_SERVICE_LINKED_ACCOUNTSW:
6CANNOT_MODIFY_TEXT_ASSET_AUTOMATION_WITH_ENABLED_TRIALXE
ADYNAMIC_TEXT_ASSET_CANNOT_OPT_OUT_WITH_FINAL_URL_EXPANSION_OPT_INY*
&CANNOT_SET_CAMPAIGN_KEYWORD_MATCH_TYPEZA
=CANNOT_DISABLE_BROAD_MATCH_WHEN_KEYWORD_CONVERSION_IN_PROCESS[4
0CANNOT_DISABLE_BROAD_MATCH_WHEN_TARGETING_BRANDS\\D
@CANNOT_ENABLE_BROAD_MATCH_FOR_BASE_CAMPAIGN_WITH_PROMOTING_TRIAL]:
6CANNOT_ENABLE_BROAD_MATCH_FOR_PROMOTING_TRIAL_CAMPAIGN^B�
#com.google.ads.googleads.v17.errorsBCampaignErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/errors;errors�GAA�Google.Ads.GoogleAds.V17.Errors�Google\\Ads\\GoogleAds\\V17\\Errors�#Google::Ads::GoogleAds::V17::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

