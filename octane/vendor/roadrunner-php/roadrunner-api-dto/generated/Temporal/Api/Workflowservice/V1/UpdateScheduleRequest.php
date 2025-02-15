<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/workflowservice/v1/request_response.proto

namespace Temporal\Api\Workflowservice\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.workflowservice.v1.UpdateScheduleRequest</code>
 */
class UpdateScheduleRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The namespace of the schedule to update.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     */
    protected $namespace = '';
    /**
     * The id of the schedule to update.
     *
     * Generated from protobuf field <code>string schedule_id = 2;</code>
     */
    protected $schedule_id = '';
    /**
     * The new schedule. The four main fields of the schedule (spec, action,
     * policies, state) are replaced completely by the values in this message.
     *
     * Generated from protobuf field <code>.temporal.api.schedule.v1.Schedule schedule = 3;</code>
     */
    protected $schedule = null;
    /**
     * This can be the value of conflict_token from a DescribeScheduleResponse,
     * which will cause this request to fail if the schedule has been modified
     * between the Describe and this Update.
     * If missing, the schedule will be updated unconditionally.
     *
     * Generated from protobuf field <code>bytes conflict_token = 4;</code>
     */
    protected $conflict_token = '';
    /**
     * The identity of the client who initiated this request.
     *
     * Generated from protobuf field <code>string identity = 5;</code>
     */
    protected $identity = '';
    /**
     * A unique identifier for this update request for idempotence. Typically UUIDv4.
     *
     * Generated from protobuf field <code>string request_id = 6;</code>
     */
    protected $request_id = '';
    /**
     * Schedule search attributes to be updated.
     * Do not set this field if you do not want to update the search attributes.
     * A non-null empty object will set the search attributes to an empty map.
     * Note: you cannot only update the search attributes with `UpdateScheduleRequest`,
     * you must also set the `schedule` field; otherwise, it will unset the schedule.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 7;</code>
     */
    protected $search_attributes = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $namespace
     *           The namespace of the schedule to update.
     *     @type string $schedule_id
     *           The id of the schedule to update.
     *     @type \Temporal\Api\Schedule\V1\Schedule $schedule
     *           The new schedule. The four main fields of the schedule (spec, action,
     *           policies, state) are replaced completely by the values in this message.
     *     @type string $conflict_token
     *           This can be the value of conflict_token from a DescribeScheduleResponse,
     *           which will cause this request to fail if the schedule has been modified
     *           between the Describe and this Update.
     *           If missing, the schedule will be updated unconditionally.
     *     @type string $identity
     *           The identity of the client who initiated this request.
     *     @type string $request_id
     *           A unique identifier for this update request for idempotence. Typically UUIDv4.
     *     @type \Temporal\Api\Common\V1\SearchAttributes $search_attributes
     *           Schedule search attributes to be updated.
     *           Do not set this field if you do not want to update the search attributes.
     *           A non-null empty object will set the search attributes to an empty map.
     *           Note: you cannot only update the search attributes with `UpdateScheduleRequest`,
     *           you must also set the `schedule` field; otherwise, it will unset the schedule.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Workflowservice\V1\RequestResponse::initOnce();
        parent::__construct($data);
    }

    /**
     * The namespace of the schedule to update.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @return string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * The namespace of the schedule to update.
     *
     * Generated from protobuf field <code>string namespace = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->namespace = $var;

        return $this;
    }

    /**
     * The id of the schedule to update.
     *
     * Generated from protobuf field <code>string schedule_id = 2;</code>
     * @return string
     */
    public function getScheduleId()
    {
        return $this->schedule_id;
    }

    /**
     * The id of the schedule to update.
     *
     * Generated from protobuf field <code>string schedule_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setScheduleId($var)
    {
        GPBUtil::checkString($var, True);
        $this->schedule_id = $var;

        return $this;
    }

    /**
     * The new schedule. The four main fields of the schedule (spec, action,
     * policies, state) are replaced completely by the values in this message.
     *
     * Generated from protobuf field <code>.temporal.api.schedule.v1.Schedule schedule = 3;</code>
     * @return \Temporal\Api\Schedule\V1\Schedule|null
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    public function hasSchedule()
    {
        return isset($this->schedule);
    }

    public function clearSchedule()
    {
        unset($this->schedule);
    }

    /**
     * The new schedule. The four main fields of the schedule (spec, action,
     * policies, state) are replaced completely by the values in this message.
     *
     * Generated from protobuf field <code>.temporal.api.schedule.v1.Schedule schedule = 3;</code>
     * @param \Temporal\Api\Schedule\V1\Schedule $var
     * @return $this
     */
    public function setSchedule($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Schedule\V1\Schedule::class);
        $this->schedule = $var;

        return $this;
    }

    /**
     * This can be the value of conflict_token from a DescribeScheduleResponse,
     * which will cause this request to fail if the schedule has been modified
     * between the Describe and this Update.
     * If missing, the schedule will be updated unconditionally.
     *
     * Generated from protobuf field <code>bytes conflict_token = 4;</code>
     * @return string
     */
    public function getConflictToken()
    {
        return $this->conflict_token;
    }

    /**
     * This can be the value of conflict_token from a DescribeScheduleResponse,
     * which will cause this request to fail if the schedule has been modified
     * between the Describe and this Update.
     * If missing, the schedule will be updated unconditionally.
     *
     * Generated from protobuf field <code>bytes conflict_token = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setConflictToken($var)
    {
        GPBUtil::checkString($var, False);
        $this->conflict_token = $var;

        return $this;
    }

    /**
     * The identity of the client who initiated this request.
     *
     * Generated from protobuf field <code>string identity = 5;</code>
     * @return string
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * The identity of the client who initiated this request.
     *
     * Generated from protobuf field <code>string identity = 5;</code>
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
     * A unique identifier for this update request for idempotence. Typically UUIDv4.
     *
     * Generated from protobuf field <code>string request_id = 6;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * A unique identifier for this update request for idempotence. Typically UUIDv4.
     *
     * Generated from protobuf field <code>string request_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Schedule search attributes to be updated.
     * Do not set this field if you do not want to update the search attributes.
     * A non-null empty object will set the search attributes to an empty map.
     * Note: you cannot only update the search attributes with `UpdateScheduleRequest`,
     * you must also set the `schedule` field; otherwise, it will unset the schedule.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 7;</code>
     * @return \Temporal\Api\Common\V1\SearchAttributes|null
     */
    public function getSearchAttributes()
    {
        return $this->search_attributes;
    }

    public function hasSearchAttributes()
    {
        return isset($this->search_attributes);
    }

    public function clearSearchAttributes()
    {
        unset($this->search_attributes);
    }

    /**
     * Schedule search attributes to be updated.
     * Do not set this field if you do not want to update the search attributes.
     * A non-null empty object will set the search attributes to an empty map.
     * Note: you cannot only update the search attributes with `UpdateScheduleRequest`,
     * you must also set the `schedule` field; otherwise, it will unset the schedule.
     *
     * Generated from protobuf field <code>.temporal.api.common.v1.SearchAttributes search_attributes = 7;</code>
     * @param \Temporal\Api\Common\V1\SearchAttributes $var
     * @return $this
     */
    public function setSearchAttributes($var)
    {
        GPBUtil::checkMessage($var, \Temporal\Api\Common\V1\SearchAttributes::class);
        $this->search_attributes = $var;

        return $this;
    }

}

