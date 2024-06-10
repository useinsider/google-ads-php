<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/services/conversion_custom_variable_service.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V15\Services;

class ConversionCustomVariableService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Protobuf\Any::initOnce();
        \GPBMetadata\Google\Api\LaunchStage::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
:google/ads/googleads/v15/enums/response_content_type.protogoogle.ads.googleads.v15.enums"o
ResponseContentTypeEnum"T
ResponseContentType
UNSPECIFIED 
RESOURCE_NAME_ONLY
MUTABLE_RESOURCEB�
"com.google.ads.googleads.v15.enumsBResponseContentTypeProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
Fgoogle/ads/googleads/v15/enums/conversion_custom_variable_status.protogoogle.ads.googleads.v15.enums"�
"ConversionCustomVariableStatusEnum"n
ConversionCustomVariableStatus
UNSPECIFIED 
UNKNOWN
ACTIVATION_NEEDED
ENABLED

PAUSEDB�
"com.google.ads.googleads.v15.enumsB#ConversionCustomVariableStatusProtoPZCgoogle.golang.org/genproto/googleapis/ads/googleads/v15/enums;enums�GAA�Google.Ads.GoogleAds.V15.Enums�Google\\Ads\\GoogleAds\\V15\\Enums�"Google::Ads::GoogleAds::V15::Enumsbproto3
�
Cgoogle/ads/googleads/v15/resources/conversion_custom_variable.proto"google.ads.googleads.v15.resourcesgoogle/api/field_behavior.protogoogle/api/resource.proto"�
ConversionCustomVariableP
resource_name (	B9�A�A3
1googleads.googleapis.com/ConversionCustomVariable
id (B�A
name (	B�A
tag (	B�A�Aq
status (2a.google.ads.googleads.v15.enums.ConversionCustomVariableStatusEnum.ConversionCustomVariableStatusA
owner_customer (	B)�A�A#
!googleads.googleapis.com/Customer:��A�
1googleads.googleapis.com/ConversionCustomVariableQcustomers/{customer_id}/conversionCustomVariables/{conversion_custom_variable_id}B�
&com.google.ads.googleads.v15.resourcesBConversionCustomVariableProtoPZKgoogle.golang.org/genproto/googleapis/ads/googleads/v15/resources;resources�GAA�"Google.Ads.GoogleAds.V15.Resources�"Google\\Ads\\GoogleAds\\V15\\Resources�&Google::Ads::GoogleAds::V15::Resourcesbproto3
�
Jgoogle/ads/googleads/v15/services/conversion_custom_variable_service.proto!google.ads.googleads.v15.servicesCgoogle/ads/googleads/v15/resources/conversion_custom_variable.protogoogle/api/annotations.protogoogle/api/client.protogoogle/api/field_behavior.protogoogle/api/resource.proto google/protobuf/field_mask.protogoogle/rpc/status.proto"�
&MutateConversionCustomVariablesRequest
customer_id (	B�A]

operations (2D.google.ads.googleads.v15.services.ConversionCustomVariableOperationB�A
partial_failure (
validate_only (j
response_content_type (2K.google.ads.googleads.v15.enums.ResponseContentTypeEnum.ResponseContentType"�
!ConversionCustomVariableOperation/
update_mask (2.google.protobuf.FieldMaskN
create (2<.google.ads.googleads.v15.resources.ConversionCustomVariableH N
update (2<.google.ads.googleads.v15.resources.ConversionCustomVariableH B
	operation"�
\'MutateConversionCustomVariablesResponse1
partial_failure_error (2.google.rpc.StatusX
results (2G.google.ads.googleads.v15.services.MutateConversionCustomVariableResult"�
$MutateConversionCustomVariableResultM
resource_name (	B6�A3
1googleads.googleapis.com/ConversionCustomVariable`
conversion_custom_variable (2<.google.ads.googleads.v15.resources.ConversionCustomVariable2�
ConversionCustomVariableService�
MutateConversionCustomVariablesI.google.ads.googleads.v15.services.MutateConversionCustomVariablesRequestJ.google.ads.googleads.v15.services.MutateConversionCustomVariablesResponse"c���D"?/v15/customers/{customer_id=*}/conversionCustomVariables:mutate:*�Acustomer_id,operationsE�Agoogleads.googleapis.com�A\'https://www.googleapis.com/auth/adwordsB�
%com.google.ads.googleads.v15.servicesB$ConversionCustomVariableServiceProtoPZIgoogle.golang.org/genproto/googleapis/ads/googleads/v15/services;services�GAA�!Google.Ads.GoogleAds.V15.Services�!Google\\Ads\\GoogleAds\\V15\\Services�%Google::Ads::GoogleAds::V15::Servicesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

