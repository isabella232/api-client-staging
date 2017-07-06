<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/text_annotation.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Structural unit of text representing a number of words in certain order.
 *
 * Protobuf type <code>Google\Cloud\Vision\V1\Paragraph</code>
 */
class Paragraph extends \Google\Protobuf\Internal\Message
{
    /**
     * Additional information detected for the paragraph.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.TextAnnotation.TextProperty property = 1;</code>
     */
    private $property = null;
    /**
     * The bounding box for the paragraph.
     * The vertices are in the order of top-left, top-right, bottom-right,
     * bottom-left. When a rotation of the bounding box is detected the rotation
     * is represented as around the top-left corner as defined when the text is
     * read in the 'natural' orientation.
     * For example:
     *   * when the text is horizontal it might look like:
     *      0----1
     *      |    |
     *      3----2
     *   * when it's rotated 180 degrees around the top-left corner it becomes:
     *      2----3
     *      |    |
     *      1----0
     *   and the vertice order will still be (0, 1, 2, 3).
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly bounding_box = 2;</code>
     */
    private $bounding_box = null;
    /**
     * List of words in this paragraph.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.Word words = 3;</code>
     */
    private $words;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Vision\V1\TextAnnotation::initOnce();
        parent::__construct();
    }

    /**
     * Additional information detected for the paragraph.
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.TextAnnotation.TextProperty property = 1;</code>
     * @return \Google\Cloud\Vision\V1\TextAnnotation_TextProperty
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * Additional information detected for the paragraph.
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
     * The bounding box for the paragraph.
     * The vertices are in the order of top-left, top-right, bottom-right,
     * bottom-left. When a rotation of the bounding box is detected the rotation
     * is represented as around the top-left corner as defined when the text is
     * read in the 'natural' orientation.
     * For example:
     *   * when the text is horizontal it might look like:
     *      0----1
     *      |    |
     *      3----2
     *   * when it's rotated 180 degrees around the top-left corner it becomes:
     *      2----3
     *      |    |
     *      1----0
     *   and the vertice order will still be (0, 1, 2, 3).
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly bounding_box = 2;</code>
     * @return \Google\Cloud\Vision\V1\BoundingPoly
     */
    public function getBoundingBox()
    {
        return $this->bounding_box;
    }

    /**
     * The bounding box for the paragraph.
     * The vertices are in the order of top-left, top-right, bottom-right,
     * bottom-left. When a rotation of the bounding box is detected the rotation
     * is represented as around the top-left corner as defined when the text is
     * read in the 'natural' orientation.
     * For example:
     *   * when the text is horizontal it might look like:
     *      0----1
     *      |    |
     *      3----2
     *   * when it's rotated 180 degrees around the top-left corner it becomes:
     *      2----3
     *      |    |
     *      1----0
     *   and the vertice order will still be (0, 1, 2, 3).
     *
     * Generated from protobuf field <code>.google.cloud.vision.v1.BoundingPoly bounding_box = 2;</code>
     * @param \Google\Cloud\Vision\V1\BoundingPoly $var
     */
    public function setBoundingBox(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Vision\V1\BoundingPoly::class);
        $this->bounding_box = $var;
    }

    /**
     * List of words in this paragraph.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.Word words = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getWords()
    {
        return $this->words;
    }

    /**
     * List of words in this paragraph.
     *
     * Generated from protobuf field <code>repeated .google.cloud.vision.v1.Word words = 3;</code>
     * @param array|\Google\Protobuf\Internal\RepeatedField $var
     */
    public function setWords(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Vision\V1\Word::class);
        $this->words = $arr;
    }

}

