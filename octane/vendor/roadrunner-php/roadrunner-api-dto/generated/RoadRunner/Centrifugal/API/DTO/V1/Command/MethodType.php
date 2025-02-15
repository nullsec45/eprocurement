<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: centrifugo/api/v1/api.proto

namespace RoadRunner\Centrifugal\API\DTO\V1\Command;

use UnexpectedValueException;

/**
 * Protobuf type <code>centrifugal.centrifugo.api.Command.MethodType</code>
 */
class MethodType
{
    /**
     * Generated from protobuf enum <code>PUBLISH = 0;</code>
     */
    const PUBLISH = 0;
    /**
     * Generated from protobuf enum <code>BROADCAST = 1;</code>
     */
    const BROADCAST = 1;
    /**
     * Generated from protobuf enum <code>UNSUBSCRIBE = 2;</code>
     */
    const UNSUBSCRIBE = 2;
    /**
     * Generated from protobuf enum <code>DISCONNECT = 3;</code>
     */
    const DISCONNECT = 3;
    /**
     * Generated from protobuf enum <code>PRESENCE = 4;</code>
     */
    const PRESENCE = 4;
    /**
     * Generated from protobuf enum <code>PRESENCE_STATS = 5;</code>
     */
    const PRESENCE_STATS = 5;
    /**
     * Generated from protobuf enum <code>HISTORY = 6;</code>
     */
    const HISTORY = 6;
    /**
     * Generated from protobuf enum <code>HISTORY_REMOVE = 7;</code>
     */
    const HISTORY_REMOVE = 7;
    /**
     * Generated from protobuf enum <code>CHANNELS = 8;</code>
     */
    const CHANNELS = 8;
    /**
     * Generated from protobuf enum <code>INFO = 9;</code>
     */
    const INFO = 9;
    /**
     * Generated from protobuf enum <code>RPC = 10;</code>
     */
    const RPC = 10;
    /**
     * Generated from protobuf enum <code>SUBSCRIBE = 11;</code>
     */
    const SUBSCRIBE = 11;
    /**
     * Generated from protobuf enum <code>REFRESH = 12;</code>
     */
    const REFRESH = 12;
    /**
     * Generated from protobuf enum <code>CONNECTIONS = 14;</code>
     */
    const CONNECTIONS = 14;
    /**
     * Generated from protobuf enum <code>UPDATE_USER_STATUS = 15;</code>
     */
    const UPDATE_USER_STATUS = 15;
    /**
     * Generated from protobuf enum <code>GET_USER_STATUS = 16;</code>
     */
    const GET_USER_STATUS = 16;
    /**
     * Generated from protobuf enum <code>DELETE_USER_STATUS = 17;</code>
     */
    const DELETE_USER_STATUS = 17;
    /**
     * Generated from protobuf enum <code>BLOCK_USER = 18;</code>
     */
    const BLOCK_USER = 18;
    /**
     * Generated from protobuf enum <code>UNBLOCK_USER = 19;</code>
     */
    const UNBLOCK_USER = 19;
    /**
     * Generated from protobuf enum <code>REVOKE_TOKEN = 20;</code>
     */
    const REVOKE_TOKEN = 20;
    /**
     * Generated from protobuf enum <code>INVALIDATE_USER_TOKENS = 21;</code>
     */
    const INVALIDATE_USER_TOKENS = 21;
    /**
     * Generated from protobuf enum <code>DEVICE_REGISTER = 22;</code>
     */
    const DEVICE_REGISTER = 22;
    /**
     * Generated from protobuf enum <code>DEVICE_UPDATE = 23;</code>
     */
    const DEVICE_UPDATE = 23;
    /**
     * Generated from protobuf enum <code>DEVICE_REMOVE = 24;</code>
     */
    const DEVICE_REMOVE = 24;
    /**
     * Generated from protobuf enum <code>DEVICE_LIST = 25;</code>
     */
    const DEVICE_LIST = 25;
    /**
     * Generated from protobuf enum <code>DEVICE_TOPIC_LIST = 26;</code>
     */
    const DEVICE_TOPIC_LIST = 26;
    /**
     * Generated from protobuf enum <code>DEVICE_TOPIC_UPDATE = 27;</code>
     */
    const DEVICE_TOPIC_UPDATE = 27;
    /**
     * Generated from protobuf enum <code>USER_TOPIC_LIST = 28;</code>
     */
    const USER_TOPIC_LIST = 28;
    /**
     * Generated from protobuf enum <code>USER_TOPIC_UPDATE = 29;</code>
     */
    const USER_TOPIC_UPDATE = 29;
    /**
     * Generated from protobuf enum <code>SEND_PUSH_NOTIFICATION = 30;</code>
     */
    const SEND_PUSH_NOTIFICATION = 30;
    /**
     * Generated from protobuf enum <code>UPDATE_PUSH_STATUS = 31;</code>
     */
    const UPDATE_PUSH_STATUS = 31;
    /**
     * Generated from protobuf enum <code>CANCEL_PUSH = 32;</code>
     */
    const CANCEL_PUSH = 32;
    /**
     * Generated from protobuf enum <code>RATE_LIMIT = 47;</code>
     */
    const RATE_LIMIT = 47;

    private static $valueToName = [
        self::PUBLISH => 'PUBLISH',
        self::BROADCAST => 'BROADCAST',
        self::UNSUBSCRIBE => 'UNSUBSCRIBE',
        self::DISCONNECT => 'DISCONNECT',
        self::PRESENCE => 'PRESENCE',
        self::PRESENCE_STATS => 'PRESENCE_STATS',
        self::HISTORY => 'HISTORY',
        self::HISTORY_REMOVE => 'HISTORY_REMOVE',
        self::CHANNELS => 'CHANNELS',
        self::INFO => 'INFO',
        self::RPC => 'RPC',
        self::SUBSCRIBE => 'SUBSCRIBE',
        self::REFRESH => 'REFRESH',
        self::CONNECTIONS => 'CONNECTIONS',
        self::UPDATE_USER_STATUS => 'UPDATE_USER_STATUS',
        self::GET_USER_STATUS => 'GET_USER_STATUS',
        self::DELETE_USER_STATUS => 'DELETE_USER_STATUS',
        self::BLOCK_USER => 'BLOCK_USER',
        self::UNBLOCK_USER => 'UNBLOCK_USER',
        self::REVOKE_TOKEN => 'REVOKE_TOKEN',
        self::INVALIDATE_USER_TOKENS => 'INVALIDATE_USER_TOKENS',
        self::DEVICE_REGISTER => 'DEVICE_REGISTER',
        self::DEVICE_UPDATE => 'DEVICE_UPDATE',
        self::DEVICE_REMOVE => 'DEVICE_REMOVE',
        self::DEVICE_LIST => 'DEVICE_LIST',
        self::DEVICE_TOPIC_LIST => 'DEVICE_TOPIC_LIST',
        self::DEVICE_TOPIC_UPDATE => 'DEVICE_TOPIC_UPDATE',
        self::USER_TOPIC_LIST => 'USER_TOPIC_LIST',
        self::USER_TOPIC_UPDATE => 'USER_TOPIC_UPDATE',
        self::SEND_PUSH_NOTIFICATION => 'SEND_PUSH_NOTIFICATION',
        self::UPDATE_PUSH_STATUS => 'UPDATE_PUSH_STATUS',
        self::CANCEL_PUSH => 'CANCEL_PUSH',
        self::RATE_LIMIT => 'RATE_LIMIT',
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

