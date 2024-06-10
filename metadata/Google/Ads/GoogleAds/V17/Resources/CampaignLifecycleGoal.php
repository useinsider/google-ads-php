<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/campaign_lifecycle_goal.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Resources;

class CampaignLifecycleGoal
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
�
Kgoogle/ads/googleads/v17/enums/customer_acquisition_optimization_mode.protogoogle.ads.googleads.v17.enums"�
\'CustomerAcquisitionOptimizationModeEnum"�
#CustomerAcquisitionOptimizationMode
UNSPECIFIED 
UNKNOWN
TARGET_ALL_EQUALLY
BID_HIGHER_FOR_NEW_CUSTOMER
TARGET_NEW_CUSTOMERB�
"com.google.ads.googleads.v17.enumsB(CustomerAcquisitionOptimizationModeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v17/enums;enums�GAA�Google.Ads.GoogleAds.V17.Enums�Google\\Ads\\GoogleAds\\V17\\Enums�"Google::Ads::GoogleAds::V17::Enumsbproto3
�
5google/ads/googleads/v17/common/lifecycle_goals.protogoogle.ads.googleads.v17.common"t
LifecycleGoalValueSettings
value (H � 
high_lifetime_value (H�B
_valueB
_high_lifetime_valueB�
#com.google.ads.googleads.v17.commonBLifecycleGoalsProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/common;common�GAA�Google.Ads.GoogleAds.V17.Common�Google\\Ads\\GoogleAds\\V17\\Common�#Google::Ads::GoogleAds::V17::Commonbproto3
�	
@google/ads/googleads/v17/resources/campaign_lifecycle_goal.proto"google.ads.googleads.v17.resourcesKgoogle/ads/googleads/v17/enums/customer_acquisition_optimization_mode.protogoogle/api/field_behavior.protogoogle/api/resource.proto"�
CampaignLifecycleGoalM
resource_name (	B6�A�A0
.googleads.googleapis.com/CampaignLifecycleGoal;
campaign (	B)�A�A#
!googleads.googleapis.com/Campaignt
"customer_acquisition_goal_settings (2C.google.ads.googleads.v17.resources.CustomerAcquisitionGoalSettingsB�A:q�An
.googleads.googleapis.com/CampaignLifecycleGoal<customers/{customer_id}/campaignLifecycleGoals/{campaign_id}"�
CustomerAcquisitionGoalSettings�
optimization_mode (2k.google.ads.googleads.v17.enums.CustomerAcquisitionOptimizationModeEnum.CustomerAcquisitionOptimizationModeB�AX
value_settings (2;.google.ads.googleads.v17.common.LifecycleGoalValueSettingsB�AB�
&com.google.ads.googleads.v17.resourcesBCampaignLifecycleGoalProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v17/resources;resources�GAA�"Google.Ads.GoogleAds.V17.Resources�"Google\\Ads\\GoogleAds\\V17\\Resources�&Google::Ads::GoogleAds::V17::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

