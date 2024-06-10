<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/customer_client_link.proto

namespace Google\Ads\GoogleAds\V13\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents customer client link relationship.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.resources.CustomerClientLink</code>
 */
class CustomerClientLink extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. Name of the resource.
     * CustomerClientLink resource names have the form:
     * `customers/{customer_id}/customerClientLinks/{client_customer_id}~{manager_link_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * Immutable. The client customer linked to this customer.
     *
     * Generated from protobuf field <code>optional string client_customer = 7 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $client_customer = null;
    /**
     * Output only. This is uniquely identifies a customer client link. Read only.
     *
     * Generated from protobuf field <code>optional int64 manager_link_id = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $manager_link_id = null;
    /**
     * This is the status of the link between client and manager.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.ManagerLinkStatusEnum.ManagerLinkStatus status = 5;</code>
     */
    protected $status = 0;
    /**
     * The visibility of the link. Users can choose whether or not to see hidden
     * links in the Google Ads UI.
     * Default value is false
     *
     * Generated from protobuf field <code>optional bool hidden = 9;</code>
     */
    protected $hidden = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Immutable. Name of the resource.
     *           CustomerClientLink resource names have the form:
     *           `customers/{customer_id}/customerClientLinks/{client_customer_id}~{manager_link_id}`
     *     @type string $client_customer
     *           Immutable. The client customer linked to this customer.
     *     @type int|string $manager_link_id
     *           Output only. This is uniquely identifies a customer client link. Read only.
     *     @type int $status
     *           This is the status of the link between client and manager.
     *     @type bool $hidden
     *           The visibility of the link. Users can choose whether or not to see hidden
     *           links in the Google Ads UI.
     *           Default value is false
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Resources\CustomerClientLink::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. Name of the resource.
     * CustomerClientLink resource names have the form:
     * `customers/{customer_id}/customerClientLinks/{client_customer_id}~{manager_link_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Immutable. Name of the resource.
     * CustomerClientLink resource names have the form:
     * `customers/{customer_id}/customerClientLinks/{client_customer_id}~{manager_link_id}`
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
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
     * Immutable. The client customer linked to this customer.
     *
     * Generated from protobuf field <code>optional string client_customer = 7 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getClientCustomer()
    {
        return isset($this->client_customer) ? $this->client_customer : '';
    }

    public function hasClientCustomer()
    {
        return isset($this->client_customer);
    }

    public function clearClientCustomer()
    {
        unset($this->client_customer);
    }

    /**
     * Immutable. The client customer linked to this customer.
     *
     * Generated from protobuf field <code>optional string client_customer = 7 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setClientCustomer($var)
    {
        GPBUtil::checkString($var, True);
        $this->client_customer = $var;

        return $this;
    }

    /**
     * Output only. This is uniquely identifies a customer client link. Read only.
     *
     * Generated from protobuf field <code>optional int64 manager_link_id = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string
     */
    public function getManagerLinkId()
    {
        return isset($this->manager_link_id) ? $this->manager_link_id : 0;
    }

    public function hasManagerLinkId()
    {
        return isset($this->manager_link_id);
    }

    public function clearManagerLinkId()
    {
        unset($this->manager_link_id);
    }

    /**
     * Output only. This is uniquely identifies a customer client link. Read only.
     *
     * Generated from protobuf field <code>optional int64 manager_link_id = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string $var
     * @return $this
     */
    public function setManagerLinkId($var)
    {
        GPBUtil::checkInt64($var);
        $this->manager_link_id = $var;

        return $this;
    }

    /**
     * This is the status of the link between client and manager.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.ManagerLinkStatusEnum.ManagerLinkStatus status = 5;</code>
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * This is the status of the link between client and manager.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v13.enums.ManagerLinkStatusEnum.ManagerLinkStatus status = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V13\Enums\ManagerLinkStatusEnum\ManagerLinkStatus::class);
        $this->status = $var;

        return $this;
    }

    /**
     * The visibility of the link. Users can choose whether or not to see hidden
     * links in the Google Ads UI.
     * Default value is false
     *
     * Generated from protobuf field <code>optional bool hidden = 9;</code>
     * @return bool
     */
    public function getHidden()
    {
        return isset($this->hidden) ? $this->hidden : false;
    }

    public function hasHidden()
    {
        return isset($this->hidden);
    }

    public function clearHidden()
    {
        unset($this->hidden);
    }

    /**
     * The visibility of the link. Users can choose whether or not to see hidden
     * links in the Google Ads UI.
     * Default value is false
     *
     * Generated from protobuf field <code>optional bool hidden = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setHidden($var)
    {
        GPBUtil::checkBool($var);
        $this->hidden = $var;

        return $this;
    }

}

