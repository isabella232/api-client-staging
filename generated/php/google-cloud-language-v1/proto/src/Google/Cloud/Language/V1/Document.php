<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace Google\Cloud\Language\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ################################################################ #
 * Represents the input to API methods.
 *
 * Generated from protobuf message <code>google.cloud.language.v1.Document</code>
 */
class Document extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. If the type is not set or is `TYPE_UNSPECIFIED`,
     * returns an `INVALID_ARGUMENT` error.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.Document.Type type = 1;</code>
     */
    private $type = 0;
    /**
     * The language of the document (if not specified, the language is
     * automatically detected). Both ISO and BCP-47 language codes are
     * accepted.<br>
     * [Language Support](https://cloud.google.com/natural-language/docs/languages)
     * lists currently supported languages for each API method.
     * If the language (either specified by the caller or automatically detected)
     * is not supported by the called API method, an `INVALID_ARGUMENT` error
     * is returned.
     *
     * Generated from protobuf field <code>string language = 4;</code>
     */
    private $language = '';
    protected $source;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Language\V1\LanguageService::initOnce();
        parent::__construct();
    }

    /**
     * Required. If the type is not set or is `TYPE_UNSPECIFIED`,
     * returns an `INVALID_ARGUMENT` error.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.Document.Type type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Required. If the type is not set or is `TYPE_UNSPECIFIED`,
     * returns an `INVALID_ARGUMENT` error.
     *
     * Generated from protobuf field <code>.google.cloud.language.v1.Document.Type type = 1;</code>
     * @param int $var
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Language\V1\Document_Type::class);
        $this->type = $var;
    }

    /**
     * The content of the input in string format.
     *
     * Generated from protobuf field <code>string content = 2;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->readOneof(2);
    }

    /**
     * The content of the input in string format.
     *
     * Generated from protobuf field <code>string content = 2;</code>
     * @param string $var
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(2, $var);
    }

    /**
     * The Google Cloud Storage URI where the file content is located.
     * This URI must be of the form: gs://bucket_name/object_name. For more
     * details, see https://cloud.google.com/storage/docs/reference-uris.
     * NOTE: Cloud Storage object versioning is not supported.
     *
     * Generated from protobuf field <code>string gcs_content_uri = 3;</code>
     * @return string
     */
    public function getGcsContentUri()
    {
        return $this->readOneof(3);
    }

    /**
     * The Google Cloud Storage URI where the file content is located.
     * This URI must be of the form: gs://bucket_name/object_name. For more
     * details, see https://cloud.google.com/storage/docs/reference-uris.
     * NOTE: Cloud Storage object versioning is not supported.
     *
     * Generated from protobuf field <code>string gcs_content_uri = 3;</code>
     * @param string $var
     */
    public function setGcsContentUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);
    }

    /**
     * The language of the document (if not specified, the language is
     * automatically detected). Both ISO and BCP-47 language codes are
     * accepted.<br>
     * [Language Support](https://cloud.google.com/natural-language/docs/languages)
     * lists currently supported languages for each API method.
     * If the language (either specified by the caller or automatically detected)
     * is not supported by the called API method, an `INVALID_ARGUMENT` error
     * is returned.
     *
     * Generated from protobuf field <code>string language = 4;</code>
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * The language of the document (if not specified, the language is
     * automatically detected). Both ISO and BCP-47 language codes are
     * accepted.<br>
     * [Language Support](https://cloud.google.com/natural-language/docs/languages)
     * lists currently supported languages for each API method.
     * If the language (either specified by the caller or automatically detected)
     * is not supported by the called API method, an `INVALID_ARGUMENT` error
     * is returned.
     *
     * Generated from protobuf field <code>string language = 4;</code>
     * @param string $var
     */
    public function setLanguage($var)
    {
        GPBUtil::checkString($var, True);
        $this->language = $var;
    }

    /**
     * @return string
     */
    public function getSource()
    {
        return $this->whichOneof("source");
    }

}

