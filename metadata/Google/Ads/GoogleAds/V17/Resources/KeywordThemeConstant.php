<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/resources/keyword_theme_constant.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Resources;

class KeywordThemeConstant
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
�
?google/ads/googleads/v17/resources/keyword_theme_constant.proto"google.ads.googleads.v17.resourcesgoogle/api/resource.proto"�
KeywordThemeConstantL
resource_name (	B5�A�A/
-googleads.googleapis.com/KeywordThemeConstant
country_code (	B�AH �
language_code (	B�AH�
display_name (	B�AH�:y�Av
-googleads.googleapis.com/KeywordThemeConstantEkeywordThemeConstants/{express_category_id}~{express_sub_category_id}B
_country_codeB
_language_codeB
_display_nameB�
&com.google.ads.googleads.v17.resourcesBKeywordThemeConstantProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v17/resources;resources�GAA�"Google.Ads.GoogleAds.V17.Resources�"Google\\Ads\\GoogleAds\\V17\\Resources�&Google::Ads::GoogleAds::V17::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

