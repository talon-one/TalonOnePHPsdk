<?php
/**
 * AccessLogEntry
 *
 * PHP version 5
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Talon.One API
 *
 * Use the Talon.One API to integrate with your application and to manage applications and campaigns:  - Use the operations in the [Integration API section](#integration-api) are used to integrate with our platform - Use the operation in the [Management API section](#management-api) to manage applications and campaigns.  ## Determining the base URL of the endpoints  The API is available at the same hostname as your Campaign Manager deployment. For example, if you are reading this page at `https://mycompany.talon.one/docs/api/`, the URL for the [updateCustomerSession](https://docs.talon.one/integration-api/#operation/updateCustomerSessionV2) endpoint is `https://mycompany.talon.one/v2/customer_sessions/{Id}`
 *
 * The version of the OpenAPI document: 1.0.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.3.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace TalonOne\Client\Model;

use \ArrayAccess;
use \TalonOne\Client\ObjectSerializer;

/**
 * AccessLogEntry Class Doc Comment
 *
 * @category Class
 * @description Log of application accesses.
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccessLogEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccessLogEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uuid' => 'string',
        'status' => 'int',
        'method' => 'string',
        'requestUri' => 'string',
        'time' => '\DateTime',
        'requestPayload' => 'string',
        'responsePayload' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'uuid' => null,
        'status' => null,
        'method' => null,
        'requestUri' => null,
        'time' => 'date-time',
        'requestPayload' => null,
        'responsePayload' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'uuid' => 'uuid',
        'status' => 'status',
        'method' => 'method',
        'requestUri' => 'requestUri',
        'time' => 'time',
        'requestPayload' => 'requestPayload',
        'responsePayload' => 'responsePayload'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uuid' => 'setUuid',
        'status' => 'setStatus',
        'method' => 'setMethod',
        'requestUri' => 'setRequestUri',
        'time' => 'setTime',
        'requestPayload' => 'setRequestPayload',
        'responsePayload' => 'setResponsePayload'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uuid' => 'getUuid',
        'status' => 'getStatus',
        'method' => 'getMethod',
        'requestUri' => 'getRequestUri',
        'time' => 'getTime',
        'requestPayload' => 'getRequestPayload',
        'responsePayload' => 'getResponsePayload'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['uuid'] = isset($data['uuid']) ? $data['uuid'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['requestUri'] = isset($data['requestUri']) ? $data['requestUri'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['requestPayload'] = isset($data['requestPayload']) ? $data['requestPayload'] : null;
        $this->container['responsePayload'] = isset($data['responsePayload']) ? $data['responsePayload'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['uuid'] === null) {
            $invalidProperties[] = "'uuid' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['method'] === null) {
            $invalidProperties[] = "'method' can't be null";
        }
        if ($this->container['requestUri'] === null) {
            $invalidProperties[] = "'requestUri' can't be null";
        }
        if ($this->container['time'] === null) {
            $invalidProperties[] = "'time' can't be null";
        }
        if ($this->container['requestPayload'] === null) {
            $invalidProperties[] = "'requestPayload' can't be null";
        }
        if ($this->container['responsePayload'] === null) {
            $invalidProperties[] = "'responsePayload' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets uuid
     *
     * @return string
     */
    public function getUuid()
    {
        return $this->container['uuid'];
    }

    /**
     * Sets uuid
     *
     * @param string $uuid UUID reference of request.
     *
     * @return $this
     */
    public function setUuid($uuid)
    {
        $this->container['uuid'] = $uuid;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int $status HTTP status code of response.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string $method HTTP method of request.
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets requestUri
     *
     * @return string
     */
    public function getRequestUri()
    {
        return $this->container['requestUri'];
    }

    /**
     * Sets requestUri
     *
     * @param string $requestUri target URI of request
     *
     * @return $this
     */
    public function setRequestUri($requestUri)
    {
        $this->container['requestUri'] = $requestUri;

        return $this;
    }

    /**
     * Gets time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     *
     * @param \DateTime $time timestamp of request
     *
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets requestPayload
     *
     * @return string
     */
    public function getRequestPayload()
    {
        return $this->container['requestPayload'];
    }

    /**
     * Sets requestPayload
     *
     * @param string $requestPayload payload of request
     *
     * @return $this
     */
    public function setRequestPayload($requestPayload)
    {
        $this->container['requestPayload'] = $requestPayload;

        return $this;
    }

    /**
     * Gets responsePayload
     *
     * @return string
     */
    public function getResponsePayload()
    {
        return $this->container['responsePayload'];
    }

    /**
     * Sets responsePayload
     *
     * @param string $responsePayload payload of response
     *
     * @return $this
     */
    public function setResponsePayload($responsePayload)
    {
        $this->container['responsePayload'] = $responsePayload;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


