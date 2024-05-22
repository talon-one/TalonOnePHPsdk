<?php
/**
 * NewApplicationAPIKey
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
 * NewApplicationAPIKey Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NewApplicationAPIKey implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewApplicationAPIKey';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'expires' => '\DateTime',
        'platform' => 'string',
        'type' => 'string',
        'timeOffset' => 'int',
        'id' => 'int',
        'createdBy' => 'int',
        'accountID' => 'int',
        'applicationID' => 'int',
        'created' => '\DateTime',
        'key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'title' => null,
        'expires' => 'date-time',
        'platform' => null,
        'type' => null,
        'timeOffset' => null,
        'id' => null,
        'createdBy' => null,
        'accountID' => null,
        'applicationID' => null,
        'created' => 'date-time',
        'key' => null
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
        'title' => 'title',
        'expires' => 'expires',
        'platform' => 'platform',
        'type' => 'type',
        'timeOffset' => 'timeOffset',
        'id' => 'id',
        'createdBy' => 'createdBy',
        'accountID' => 'accountID',
        'applicationID' => 'applicationID',
        'created' => 'created',
        'key' => 'key'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'expires' => 'setExpires',
        'platform' => 'setPlatform',
        'type' => 'setType',
        'timeOffset' => 'setTimeOffset',
        'id' => 'setId',
        'createdBy' => 'setCreatedBy',
        'accountID' => 'setAccountID',
        'applicationID' => 'setApplicationID',
        'created' => 'setCreated',
        'key' => 'setKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'expires' => 'getExpires',
        'platform' => 'getPlatform',
        'type' => 'getType',
        'timeOffset' => 'getTimeOffset',
        'id' => 'getId',
        'createdBy' => 'getCreatedBy',
        'accountID' => 'getAccountID',
        'applicationID' => 'getApplicationID',
        'created' => 'getCreated',
        'key' => 'getKey'
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

    const PLATFORM_NONE = 'none';
    const PLATFORM_SEGMENT = 'segment';
    const PLATFORM_BRAZE = 'braze';
    const PLATFORM_MPARTICLE = 'mparticle';
    const PLATFORM_SELLIGENT = 'selligent';
    const PLATFORM_ITERABLE = 'iterable';
    const PLATFORM_CUSTOMER_ENGAGEMENT = 'customer_engagement';
    const PLATFORM_CUSTOMER_DATA = 'customer_data';
    const PLATFORM_SALESFORCE = 'salesforce';
    const PLATFORM_EMARSYS = 'emarsys';
    const TYPE_STAGING = 'staging';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPlatformAllowableValues()
    {
        return [
            self::PLATFORM_NONE,
            self::PLATFORM_SEGMENT,
            self::PLATFORM_BRAZE,
            self::PLATFORM_MPARTICLE,
            self::PLATFORM_SELLIGENT,
            self::PLATFORM_ITERABLE,
            self::PLATFORM_CUSTOMER_ENGAGEMENT,
            self::PLATFORM_CUSTOMER_DATA,
            self::PLATFORM_SALESFORCE,
            self::PLATFORM_EMARSYS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STAGING,
        ];
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['expires'] = isset($data['expires']) ? $data['expires'] : null;
        $this->container['platform'] = isset($data['platform']) ? $data['platform'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['timeOffset'] = isset($data['timeOffset']) ? $data['timeOffset'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['accountID'] = isset($data['accountID']) ? $data['accountID'] : null;
        $this->container['applicationID'] = isset($data['applicationID']) ? $data['applicationID'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['expires'] === null) {
            $invalidProperties[] = "'expires' can't be null";
        }
        $allowedValues = $this->getPlatformAllowableValues();
        if (!is_null($this->container['platform']) && !in_array($this->container['platform'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'platform', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['createdBy'] === null) {
            $invalidProperties[] = "'createdBy' can't be null";
        }
        if ($this->container['accountID'] === null) {
            $invalidProperties[] = "'accountID' can't be null";
        }
        if ($this->container['applicationID'] === null) {
            $invalidProperties[] = "'applicationID' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['key'] === null) {
            $invalidProperties[] = "'key' can't be null";
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
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title Title of the API key.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets expires
     *
     * @return \DateTime
     */
    public function getExpires()
    {
        return $this->container['expires'];
    }

    /**
     * Sets expires
     *
     * @param \DateTime $expires The date the API key expires.
     *
     * @return $this
     */
    public function setExpires($expires)
    {
        $this->container['expires'] = $expires;

        return $this;
    }

    /**
     * Gets platform
     *
     * @return string|null
     */
    public function getPlatform()
    {
        return $this->container['platform'];
    }

    /**
     * Sets platform
     *
     * @param string|null $platform The third-party platform the API key is valid for. Use `none` for a generic API key to be used from your own integration layer.
     *
     * @return $this
     */
    public function setPlatform($platform)
    {
        $allowedValues = $this->getPlatformAllowableValues();
        if (!is_null($platform) && !in_array($platform, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'platform', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['platform'] = $platform;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type The API key type. Can be empty or `staging`.  Staging API keys can only be used for dry requests with the [Update customer session](https://docs.talon.one/integration-api#tag/Customer-sessions/operation/updateCustomerSessionV2) endpoint, [Update customer profile](https://docs.talon.one/integration-api#tag/Customer-profiles/operation/updateCustomerProfileV2) endpoint, and [Track event](https://docs.talon.one/integration-api#tag/Events/operation/trackEventV2) endpoint.  When using the _Update customer profile_ endpoint with a staging API key, the query parameter `runRuleEngine` must be `true`.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets timeOffset
     *
     * @return int|null
     */
    public function getTimeOffset()
    {
        return $this->container['timeOffset'];
    }

    /**
     * Sets timeOffset
     *
     * @param int|null $timeOffset A time offset in nanoseconds associated with the API key. When making a request using the API key, rule evaluation is based on a date that is calculated by adding the offset to the current date.
     *
     * @return $this
     */
    public function setTimeOffset($timeOffset)
    {
        $this->container['timeOffset'] = $timeOffset;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id ID of the API Key.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets createdBy
     *
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param int $createdBy ID of user who created.
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

        return $this;
    }

    /**
     * Gets accountID
     *
     * @return int
     */
    public function getAccountID()
    {
        return $this->container['accountID'];
    }

    /**
     * Sets accountID
     *
     * @param int $accountID ID of account the key is used for.
     *
     * @return $this
     */
    public function setAccountID($accountID)
    {
        $this->container['accountID'] = $accountID;

        return $this;
    }

    /**
     * Gets applicationID
     *
     * @return int
     */
    public function getApplicationID()
    {
        return $this->container['applicationID'];
    }

    /**
     * Sets applicationID
     *
     * @param int $applicationID ID of application the key is used for.
     *
     * @return $this
     */
    public function setApplicationID($applicationID)
    {
        $this->container['applicationID'] = $applicationID;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created The date the API key was created.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     *
     * @param string $key The API key.
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

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


