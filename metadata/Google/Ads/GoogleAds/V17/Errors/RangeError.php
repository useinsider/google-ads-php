<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/errors/range_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V17\Errors;

class RangeError
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
1google/ads/googleads/v17/errors/range_error.protogoogle.ads.googleads.v17.errors"W
RangeErrorEnum"E

RangeError
UNSPECIFIED 
UNKNOWN
TOO_LOW
TOO_HIGHB�
#com.google.ads.googleads.v17.errorsBRangeErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v17/errors;errors�GAA�Google.Ads.GoogleAds.V17.Errors�Google\\Ads\\GoogleAds\\V17\\Errors�#Google::Ads::GoogleAds::V17::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

