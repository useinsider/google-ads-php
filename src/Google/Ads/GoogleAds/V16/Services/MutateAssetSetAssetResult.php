<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v16/services/asset_set_asset_service.proto

namespace Google\Ads\GoogleAds\V16\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the asset set asset mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v16.services.MutateAssetSetAssetResult</code>
 */
class MutateAssetSetAssetResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The mutated asset set asset with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.AssetSetAsset asset_set_asset = 2;</code>
     */
    protected $asset_set_asset = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V16\Resources\AssetSetAsset $asset_set_asset
     *           The mutated asset set asset with only mutable fields after mutate. The
     *           field will only be returned when response_content_type is set to
     *           "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V16\Services\AssetSetAssetService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The mutated asset set asset with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.AssetSetAsset asset_set_asset = 2;</code>
     * @return \Google\Ads\GoogleAds\V16\Resources\AssetSetAsset|null
     */
    public function getAssetSetAsset()
    {
        return $this->asset_set_asset;
    }

    public function hasAssetSetAsset()
    {
        return isset($this->asset_set_asset);
    }

    public function clearAssetSetAsset()
    {
        unset($this->asset_set_asset);
    }

    /**
     * The mutated asset set asset with only mutable fields after mutate. The
     * field will only be returned when response_content_type is set to
     * "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v16.resources.AssetSetAsset asset_set_asset = 2;</code>
     * @param \Google\Ads\GoogleAds\V16\Resources\AssetSetAsset $var
     * @return $this
     */
    public function setAssetSetAsset($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V16\Resources\AssetSetAsset::class);
        $this->asset_set_asset = $var;

        return $this;
    }

}

