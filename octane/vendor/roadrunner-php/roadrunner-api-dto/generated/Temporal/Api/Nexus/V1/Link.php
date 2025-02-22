<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/nexus/v1/message.proto

namespace Temporal\Api\Nexus\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>temporal.api.nexus.v1.Link</code>
 */
class Link extends \Google\Protobuf\Internal\Message
{
    /**
     * See https://github.com/nexus-rpc/api/blob/main/SPEC.md#links.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     */
    protected $url = '';
    /**
     * Generated from protobuf field <code>string type = 2;</code>
     */
    protected $type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $url
     *           See https://github.com/nexus-rpc/api/blob/main/SPEC.md#links.
     *     @type string $type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Nexus\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * See https://github.com/nexus-rpc/api/blob/main/SPEC.md#links.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * See https://github.com/nexus-rpc/api/blob/main/SPEC.md#links.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string type = 2;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

}

