<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/group_service.proto

namespace Google\Monitoring\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `UpdateGroup` request.
 *
 * Generated from protobuf message <code>google.monitoring.v3.UpdateGroupRequest</code>
 */
class UpdateGroupRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The new definition of the group.  All fields of the existing group,
     * excepting `name`, are replaced with the corresponding fields of this group.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Group group = 2;</code>
     */
    private $group = null;
    /**
     * If true, validate this request but do not update the existing group.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     */
    private $validate_only = false;

    public function __construct() {
        \GPBMetadata\Google\Monitoring\V3\GroupService::initOnce();
        parent::__construct();
    }

    /**
     * The new definition of the group.  All fields of the existing group,
     * excepting `name`, are replaced with the corresponding fields of this group.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Group group = 2;</code>
     * @return \Google\Monitoring\V3\Group
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * The new definition of the group.  All fields of the existing group,
     * excepting `name`, are replaced with the corresponding fields of this group.
     *
     * Generated from protobuf field <code>.google.monitoring.v3.Group group = 2;</code>
     * @param \Google\Monitoring\V3\Group $var
     */
    public function setGroup(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Monitoring\V3\Group::class);
        $this->group = $var;
    }

    /**
     * If true, validate this request but do not update the existing group.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * If true, validate this request but do not update the existing group.
     *
     * Generated from protobuf field <code>bool validate_only = 3;</code>
     * @param bool $var
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;
    }

}

