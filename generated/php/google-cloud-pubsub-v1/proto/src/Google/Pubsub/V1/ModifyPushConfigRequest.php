<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/pubsub/v1/pubsub.proto

namespace Google\Pubsub\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the ModifyPushConfig method.
 *
 * Generated from protobuf message <code>google.pubsub.v1.ModifyPushConfigRequest</code>
 */
class ModifyPushConfigRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the subscription.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     */
    private $subscription = '';
    /**
     * The push configuration for future deliveries.
     * An empty `pushConfig` indicates that the Pub/Sub system should
     * stop pushing messages from the given subscription and allow
     * messages to be pulled and acknowledged - effectively pausing
     * the subscription if `Pull` is not called.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PushConfig push_config = 2;</code>
     */
    private $push_config = null;

    public function __construct() {
        \GPBMetadata\Google\Pubsub\V1\Pubsub::initOnce();
        parent::__construct();
    }

    /**
     * The name of the subscription.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     * @return string
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * The name of the subscription.
     * Format is `projects/{project}/subscriptions/{sub}`.
     *
     * Generated from protobuf field <code>string subscription = 1;</code>
     * @param string $var
     */
    public function setSubscription($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription = $var;
    }

    /**
     * The push configuration for future deliveries.
     * An empty `pushConfig` indicates that the Pub/Sub system should
     * stop pushing messages from the given subscription and allow
     * messages to be pulled and acknowledged - effectively pausing
     * the subscription if `Pull` is not called.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PushConfig push_config = 2;</code>
     * @return \Google\Pubsub\V1\PushConfig
     */
    public function getPushConfig()
    {
        return $this->push_config;
    }

    /**
     * The push configuration for future deliveries.
     * An empty `pushConfig` indicates that the Pub/Sub system should
     * stop pushing messages from the given subscription and allow
     * messages to be pulled and acknowledged - effectively pausing
     * the subscription if `Pull` is not called.
     *
     * Generated from protobuf field <code>.google.pubsub.v1.PushConfig push_config = 2;</code>
     * @param \Google\Pubsub\V1\PushConfig $var
     */
    public function setPushConfig(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Pubsub\V1\PushConfig::class);
        $this->push_config = $var;
    }

}

