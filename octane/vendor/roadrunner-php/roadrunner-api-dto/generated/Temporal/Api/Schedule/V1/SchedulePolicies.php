<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/schedule/v1/message.proto

namespace Temporal\Api\Schedule\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.schedule.v1.SchedulePolicies</code>
 */
class SchedulePolicies extends \Google\Protobuf\Internal\Message
{
    /**
     * Policy for overlaps.
     * Note that this can be changed after a schedule has taken some actions,
     * and some changes might produce unintuitive results. In general, the later
     * policy overrides the earlier policy.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.ScheduleOverlapPolicy overlap_policy = 1;</code>
     */
    protected $overlap_policy = 0;
    /**
     * Policy for catchups:
     * If the Temporal server misses an action due to one or more components
     * being down, and comes back up, the action will be run if the scheduled
     * time is within this window from the current time.
     * This value defaults to one year, and can't be less than 10 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration catchup_window = 2;</code>
     */
    protected $catchup_window = null;
    /**
     * If true, and a workflow run fails or times out, turn on "paused".
     * This applies after retry policies: the full chain of retries must fail to
     * trigger a pause here.
     *
     * Generated from protobuf field <code>bool pause_on_failure = 3;</code>
     */
    protected $pause_on_failure = false;
    /**
     * If true, and the action would start a workflow, a timestamp will not be
     * appended to the scheduled workflow id.
     *
     * Generated from protobuf field <code>bool keep_original_workflow_id = 4;</code>
     */
    protected $keep_original_workflow_id = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $overlap_policy
     *           Policy for overlaps.
     *           Note that this can be changed after a schedule has taken some actions,
     *           and some changes might produce unintuitive results. In general, the later
     *           policy overrides the earlier policy.
     *     @type \Google\Protobuf\Duration $catchup_window
     *           Policy for catchups:
     *           If the Temporal server misses an action due to one or more components
     *           being down, and comes back up, the action will be run if the scheduled
     *           time is within this window from the current time.
     *           This value defaults to one year, and can't be less than 10 seconds.
     *     @type bool $pause_on_failure
     *           If true, and a workflow run fails or times out, turn on "paused".
     *           This applies after retry policies: the full chain of retries must fail to
     *           trigger a pause here.
     *     @type bool $keep_original_workflow_id
     *           If true, and the action would start a workflow, a timestamp will not be
     *           appended to the scheduled workflow id.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Schedule\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * Policy for overlaps.
     * Note that this can be changed after a schedule has taken some actions,
     * and some changes might produce unintuitive results. In general, the later
     * policy overrides the earlier policy.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.ScheduleOverlapPolicy overlap_policy = 1;</code>
     * @return int
     */
    public function getOverlapPolicy()
    {
        return $this->overlap_policy;
    }

    /**
     * Policy for overlaps.
     * Note that this can be changed after a schedule has taken some actions,
     * and some changes might produce unintuitive results. In general, the later
     * policy overrides the earlier policy.
     *
     * Generated from protobuf field <code>.temporal.api.enums.v1.ScheduleOverlapPolicy overlap_policy = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOverlapPolicy($var)
    {
        GPBUtil::checkEnum($var, \Temporal\Api\Enums\V1\ScheduleOverlapPolicy::class);
        $this->overlap_policy = $var;

        return $this;
    }

    /**
     * Policy for catchups:
     * If the Temporal server misses an action due to one or more components
     * being down, and comes back up, the action will be run if the scheduled
     * time is within this window from the current time.
     * This value defaults to one year, and can't be less than 10 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration catchup_window = 2;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getCatchupWindow()
    {
        return $this->catchup_window;
    }

    public function hasCatchupWindow()
    {
        return isset($this->catchup_window);
    }

    public function clearCatchupWindow()
    {
        unset($this->catchup_window);
    }

    /**
     * Policy for catchups:
     * If the Temporal server misses an action due to one or more components
     * being down, and comes back up, the action will be run if the scheduled
     * time is within this window from the current time.
     * This value defaults to one year, and can't be less than 10 seconds.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration catchup_window = 2;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setCatchupWindow($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->catchup_window = $var;

        return $this;
    }

    /**
     * If true, and a workflow run fails or times out, turn on "paused".
     * This applies after retry policies: the full chain of retries must fail to
     * trigger a pause here.
     *
     * Generated from protobuf field <code>bool pause_on_failure = 3;</code>
     * @return bool
     */
    public function getPauseOnFailure()
    {
        return $this->pause_on_failure;
    }

    /**
     * If true, and a workflow run fails or times out, turn on "paused".
     * This applies after retry policies: the full chain of retries must fail to
     * trigger a pause here.
     *
     * Generated from protobuf field <code>bool pause_on_failure = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setPauseOnFailure($var)
    {
        GPBUtil::checkBool($var);
        $this->pause_on_failure = $var;

        return $this;
    }

    /**
     * If true, and the action would start a workflow, a timestamp will not be
     * appended to the scheduled workflow id.
     *
     * Generated from protobuf field <code>bool keep_original_workflow_id = 4;</code>
     * @return bool
     */
    public function getKeepOriginalWorkflowId()
    {
        return $this->keep_original_workflow_id;
    }

    /**
     * If true, and the action would start a workflow, a timestamp will not be
     * appended to the scheduled workflow id.
     *
     * Generated from protobuf field <code>bool keep_original_workflow_id = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setKeepOriginalWorkflowId($var)
    {
        GPBUtil::checkBool($var);
        $this->keep_original_workflow_id = $var;

        return $this;
    }

}

