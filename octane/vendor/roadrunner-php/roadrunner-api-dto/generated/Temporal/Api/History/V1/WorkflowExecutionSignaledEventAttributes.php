<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/history/v1/message.proto

namespace Temporal\Api\History\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.history.v1.WorkflowExecutionSignaledEventAttributes</code>
 */
class WorkflowExecutionSignaledEventAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * The name/type of the signal to fire
     *
     * Generated from protobuf field <code>string signal_name = 1;</code>
     */
    protected $signal_name = '';
    /**
     * Will be deserialized and provided as argument(s) to the signal handler
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 2;</code>
     */
    protected $input = null;
    /**
     * id of the worker/client who sent this signal
     *
     * Generated from protobuf field <code>string identity = 3;</code>
     */
    protected $identity = '';
    /**
     * Headers that were passed by the sender of the signal and copied by temporal 
     * server into the workflow task.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 4;</code>
     */
    protected $header = null;
    /**
     * This field is deprecated and never respected. It should always be set to false.
     *
     * Generated from protobuf field <code>bool skip_generate_workflow_task = 5 [deprecated = true];</code>
     * @deprecated
     */
    protected $skip_generate_workflow_task = false;
    /**
     * When signal origin is a workflow execution, this field is set.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution external_workflow_execution = 6;</code>
     */
    protected $external_workflow_execution = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $signal_name
     *           The name/type of the signal to fire
     *     @type \Temporal\Api\Common\V1\Payloads $input
     *           Will be deserialized and provided as argument(s) to the signal handler
     *     @type string $identity
     *           id of the worker/client who sent this signal
     *     @type \Temporal\Api\Common\V1\Header $header
     *           Headers that were passed by the sender of the signal and copied by temporal 
     *           server into the workflow task.
     *     @type bool $skip_generate_workflow_task
     *           This field is deprecated and never respected. It should always be set to false.
     *     @type \Temporal\Api\Common\V1\WorkflowExecution $external_workflow_execution
     *           When signal origin is a workflow execution, this field is set.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\History\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * The name/type of the signal to fire
     *
     * Generated from protobuf field <code>string signal_name = 1;</code>
     * @return string
     */
    public function getSignalName()
    {
        return $this->signal_name;
    }

    /**
     * The name/type of the signal to fire
     *
     * Generated from protobuf field <code>string signal_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSignalName($var)
    {
        GPBUtil::checkString($var, True);
        $this->signal_name = $var;

        return $this;
    }

    /**
     * Will be deserialized and provided as argument(s) to the signal handler
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 2;</code>
     * @return \Temporal\Api\Common\V1\Payloads|null
     */
    public function getInput()
    {
        return $this->input;
    }

    public function hasInput()
    {
        return isset($this->input);
    }

    public function clearInput()
    {
        unset($this->input);
    }

    /**
     * Will be deserialized and provided as argument(s) to the signal handler
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Payloads input = 2;</code>
     * @param \Temporal\Api\Common\V1\Payloads $var
     * @return $this
     */
    public function setInput($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Payloads::class);
        $this->input = $var;

        return $this;
    }

    /**
     * id of the worker/client who sent this signal
     *
     * Generated from protobuf field <code>string identity = 3;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * id of the worker/client who sent this signal
     *
     * Generated from protobuf field <code>string identity = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentity($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity = $var;

        return $this;
    }

    /**
     * Headers that were passed by the sender of the signal and copied by temporal 
     * server into the workflow task.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 4;</code>
     * @return \Temporal\Api\Common\V1\Header|null
     */
    public function getHeader()
    {
        return $this->header;
    }

    public function hasHeader()
    {
        return isset($this->header);
    }

    public function clearHeader()
    {
        unset($this->header);
    }

    /**
     * Headers that were passed by the sender of the signal and copied by temporal 
     * server into the workflow task.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.Header header = 4;</code>
     * @param \Temporal\Api\Common\V1\Header $var
     * @return $this
     */
    public function setHeader($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\Header::class);
        $this->header = $var;

        return $this;
    }

    /**
     * This field is deprecated and never respected. It should always be set to false.
     *
     * Generated from protobuf field <code>bool skip_generate_workflow_task = 5 [deprecated = true];</code>
     * @return bool
     * @deprecated
     */
    public function getSkipGenerateWorkflowTask()
    {
        if ($this->skip_generate_workflow_task !== false) {
            @trigger_error('skip_generate_workflow_task is deprecated.', E_USER_DEPRECATED);
        }
        return $this->skip_generate_workflow_task;
    }

    /**
     * This field is deprecated and never respected. It should always be set to false.
     *
     * Generated from protobuf field <code>bool skip_generate_workflow_task = 5 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     * @deprecated
     */
    public function setSkipGenerateWorkflowTask($var)
    {
        @trigger_error('skip_generate_workflow_task is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkBool($var);
        $this->skip_generate_workflow_task = $var;

        return $this;
    }

    /**
     * When signal origin is a workflow execution, this field is set.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution external_workflow_execution = 6;</code>
     * @return \Temporal\Api\Common\V1\WorkflowExecution|null
     */
    public function getExternalWorkflowExecution()
    {
        return $this->external_workflow_execution;
    }

    public function hasExternalWorkflowExecution()
    {
        return isset($this->external_workflow_execution);
    }

    public function clearExternalWorkflowExecution()
    {
        unset($this->external_workflow_execution);
    }

    /**
     * When signal origin is a workflow execution, this field is set.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.WorkflowExecution external_workflow_execution = 6;</code>
     * @param \Temporal\Api\Common\V1\WorkflowExecution $var
     * @return $this
     */
    public function setExternalWorkflowExecution($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\WorkflowExecution::class);
        $this->external_workflow_execution = $var;

        return $this;
    }

}

