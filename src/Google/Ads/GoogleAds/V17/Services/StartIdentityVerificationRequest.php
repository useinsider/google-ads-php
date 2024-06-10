<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v17/services/identity_verification_service.proto

namespace Google\Ads\GoogleAds\V17\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for
 *  [IdentityVerificationService.StartIdentityVerification].
 *
 * Generated from protobuf message <code>google.ads.googleads.v17.services.StartIdentityVerificationRequest</code>
 */
class StartIdentityVerificationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The Id of the customer for whom we are creating this
     * verification.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $customer_id = '';
    /**
     * Required. The verification program type for which we want to start the
     * verification.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.IdentityVerificationProgramEnum.IdentityVerificationProgram verification_program = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $verification_program = 0;

    /**
     * @param string $customerId          Required. The Id of the customer for whom we are creating this
     *                                    verification.
     * @param int    $verificationProgram Required. The verification program type for which we want to start the
     *                                    verification.
     *                                    For allowed values, use constants defined on {@see \Google\Ads\GoogleAds\V17\Enums\IdentityVerificationProgramEnum\IdentityVerificationProgram}
     *
     * @return \Google\Ads\GoogleAds\V17\Services\StartIdentityVerificationRequest
     *
     * @experimental
     */
    public static function build(string $customerId, int $verificationProgram): self
    {
        return (new self())
            ->setCustomerId($customerId)
            ->setVerificationProgram($verificationProgram);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $customer_id
     *           Required. The Id of the customer for whom we are creating this
     *           verification.
     *     @type int $verification_program
     *           Required. The verification program type for which we want to start the
     *           verification.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V17\Services\IdentityVerificationService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The Id of the customer for whom we are creating this
     * verification.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customer_id;
    }

    /**
     * Required. The Id of the customer for whom we are creating this
     * verification.
     *
     * Generated from protobuf field <code>string customer_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_id = $var;

        return $this;
    }

    /**
     * Required. The verification program type for which we want to start the
     * verification.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.IdentityVerificationProgramEnum.IdentityVerificationProgram verification_program = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getVerificationProgram()
    {
        return $this->verification_program;
    }

    /**
     * Required. The verification program type for which we want to start the
     * verification.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v17.enums.IdentityVerificationProgramEnum.IdentityVerificationProgram verification_program = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setVerificationProgram($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V17\Enums\IdentityVerificationProgramEnum\IdentityVerificationProgram::class);
        $this->verification_program = $var;

        return $this;
    }

}

