<?php
/**
 * ScimServiceProviderConfigResponse
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
 * ScimServiceProviderConfigResponse Class Doc Comment
 *
 * @category Class
 * @description Service provider configuration details.
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ScimServiceProviderConfigResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ScimServiceProviderConfigResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bulk' => '\TalonOne\Client\Model\ScimServiceProviderConfigResponseBulk',
        'changePassword' => '\TalonOne\Client\Model\ScimServiceProviderConfigResponseChangePassword',
        'documentationUri' => 'string',
        'filter' => '\TalonOne\Client\Model\ScimServiceProviderConfigResponseFilter',
        'patch' => '\TalonOne\Client\Model\ScimServiceProviderConfigResponsePatch',
        'schemas' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'bulk' => null,
        'changePassword' => null,
        'documentationUri' => null,
        'filter' => null,
        'patch' => null,
        'schemas' => null
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
        'bulk' => 'bulk',
        'changePassword' => 'changePassword',
        'documentationUri' => 'documentationUri',
        'filter' => 'filter',
        'patch' => 'patch',
        'schemas' => 'schemas'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bulk' => 'setBulk',
        'changePassword' => 'setChangePassword',
        'documentationUri' => 'setDocumentationUri',
        'filter' => 'setFilter',
        'patch' => 'setPatch',
        'schemas' => 'setSchemas'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bulk' => 'getBulk',
        'changePassword' => 'getChangePassword',
        'documentationUri' => 'getDocumentationUri',
        'filter' => 'getFilter',
        'patch' => 'getPatch',
        'schemas' => 'getSchemas'
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
        $this->container['bulk'] = isset($data['bulk']) ? $data['bulk'] : null;
        $this->container['changePassword'] = isset($data['changePassword']) ? $data['changePassword'] : null;
        $this->container['documentationUri'] = isset($data['documentationUri']) ? $data['documentationUri'] : null;
        $this->container['filter'] = isset($data['filter']) ? $data['filter'] : null;
        $this->container['patch'] = isset($data['patch']) ? $data['patch'] : null;
        $this->container['schemas'] = isset($data['schemas']) ? $data['schemas'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets bulk
     *
     * @return \TalonOne\Client\Model\ScimServiceProviderConfigResponseBulk|null
     */
    public function getBulk()
    {
        return $this->container['bulk'];
    }

    /**
     * Sets bulk
     *
     * @param \TalonOne\Client\Model\ScimServiceProviderConfigResponseBulk|null $bulk bulk
     *
     * @return $this
     */
    public function setBulk($bulk)
    {
        $this->container['bulk'] = $bulk;

        return $this;
    }

    /**
     * Gets changePassword
     *
     * @return \TalonOne\Client\Model\ScimServiceProviderConfigResponseChangePassword|null
     */
    public function getChangePassword()
    {
        return $this->container['changePassword'];
    }

    /**
     * Sets changePassword
     *
     * @param \TalonOne\Client\Model\ScimServiceProviderConfigResponseChangePassword|null $changePassword changePassword
     *
     * @return $this
     */
    public function setChangePassword($changePassword)
    {
        $this->container['changePassword'] = $changePassword;

        return $this;
    }

    /**
     * Gets documentationUri
     *
     * @return string|null
     */
    public function getDocumentationUri()
    {
        return $this->container['documentationUri'];
    }

    /**
     * Sets documentationUri
     *
     * @param string|null $documentationUri The URI that points to the SCIM service provider's documentation, providing further details about the service's capabilities and usage.
     *
     * @return $this
     */
    public function setDocumentationUri($documentationUri)
    {
        $this->container['documentationUri'] = $documentationUri;

        return $this;
    }

    /**
     * Gets filter
     *
     * @return \TalonOne\Client\Model\ScimServiceProviderConfigResponseFilter|null
     */
    public function getFilter()
    {
        return $this->container['filter'];
    }

    /**
     * Sets filter
     *
     * @param \TalonOne\Client\Model\ScimServiceProviderConfigResponseFilter|null $filter filter
     *
     * @return $this
     */
    public function setFilter($filter)
    {
        $this->container['filter'] = $filter;

        return $this;
    }

    /**
     * Gets patch
     *
     * @return \TalonOne\Client\Model\ScimServiceProviderConfigResponsePatch|null
     */
    public function getPatch()
    {
        return $this->container['patch'];
    }

    /**
     * Sets patch
     *
     * @param \TalonOne\Client\Model\ScimServiceProviderConfigResponsePatch|null $patch patch
     *
     * @return $this
     */
    public function setPatch($patch)
    {
        $this->container['patch'] = $patch;

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
     * @param string[]|null $schemas A list of SCIM schemas that define the structure and data types supported by the service provider.
     *
     * @return $this
     */
    public function setSchemas($schemas)
    {
        $this->container['schemas'] = $schemas;

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

