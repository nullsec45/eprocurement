<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/enums/v1/failed_cause.proto

namespace Temporal\Api\Enums\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>temporal.api.enums.v1.ResourceExhaustedCause</code>
 */
class ResourceExhaustedCause
{
    /**
     * Generated from protobuf enum <code>RESOURCE_EXHAUSTED_CAUSE_UNSPECIFIED = 0;</code>
     */
    const RESOURCE_EXHAUSTED_CAUSE_UNSPECIFIED = 0;
    /**
     * Caller exceeds request per second limit.
     *
     * Generated from protobuf enum <code>RESOURCE_EXHAUSTED_CAUSE_RPS_LIMIT = 1;</code>
     */
    const RESOURCE_EXHAUSTED_CAUSE_RPS_LIMIT = 1;
    /**
     * Caller exceeds max concurrent request limit.
     *
     * Generated from protobuf enum <code>RESOURCE_EXHAUSTED_CAUSE_CONCURRENT_LIMIT = 2;</code>
     */
    const RESOURCE_EXHAUSTED_CAUSE_CONCURRENT_LIMIT = 2;
    /**
     * System overloaded.
     *
     * Generated from protobuf enum <code>RESOURCE_EXHAUSTED_CAUSE_SYSTEM_OVERLOADED = 3;</code>
     */
    const RESOURCE_EXHAUSTED_CAUSE_SYSTEM_OVERLOADED = 3;
    /**
     * Namespace exceeds persistence rate limit.
     *
     * Generated from protobuf enum <code>RESOURCE_EXHAUSTED_CAUSE_PERSISTENCE_LIMIT = 4;</code>
     */
    const RESOURCE_EXHAUSTED_CAUSE_PERSISTENCE_LIMIT = 4;
    /**
     * Workflow is busy
     *
     * Generated from protobuf enum <code>RESOURCE_EXHAUSTED_CAUSE_BUSY_WORKFLOW = 5;</code>
     */
    const RESOURCE_EXHAUSTED_CAUSE_BUSY_WORKFLOW = 5;
    /**
     * Caller exceeds action per second limit.
     *
     * Generated from protobuf enum <code>RESOURCE_EXHAUSTED_CAUSE_APS_LIMIT = 6;</code>
     */
    const RESOURCE_EXHAUSTED_CAUSE_APS_LIMIT = 6;
    /**
     * Persistence storage limit exceeded.
     *
     * Generated from protobuf enum <code>RESOURCE_EXHAUSTED_CAUSE_PERSISTENCE_STORAGE_LIMIT = 7;</code>
     */
    const RESOURCE_EXHAUSTED_CAUSE_PERSISTENCE_STORAGE_LIMIT = 7;
    /**
     * Circuit breaker is open/half-open.
     *
     * Generated from protobuf enum <code>RESOURCE_EXHAUSTED_CAUSE_CIRCUIT_BREAKER_OPEN = 8;</code>
     */
    const RESOURCE_EXHAUSTED_CAUSE_CIRCUIT_BREAKER_OPEN = 8;

    private static $valueToName = [
        self::RESOURCE_EXHAUSTED_CAUSE_UNSPECIFIED => 'RESOURCE_EXHAUSTED_CAUSE_UNSPECIFIED',
        self::RESOURCE_EXHAUSTED_CAUSE_RPS_LIMIT => 'RESOURCE_EXHAUSTED_CAUSE_RPS_LIMIT',
        self::RESOURCE_EXHAUSTED_CAUSE_CONCURRENT_LIMIT => 'RESOURCE_EXHAUSTED_CAUSE_CONCURRENT_LIMIT',
        self::RESOURCE_EXHAUSTED_CAUSE_SYSTEM_OVERLOADED => 'RESOURCE_EXHAUSTED_CAUSE_SYSTEM_OVERLOADED',
        self::RESOURCE_EXHAUSTED_CAUSE_PERSISTENCE_LIMIT => 'RESOURCE_EXHAUSTED_CAUSE_PERSISTENCE_LIMIT',
        self::RESOURCE_EXHAUSTED_CAUSE_BUSY_WORKFLOW => 'RESOURCE_EXHAUSTED_CAUSE_BUSY_WORKFLOW',
        self::RESOURCE_EXHAUSTED_CAUSE_APS_LIMIT => 'RESOURCE_EXHAUSTED_CAUSE_APS_LIMIT',
        self::RESOURCE_EXHAUSTED_CAUSE_PERSISTENCE_STORAGE_LIMIT => 'RESOURCE_EXHAUSTED_CAUSE_PERSISTENCE_STORAGE_LIMIT',
        self::RESOURCE_EXHAUSTED_CAUSE_CIRCUIT_BREAKER_OPEN => 'RESOURCE_EXHAUSTED_CAUSE_CIRCUIT_BREAKER_OPEN',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

