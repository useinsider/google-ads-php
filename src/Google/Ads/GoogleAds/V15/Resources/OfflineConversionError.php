<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v15/resources/offline_conversion_upload_client_summary.proto

namespace Google\Ads\GoogleAds\V15\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Possible errors for offline conversion client summary.
 *
 * Generated from protobuf message <code>google.ads.googleads.v15.resources.OfflineConversionError</code>
 */
class OfflineConversionError extends \Google\Protobuf\Internal\Message
{
    protected $error_code;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $collection_size_error
     *           Output only. Collection size error.
     *     @type int $conversion_adjustment_upload_error
     *           Output only. Conversion adjustment upload error.
     *     @type int $conversion_upload_error
     *           Output only. Conversion upload error.
     *     @type int $date_error
     *           Output only. Date error.
     *     @type int $distinct_error
     *           Output only. Distinct error.
     *     @type int $field_error
     *           Output only. Field error.
     *     @type int $mutate_error
     *           Output only. Mutate error.
     *     @type int $not_allowlisted_error
     *           Output only. Not allowlisted error.
     *     @type int $string_format_error
     *           Output only. String format error.
     *     @type int $string_length_error
     *           Output only. String length error.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V15\Resources\OfflineConversionUploadClientSummary::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Collection size error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.CollectionSizeErrorEnum.CollectionSizeError collection_size_error = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getCollectionSizeError()
    {
        return $this->readOneof(1);
    }

    public function hasCollectionSizeError()
    {
        return $this->hasOneof(1);
    }

    /**
     * Output only. Collection size error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.CollectionSizeErrorEnum.CollectionSizeError collection_size_error = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setCollectionSizeError($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Errors\CollectionSizeErrorEnum\CollectionSizeError::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Output only. Conversion adjustment upload error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.ConversionAdjustmentUploadErrorEnum.ConversionAdjustmentUploadError conversion_adjustment_upload_error = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getConversionAdjustmentUploadError()
    {
        return $this->readOneof(2);
    }

    public function hasConversionAdjustmentUploadError()
    {
        return $this->hasOneof(2);
    }

    /**
     * Output only. Conversion adjustment upload error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.ConversionAdjustmentUploadErrorEnum.ConversionAdjustmentUploadError conversion_adjustment_upload_error = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setConversionAdjustmentUploadError($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Errors\ConversionAdjustmentUploadErrorEnum\ConversionAdjustmentUploadError::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Output only. Conversion upload error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.ConversionUploadErrorEnum.ConversionUploadError conversion_upload_error = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getConversionUploadError()
    {
        return $this->readOneof(3);
    }

    public function hasConversionUploadError()
    {
        return $this->hasOneof(3);
    }

    /**
     * Output only. Conversion upload error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.ConversionUploadErrorEnum.ConversionUploadError conversion_upload_error = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setConversionUploadError($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Errors\ConversionUploadErrorEnum\ConversionUploadError::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Output only. Date error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.DateErrorEnum.DateError date_error = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getDateError()
    {
        return $this->readOneof(4);
    }

    public function hasDateError()
    {
        return $this->hasOneof(4);
    }

    /**
     * Output only. Date error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.DateErrorEnum.DateError date_error = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setDateError($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Errors\DateErrorEnum\DateError::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Output only. Distinct error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.DistinctErrorEnum.DistinctError distinct_error = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getDistinctError()
    {
        return $this->readOneof(5);
    }

    public function hasDistinctError()
    {
        return $this->hasOneof(5);
    }

    /**
     * Output only. Distinct error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.DistinctErrorEnum.DistinctError distinct_error = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setDistinctError($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Errors\DistinctErrorEnum\DistinctError::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Output only. Field error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.FieldErrorEnum.FieldError field_error = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getFieldError()
    {
        return $this->readOneof(6);
    }

    public function hasFieldError()
    {
        return $this->hasOneof(6);
    }

    /**
     * Output only. Field error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.FieldErrorEnum.FieldError field_error = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setFieldError($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Errors\FieldErrorEnum\FieldError::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Output only. Mutate error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.MutateErrorEnum.MutateError mutate_error = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getMutateError()
    {
        return $this->readOneof(7);
    }

    public function hasMutateError()
    {
        return $this->hasOneof(7);
    }

    /**
     * Output only. Mutate error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.MutateErrorEnum.MutateError mutate_error = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setMutateError($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Errors\MutateErrorEnum\MutateError::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Output only. Not allowlisted error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.NotAllowlistedErrorEnum.NotAllowlistedError not_allowlisted_error = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getNotAllowlistedError()
    {
        return $this->readOneof(8);
    }

    public function hasNotAllowlistedError()
    {
        return $this->hasOneof(8);
    }

    /**
     * Output only. Not allowlisted error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.NotAllowlistedErrorEnum.NotAllowlistedError not_allowlisted_error = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setNotAllowlistedError($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Errors\NotAllowlistedErrorEnum\NotAllowlistedError::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * Output only. String format error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.StringFormatErrorEnum.StringFormatError string_format_error = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStringFormatError()
    {
        return $this->readOneof(9);
    }

    public function hasStringFormatError()
    {
        return $this->hasOneof(9);
    }

    /**
     * Output only. String format error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.StringFormatErrorEnum.StringFormatError string_format_error = 9 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStringFormatError($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Errors\StringFormatErrorEnum\StringFormatError::class);
        $this->writeOneof(9, $var);

        return $this;
    }

    /**
     * Output only. String length error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.StringLengthErrorEnum.StringLengthError string_length_error = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getStringLengthError()
    {
        return $this->readOneof(10);
    }

    public function hasStringLengthError()
    {
        return $this->hasOneof(10);
    }

    /**
     * Output only. String length error.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v15.errors.StringLengthErrorEnum.StringLengthError string_length_error = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setStringLengthError($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V15\Errors\StringLengthErrorEnum\StringLengthError::class);
        $this->writeOneof(10, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->whichOneof("error_code");
    }

}

