<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/update/v1/message.proto

namespace Temporal\Api\Update\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The data needed by a client to refer to a previously invoked Workflow Update.
 *
 * Generated from protobuf message <code>temporal.api.update.v1.UpdateRef</code>
 */
class UpdateRef extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 1;</code>
     */
    protected $workflow_execution = null;
    /**
     * Generated from protobuf field <code>string update_id = 2;</code>
     */
    protected $update_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Temporal\Api\Common\V1\WorkflowExecution $workflow_execution
     *     @type string $update_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Update\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 1;</code>
     * @return \Temporal\Api\Common\V1\WorkflowExecution|null
     */
    public function getWorkflowExecution()
    {
        return $this->workflow_execution;
    }

    public function hasWorkflowExecution()
    {
        return isset($this->workflow_execution);
    }

    public function clearWorkflowExecution()
    {
        unset($this->workflow_execution);
    }

    /**
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution workflow_execution = 1;</code>
     * @param \Temporal\Api\Common\V1\WorkflowExecution $var
     * @return $this
     */
    public function setWorkflowExecution($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowExecution::class);
        $this->workflow_execution = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string update_id = 2;</code>
     * @return string
     */
    public function getUpdateId()
    {
        return $this->update_id;
    }

    /**
     * Generated from protobuf field <code>string update_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUpdateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->update_id = $var;

        return $this;
    }

}

