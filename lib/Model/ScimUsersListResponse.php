<?php
/**
 * ScimUsersListResponse
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
 * Use the Talon.One API to integrate with your application and to manage applications and campaigns:  - Use the operations in the [Integration API section](#integration-api) are used to integrate with our platform - Use the operation in the [Management API section](#management-api) to manage applications and campaigns.  ## Determining the base URL of the endpoints  The API is available at the same hostname as your Campaign Manager deployment. For example, if you access the Campaign Manager at `https://yourbaseurl.talon.one/`, the URL for the [updateCustomerSessionV2](https://docs.talon.one/integration-api#operation/updateCustomerSessionV2) endpoint is `https://yourbaseurl.talon.one/v2/customer_sessions/{Id}`
 *
 * The version of the OpenAPI document: 
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
 * ScimUsersListResponse Class Doc Comment
 *
 * @category Class
 * @description List of users that have been provisioned using the SCIM protocol with an identity provider, for example, Microsoft Entra ID.
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ScimUsersListResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScimUsersListResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'resources' => '\TalonOne\Client\Model\ScimUser[]',
        'schemas' => 'string[]',
        'totalResults' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'resources' => null,
        'schemas' => null,
        'totalResults' => null
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
        'resources' => 'Resources',
        'schemas' => 'schemas',
        'totalResults' => 'totalResults'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'resources' => 'setResources',
        'schemas' => 'setSchemas',
        'totalResults' => 'setTotalResults'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'resources' => 'getResources',
        'schemas' => 'getSchemas',
        'totalResults' => 'getTotalResults'
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
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
        $this->container['schemas'] = isset($data['schemas']) ? $data['schemas'] : null;
        $this->container['totalResults'] = isset($data['totalResults']) ? $data['totalResults'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['resources'] === null) {
            $invalidProperties[] = "'resources' can't be null";
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
     * Gets resources
     *
     * @return \TalonOne\Client\Model\ScimUser[]
     */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
     * Sets resources
     *
     * @param \TalonOne\Client\Model\ScimUser[] $resources resources
     *
     * @return $this
     */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;

        return $this;
    }

    /**
     * Gets schemas
     *
     * @return string[]|null
     */
    public function getSchemas()
    {
        return $this->container['schemas'];
    }

    /**
     * Sets schemas
     *
     * @param string[]|null $schemas schemas
     *
     * @return $this
     */
    public function setSchemas($schemas)
    {
        $this->container['schemas'] = $schemas;

        return $this;
    }

    /**
     * Gets totalResults
     *
     * @return int|null
     */
    public function getTotalResults()
    {
        return $this->container['totalResults'];
    }

    /**
     * Sets totalResults
     *
     * @param int|null $totalResults Number of total results in the response.
     *
     * @return $this
     */
    public function setTotalResults($totalResults)
    {
        $this->container['totalResults'] = $totalResults;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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


