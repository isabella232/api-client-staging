<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/text_annotation.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Detected page from OCR.
 *
 * Protobuf type <code>Google\Cloud\Vision\V1\Page</code>
 */
class Page extends \Google\Protobuf\Internal\Message
{
    /**
     * Additional information detected on the page.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.TextAnnotation.TextProperty property = 1;</code>
     */
    private $property = null;
    /**
     * Page width in pixels.
     *
     * Generated from protobuf field <code>int32 width = 2;</code>
     */
    private $width = 0;
    /**
     * Page height in pixels.
     *
     * Generated from protobuf field <code>int32 height = 3;</code>
     */
    private $height = 0;
    /**
     * List of blocks of text, images etc on this page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.Block blocks = 4;</code>
     */
    private $blocks;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\TextAnnotation::initOnce();
        parent::__construct();
    }

    /**
     * Additional information detected on the page.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.TextAnnotation.TextProperty property = 1;</code>
     * @return \Google\Cloud\Vision\V1\TextAnnotation_TextProperty
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Additional information detected on the page.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.TextAnnotation.TextProperty property = 1;</code>
     * @param \Google\Cloud\Vision\V1\TextAnnotation_TextProperty $var
     */
    public function setProperty(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\TextAnnotation_TextProperty::class);
        $this->property = $var;
    }

    /**
     * Page width in pixels.
     *
     * Generated from protobuf field <code>int32 width = 2;</code>
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Page width in pixels.
     *
     * Generated from protobuf field <code>int32 width = 2;</code>
     * @param int $var
     */
    public function setWidth($var)
    {
        GPBUtil::checkInt32($var);
        $this->width = $var;
    }

    /**
     * Page height in pixels.
     *
     * Generated from protobuf field <code>int32 height = 3;</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Page height in pixels.
     *
     * Generated from protobuf field <code>int32 height = 3;</code>
     * @param int $var
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->height = $var;
    }

    /**
     * List of blocks of text, images etc on this page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.Block blocks = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlocks()
    {
        return $this->blocks;
    }

    /**
     * List of blocks of text, images etc on this page.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.Block blocks = 4;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setBlocks(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\Block::class);
        $this->blocks = $arr;
    }

}

