<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.GetDeploymentReachabilityResponse</code>
 */
class GetDeploymentReachabilityResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.deployment.v1.DeploymentInfo deployment_info = 1;</code>
     */
    protected $deployment_info = null;
    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.DeploymentReachability reachability = 2;</code>
     */
    protected $reachability = 0;
    /**
     * Reachability level might come from server cache. This timestamp specifies when the value
     * was actually calculated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 3;</code>
     */
    protected $last_update_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Deployment\V1\DeploymentInfo $deployment_info
     *     @type int $reachability
     *     @type \Google\Protobuf\Timestamp $last_update_time
     *           Reachability level might come from server cache. This timestamp specifies when the value
     *           was actually calculated.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.deployment.v1.DeploymentInfo deployment_info = 1;</code>
     * @return \Temporal\Api\Deployment\V1\DeploymentInfo|null
     */
    public function getDeploymentInfo()
    {
        return $this->deployment_info;
    }

    public function hasDeploymentInfo()
    {
        return isset($this->deployment_info);
    }

    public function clearDeploymentInfo()
    {
        unset($this->deployment_info);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.deployment.v1.DeploymentInfo deployment_info = 1;</code>
     * @param \Temporal\Api\Deployment\V1\DeploymentInfo $var
     * @return $this
     */
    public function setDeploymentInfo($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Deployment\V1\DeploymentInfo::class);
        $this->deployment_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.DeploymentReachability reachability = 2;</code>
     * @return int
     */
    public function getReachability()
    {
        return $this->reachability;
    }

    /**
     * Generated from protobuf field <code>.temporal.api.enums.v1.DeploymentReachability reachability = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setReachability($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\DeploymentReachability::class);
        $this->reachability = $var;

        return $this;
    }

    /**
     * Reachability level might come from server cache. This timestamp specifies when the value
     * was actually calculated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastUpdateTime()
    {
        return $this->last_update_time;
    }

    public function hasLastUpdateTime()
    {
        return isset($this->last_update_time);
    }

    public function clearLastUpdateTime()
    {
        unset($this->last_update_time);
    }

    /**
     * Reachability level might come from server cache. This timestamp specifies when the value
     * was actually calculated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_update_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_update_time = $var;

        return $this;
    }

}

