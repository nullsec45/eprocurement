<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: temporal/api/nexus/v1/message.proto

namespace Temporal\Api\Nexus\V1\EndpointTarget;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Target an external server by URL.
 * At a later point, this will support providing credentials, in the meantime, an http.RoundTripper can be injected
 * into the server to modify the request.
 *
 * Generated from protobuf message <code>temporal.api.nexus.v1.EndpointTarget.External</code>
 */
class External extends \Google\Protobuf\Internal\Message
{
    /**
     * URL to call.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     */
    protected $url = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $url
     *           URL to call.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Temporal\Api\Nexus\V1\Message::initOnce();
        parent::__construct($data);
    }

    /**
     * URL to call.
     *
     * Generated from protobuf field <code>string url = 1;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * URL to call.
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

}

