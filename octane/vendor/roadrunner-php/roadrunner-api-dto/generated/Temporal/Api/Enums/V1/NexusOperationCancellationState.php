<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/enums/v1/common.proto

namespace Temporal\Api\Enums\V1;

use UnexpectedValueException;

/**
 * State of a Nexus operation cancellation.
 *
 * Protobuf type <code>temporal.api.enums.v1.NexusOperationCancellationState</code>
 */
class NexusOperationCancellationState
{
    /**
     * Default value, unspecified state.
     *
     * Generated from protobuf enum <code>NEXUS_OPERATION_CANCELLATION_STATE_UNSPECIFIED = 0;</code>
     */
    const NEXUS_OPERATION_CANCELLATION_STATE_UNSPECIFIED = 0;
    /**
     * Cancellation request is in the queue waiting to be executed or is currently executing.
     *
     * Generated from protobuf enum <code>NEXUS_OPERATION_CANCELLATION_STATE_SCHEDULED = 1;</code>
     */
    const NEXUS_OPERATION_CANCELLATION_STATE_SCHEDULED = 1;
    /**
     * Cancellation request has failed with a retryable error and is backing off before the next attempt.
     *
     * Generated from protobuf enum <code>NEXUS_OPERATION_CANCELLATION_STATE_BACKING_OFF = 2;</code>
     */
    const NEXUS_OPERATION_CANCELLATION_STATE_BACKING_OFF = 2;
    /**
     * Cancellation request succeeded.
     *
     * Generated from protobuf enum <code>NEXUS_OPERATION_CANCELLATION_STATE_SUCCEEDED = 3;</code>
     */
    const NEXUS_OPERATION_CANCELLATION_STATE_SUCCEEDED = 3;
    /**
     * Cancellation request failed with a non-retryable error.
     *
     * Generated from protobuf enum <code>NEXUS_OPERATION_CANCELLATION_STATE_FAILED = 4;</code>
     */
    const NEXUS_OPERATION_CANCELLATION_STATE_FAILED = 4;
    /**
     * The associated operation timed out - exceeded the user supplied schedule-to-close timeout.
     *
     * Generated from protobuf enum <code>NEXUS_OPERATION_CANCELLATION_STATE_TIMED_OUT = 5;</code>
     */
    const NEXUS_OPERATION_CANCELLATION_STATE_TIMED_OUT = 5;
    /**
     * Cancellation request is blocked (eg: by circuit breaker).
     *
     * Generated from protobuf enum <code>NEXUS_OPERATION_CANCELLATION_STATE_BLOCKED = 6;</code>
     */
    const NEXUS_OPERATION_CANCELLATION_STATE_BLOCKED = 6;

    private static $valueToName = [
        self::NEXUS_OPERATION_CANCELLATION_STATE_UNSPECIFIED => 'NEXUS_OPERATION_CANCELLATION_STATE_UNSPECIFIED',
        self::NEXUS_OPERATION_CANCELLATION_STATE_SCHEDULED => 'NEXUS_OPERATION_CANCELLATION_STATE_SCHEDULED',
        self::NEXUS_OPERATION_CANCELLATION_STATE_BACKING_OFF => 'NEXUS_OPERATION_CANCELLATION_STATE_BACKING_OFF',
        self::NEXUS_OPERATION_CANCELLATION_STATE_SUCCEEDED => 'NEXUS_OPERATION_CANCELLATION_STATE_SUCCEEDED',
        self::NEXUS_OPERATION_CANCELLATION_STATE_FAILED => 'NEXUS_OPERATION_CANCELLATION_STATE_FAILED',
        self::NEXUS_OPERATION_CANCELLATION_STATE_TIMED_OUT => 'NEXUS_OPERATION_CANCELLATION_STATE_TIMED_OUT',
        self::NEXUS_OPERATION_CANCELLATION_STATE_BLOCKED => 'NEXUS_OPERATION_CANCELLATION_STATE_BLOCKED',
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

