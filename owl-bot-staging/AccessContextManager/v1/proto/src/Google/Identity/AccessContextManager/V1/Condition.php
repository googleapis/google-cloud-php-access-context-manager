<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/identity/accesscontextmanager/v1/access_level.proto

namespace Google\Identity\AccessContextManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A condition necessary for an `AccessLevel` to be granted. The Condition is an
 * AND over its fields. So a Condition is true if: 1) the request IP is from one
 * of the listed subnetworks AND 2) the originating device complies with the
 * listed device policy AND 3) all listed access levels are granted AND 4) the
 * request was sent at a time allowed by the DateTimeRestriction.
 *
 * Generated from protobuf message <code>google.identity.accesscontextmanager.v1.Condition</code>
 */
class Condition extends \Google\Protobuf\Internal\Message
{
    /**
     * CIDR block IP subnetwork specification. May be IPv4 or IPv6. Note that for
     * a CIDR IP address block, the specified IP address portion must be properly
     * truncated (i.e. all the host bits must be zero) or the input is considered
     * malformed. For example, "192.0.2.0/24" is accepted but "192.0.2.1/24" is
     * not. Similarly, for IPv6, "2001:db8::/32" is accepted whereas
     * "2001:db8::1/32" is not. The originating IP of a request must be in one of
     * the listed subnets in order for this Condition to be true. If empty, all IP
     * addresses are allowed.
     *
     * Generated from protobuf field <code>repeated string ip_subnetworks = 1;</code>
     */
    private $ip_subnetworks;
    /**
     * Device specific restrictions, all restrictions must hold for the
     * Condition to be true. If not specified, all devices are allowed.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.DevicePolicy device_policy = 2;</code>
     */
    protected $device_policy = null;
    /**
     * A list of other access levels defined in the same `Policy`, referenced by
     * resource name. Referencing an `AccessLevel` which does not exist is an
     * error. All access levels listed must be granted for the Condition
     * to be true. Example:
     * "`accessPolicies/MY_POLICY/accessLevels/LEVEL_NAME"`
     *
     * Generated from protobuf field <code>repeated string required_access_levels = 3;</code>
     */
    private $required_access_levels;
    /**
     * Whether to negate the Condition. If true, the Condition becomes a NAND over
     * its non-empty fields, each field must be false for the Condition overall to
     * be satisfied. Defaults to false.
     *
     * Generated from protobuf field <code>bool negate = 5;</code>
     */
    protected $negate = false;
    /**
     * The request must be made by one of the provided user or service
     * accounts. Groups are not supported.
     * Syntax:
     * `user:{emailid}`
     * `serviceAccount:{emailid}`
     * If not specified, a request may come from any user.
     *
     * Generated from protobuf field <code>repeated string members = 6;</code>
     */
    private $members;
    /**
     * The request must originate from one of the provided countries/regions.
     * Must be valid ISO 3166-1 alpha-2 codes.
     *
     * Generated from protobuf field <code>repeated string regions = 7;</code>
     */
    private $regions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $ip_subnetworks
     *           CIDR block IP subnetwork specification. May be IPv4 or IPv6. Note that for
     *           a CIDR IP address block, the specified IP address portion must be properly
     *           truncated (i.e. all the host bits must be zero) or the input is considered
     *           malformed. For example, "192.0.2.0/24" is accepted but "192.0.2.1/24" is
     *           not. Similarly, for IPv6, "2001:db8::/32" is accepted whereas
     *           "2001:db8::1/32" is not. The originating IP of a request must be in one of
     *           the listed subnets in order for this Condition to be true. If empty, all IP
     *           addresses are allowed.
     *     @type \Google\Identity\AccessContextManager\V1\DevicePolicy $device_policy
     *           Device specific restrictions, all restrictions must hold for the
     *           Condition to be true. If not specified, all devices are allowed.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $required_access_levels
     *           A list of other access levels defined in the same `Policy`, referenced by
     *           resource name. Referencing an `AccessLevel` which does not exist is an
     *           error. All access levels listed must be granted for the Condition
     *           to be true. Example:
     *           "`accessPolicies/MY_POLICY/accessLevels/LEVEL_NAME"`
     *     @type bool $negate
     *           Whether to negate the Condition. If true, the Condition becomes a NAND over
     *           its non-empty fields, each field must be false for the Condition overall to
     *           be satisfied. Defaults to false.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $members
     *           The request must be made by one of the provided user or service
     *           accounts. Groups are not supported.
     *           Syntax:
     *           `user:{emailid}`
     *           `serviceAccount:{emailid}`
     *           If not specified, a request may come from any user.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $regions
     *           The request must originate from one of the provided countries/regions.
     *           Must be valid ISO 3166-1 alpha-2 codes.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Identity\Accesscontextmanager\V1\AccessLevel::initOnce();
        parent::__construct($data);
    }

    /**
     * CIDR block IP subnetwork specification. May be IPv4 or IPv6. Note that for
     * a CIDR IP address block, the specified IP address portion must be properly
     * truncated (i.e. all the host bits must be zero) or the input is considered
     * malformed. For example, "192.0.2.0/24" is accepted but "192.0.2.1/24" is
     * not. Similarly, for IPv6, "2001:db8::/32" is accepted whereas
     * "2001:db8::1/32" is not. The originating IP of a request must be in one of
     * the listed subnets in order for this Condition to be true. If empty, all IP
     * addresses are allowed.
     *
     * Generated from protobuf field <code>repeated string ip_subnetworks = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getIpSubnetworks()
    {
        return $this->ip_subnetworks;
    }

    /**
     * CIDR block IP subnetwork specification. May be IPv4 or IPv6. Note that for
     * a CIDR IP address block, the specified IP address portion must be properly
     * truncated (i.e. all the host bits must be zero) or the input is considered
     * malformed. For example, "192.0.2.0/24" is accepted but "192.0.2.1/24" is
     * not. Similarly, for IPv6, "2001:db8::/32" is accepted whereas
     * "2001:db8::1/32" is not. The originating IP of a request must be in one of
     * the listed subnets in order for this Condition to be true. If empty, all IP
     * addresses are allowed.
     *
     * Generated from protobuf field <code>repeated string ip_subnetworks = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setIpSubnetworks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ip_subnetworks = $arr;

        return $this;
    }

    /**
     * Device specific restrictions, all restrictions must hold for the
     * Condition to be true. If not specified, all devices are allowed.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.DevicePolicy device_policy = 2;</code>
     * @return \Google\Identity\AccessContextManager\V1\DevicePolicy|null
     */
    public function getDevicePolicy()
    {
        return $this->device_policy;
    }

    public function hasDevicePolicy()
    {
        return isset($this->device_policy);
    }

    public function clearDevicePolicy()
    {
        unset($this->device_policy);
    }

    /**
     * Device specific restrictions, all restrictions must hold for the
     * Condition to be true. If not specified, all devices are allowed.
     *
     * Generated from protobuf field <code>.google.identity.accesscontextmanager.v1.DevicePolicy device_policy = 2;</code>
     * @param \Google\Identity\AccessContextManager\V1\DevicePolicy $var
     * @return $this
     */
    public function setDevicePolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Identity\AccessContextManager\V1\DevicePolicy::class);
        $this->device_policy = $var;

        return $this;
    }

    /**
     * A list of other access levels defined in the same `Policy`, referenced by
     * resource name. Referencing an `AccessLevel` which does not exist is an
     * error. All access levels listed must be granted for the Condition
     * to be true. Example:
     * "`accessPolicies/MY_POLICY/accessLevels/LEVEL_NAME"`
     *
     * Generated from protobuf field <code>repeated string required_access_levels = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRequiredAccessLevels()
    {
        return $this->required_access_levels;
    }

    /**
     * A list of other access levels defined in the same `Policy`, referenced by
     * resource name. Referencing an `AccessLevel` which does not exist is an
     * error. All access levels listed must be granted for the Condition
     * to be true. Example:
     * "`accessPolicies/MY_POLICY/accessLevels/LEVEL_NAME"`
     *
     * Generated from protobuf field <code>repeated string required_access_levels = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRequiredAccessLevels($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->required_access_levels = $arr;

        return $this;
    }

    /**
     * Whether to negate the Condition. If true, the Condition becomes a NAND over
     * its non-empty fields, each field must be false for the Condition overall to
     * be satisfied. Defaults to false.
     *
     * Generated from protobuf field <code>bool negate = 5;</code>
     * @return bool
     */
    public function getNegate()
    {
        return $this->negate;
    }

    /**
     * Whether to negate the Condition. If true, the Condition becomes a NAND over
     * its non-empty fields, each field must be false for the Condition overall to
     * be satisfied. Defaults to false.
     *
     * Generated from protobuf field <code>bool negate = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setNegate($var)
    {
        GPBUtil::checkBool($var);
        $this->negate = $var;

        return $this;
    }

    /**
     * The request must be made by one of the provided user or service
     * accounts. Groups are not supported.
     * Syntax:
     * `user:{emailid}`
     * `serviceAccount:{emailid}`
     * If not specified, a request may come from any user.
     *
     * Generated from protobuf field <code>repeated string members = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * The request must be made by one of the provided user or service
     * accounts. Groups are not supported.
     * Syntax:
     * `user:{emailid}`
     * `serviceAccount:{emailid}`
     * If not specified, a request may come from any user.
     *
     * Generated from protobuf field <code>repeated string members = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMembers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->members = $arr;

        return $this;
    }

    /**
     * The request must originate from one of the provided countries/regions.
     * Must be valid ISO 3166-1 alpha-2 codes.
     *
     * Generated from protobuf field <code>repeated string regions = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRegions()
    {
        return $this->regions;
    }

    /**
     * The request must originate from one of the provided countries/regions.
     * Must be valid ISO 3166-1 alpha-2 codes.
     *
     * Generated from protobuf field <code>repeated string regions = 7;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRegions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->regions = $arr;

        return $this;
    }

}

