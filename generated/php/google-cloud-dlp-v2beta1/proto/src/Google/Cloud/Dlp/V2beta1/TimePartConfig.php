<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2beta1/dlp.proto

namespace Google\Cloud\Dlp\V2beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * For use with `Date`, `Timestamp`, and `TimeOfDay`, extract or preserve a
 * portion of the value.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2beta1.TimePartConfig</code>
 */
class TimePartConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.TimePartConfig.TimePart part_to_extract = 1;</code>
     */
    private $part_to_extract = 0;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2Beta1\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.TimePartConfig.TimePart part_to_extract = 1;</code>
     * @return int
     */
    public function getPartToExtract()
    {
        return $this->part_to_extract;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2beta1.TimePartConfig.TimePart part_to_extract = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPartToExtract($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dlp\V2beta1\TimePartConfig_TimePart::class);
        $this->part_to_extract = $var;

        return $this;
    }

}

