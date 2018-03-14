<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.privacy.dlp.v2.InspectDataSourceDetails.RequestedOptions</code>
 */
class InspectDataSourceDetails_RequestedOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * If run with an inspect template, a snapshot of it's state at the time of
     * this run.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectTemplate snapshot_inspect_template = 1;</code>
     */
    private $snapshot_inspect_template = null;
    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectJobConfig job_config = 3;</code>
     */
    private $job_config = null;

    public function __construct() {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct();
    }

    /**
     * If run with an inspect template, a snapshot of it's state at the time of
     * this run.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectTemplate snapshot_inspect_template = 1;</code>
     * @return \Google\Cloud\Dlp\V2\InspectTemplate
     */
    public function getSnapshotInspectTemplate()
    {
        return $this->snapshot_inspect_template;
    }

    /**
     * If run with an inspect template, a snapshot of it's state at the time of
     * this run.
     *
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectTemplate snapshot_inspect_template = 1;</code>
     * @param \Google\Cloud\Dlp\V2\InspectTemplate $var
     * @return $this
     */
    public function setSnapshotInspectTemplate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\InspectTemplate::class);
        $this->snapshot_inspect_template = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectJobConfig job_config = 3;</code>
     * @return \Google\Cloud\Dlp\V2\InspectJobConfig
     */
    public function getJobConfig()
    {
        return $this->job_config;
    }

    /**
     * Generated from protobuf field <code>.google.privacy.dlp.v2.InspectJobConfig job_config = 3;</code>
     * @param \Google\Cloud\Dlp\V2\InspectJobConfig $var
     * @return $this
     */
    public function setJobConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dlp\V2\InspectJobConfig::class);
        $this->job_config = $var;

        return $this;
    }

}
