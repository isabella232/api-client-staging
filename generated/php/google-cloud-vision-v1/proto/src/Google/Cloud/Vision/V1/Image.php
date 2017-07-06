<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Client image to perform Google Cloud Vision API tasks over.
 *
 * Protobuf type <code>Google\Cloud\Vision\V1\Image</code>
 */
class Image extends \Google\Protobuf\Internal\Message
{
    /**
     * Image content, represented as a stream of bytes.
     * Note: as with all `bytes` fields, protobuffers use a pure binary
     * representation, whereas JSON representations use base64.
     *
     * Generated from protobuf field <code>bytes content = 1;</code>
     */
    private $content = '';
    /**
     * Google Cloud Storage image location. If both `content` and `source`
     * are provided for an image, `content` takes precedence and is
     * used to perform the image annotation request.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ImageSource source = 2;</code>
     */
    private $source = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct();
    }

    /**
     * Image content, represented as a stream of bytes.
     * Note: as with all `bytes` fields, protobuffers use a pure binary
     * representation, whereas JSON representations use base64.
     *
     * Generated from protobuf field <code>bytes content = 1;</code>
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Image content, represented as a stream of bytes.
     * Note: as with all `bytes` fields, protobuffers use a pure binary
     * representation, whereas JSON representations use base64.
     *
     * Generated from protobuf field <code>bytes content = 1;</code>
     * @param string $var
     */
    public function setContent($var)
    {
        GPBUtil::checkString($var, False);
        $this->content = $var;
    }

    /**
     * Google Cloud Storage image location. If both `content` and `source`
     * are provided for an image, `content` takes precedence and is
     * used to perform the image annotation request.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ImageSource source = 2;</code>
     * @return \Google\Cloud\Vision\V1\ImageSource
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Google Cloud Storage image location. If both `content` and `source`
     * are provided for an image, `content` takes precedence and is
     * used to perform the image annotation request.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.ImageSource source = 2;</code>
     * @param \Google\Cloud\Vision\V1\ImageSource $var
     */
    public function setSource(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\ImageSource::class);
        $this->source = $var;
    }

}

