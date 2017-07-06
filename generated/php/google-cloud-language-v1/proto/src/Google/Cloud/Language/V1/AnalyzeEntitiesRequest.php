<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace Google\Cloud\Language\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The entity analysis request message.
 *
 * Protobuf type <code>Google\Cloud\Language\V1\AnalyzeEntitiesRequest</code>
 */
class AnalyzeEntitiesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.Document document = 1;</code>
     */
    private $document = null;
    /**
     * The encoding type used by the API to calculate offsets.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.EncodingType encoding_type = 2;</code>
     */
    private $encoding_type = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Language\V1\LanguageService::initOnce();
        parent::__construct();
    }

    /**
     * Input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.Document document = 1;</code>
     * @return \Google\Cloud\Language\V1\Document
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Input document.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.Document document = 1;</code>
     * @param \Google\Cloud\Language\V1\Document $var
     */
    public function setDocument(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Language\V1\Document::class);
        $this->document = $var;
    }

    /**
     * The encoding type used by the API to calculate offsets.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.EncodingType encoding_type = 2;</code>
     * @return int
     */
    public function getEncodingType()
    {
        return $this->encoding_type;
    }

    /**
     * The encoding type used by the API to calculate offsets.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.EncodingType encoding_type = 2;</code>
     * @param int $var
     */
    public function setEncodingType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1\EncodingType::class);
        $this->encoding_type = $var;
    }

}

