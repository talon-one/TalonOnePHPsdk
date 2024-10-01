<?php
/**
 * Revision
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
 * Revision Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Revision implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Revision';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'activateAt' => '\DateTime',
        'accountId' => 'int',
        'applicationId' => 'int',
        'campaignId' => 'int',
        'created' => '\DateTime',
        'createdBy' => 'int',
        'activatedAt' => '\DateTime',
        'activatedBy' => 'int',
        'currentVersion' => '\TalonOne\Client\Model\RevisionVersion'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'activateAt' => 'date-time',
        'accountId' => null,
        'applicationId' => null,
        'campaignId' => null,
        'created' => 'date-time',
        'createdBy' => null,
        'activatedAt' => 'date-time',
        'activatedBy' => null,
        'currentVersion' => null
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
        'id' => 'id',
        'activateAt' => 'activateAt',
        'accountId' => 'accountId',
        'applicationId' => 'applicationId',
        'campaignId' => 'campaignId',
        'created' => 'created',
        'createdBy' => 'createdBy',
        'activatedAt' => 'activatedAt',
        'activatedBy' => 'activatedBy',
        'currentVersion' => 'currentVersion'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'activateAt' => 'setActivateAt',
        'accountId' => 'setAccountId',
        'applicationId' => 'setApplicationId',
        'campaignId' => 'setCampaignId',
        'created' => 'setCreated',
        'createdBy' => 'setCreatedBy',
        'activatedAt' => 'setActivatedAt',
        'activatedBy' => 'setActivatedBy',
        'currentVersion' => 'setCurrentVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'activateAt' => 'getActivateAt',
        'accountId' => 'getAccountId',
        'applicationId' => 'getApplicationId',
        'campaignId' => 'getCampaignId',
        'created' => 'getCreated',
        'createdBy' => 'getCreatedBy',
        'activatedAt' => 'getActivatedAt',
        'activatedBy' => 'getActivatedBy',
        'currentVersion' => 'getCurrentVersion'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['activateAt'] = isset($data['activateAt']) ? $data['activateAt'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['activatedAt'] = isset($data['activatedAt']) ? $data['activatedAt'] : null;
        $this->container['activatedBy'] = isset($data['activatedBy']) ? $data['activatedBy'] : null;
        $this->container['currentVersion'] = isset($data['currentVersion']) ? $data['currentVersion'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
        if ($this->container['applicationId'] === null) {
            $invalidProperties[] = "'applicationId' can't be null";
        }
        if ($this->container['campaignId'] === null) {
            $invalidProperties[] = "'campaignId' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['createdBy'] === null) {
            $invalidProperties[] = "'createdBy' can't be null";
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
     * @param int $id Unique ID for this entity. Not to be confused with the Integration ID, which is set by your integration layer and used in most endpoints.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets activateAt
     *
     * @return \DateTime|null
     */
    public function getActivateAt()
    {
        return $this->container['activateAt'];
    }

    /**
     * Sets activateAt
     *
     * @param \DateTime|null $activateAt activateAt
     *
     * @return $this
     */
    public function setActivateAt($activateAt)
    {
        $this->container['activateAt'] = $activateAt;

        return $this;
    }

    /**
     * Gets accountId
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int $accountId accountId
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets applicationId
     *
     * @return int
     */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
     * Sets applicationId
     *
     * @param int $applicationId applicationId
     *
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;

        return $this;
    }

    /**
     * Gets campaignId
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaignId'];
    }

    /**
     * Sets campaignId
     *
     * @param int $campaignId campaignId
     *
     * @return $this
     */
    public function setCampaignId($campaignId)
    {
        $this->container['campaignId'] = $campaignId;

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
     * @param \DateTime $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

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
     * @param int $createdBy createdBy
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

        return $this;
    }

    /**
     * Gets activatedAt
     *
     * @return \DateTime|null
     */
    public function getActivatedAt()
    {
        return $this->container['activatedAt'];
    }

    /**
     * Sets activatedAt
     *
     * @param \DateTime|null $activatedAt activatedAt
     *
     * @return $this
     */
    public function setActivatedAt($activatedAt)
    {
        $this->container['activatedAt'] = $activatedAt;

        return $this;
    }

    /**
     * Gets activatedBy
     *
     * @return int|null
     */
    public function getActivatedBy()
    {
        return $this->container['activatedBy'];
    }

    /**
     * Sets activatedBy
     *
     * @param int|null $activatedBy activatedBy
     *
     * @return $this
     */
    public function setActivatedBy($activatedBy)
    {
        $this->container['activatedBy'] = $activatedBy;

        return $this;
    }

    /**
     * Gets currentVersion
     *
     * @return \TalonOne\Client\Model\RevisionVersion|null
     */
    public function getCurrentVersion()
    {
        return $this->container['currentVersion'];
    }

    /**
     * Sets currentVersion
     *
     * @param \TalonOne\Client\Model\RevisionVersion|null $currentVersion currentVersion
     *
     * @return $this
     */
    public function setCurrentVersion($currentVersion)
    {
        $this->container['currentVersion'] = $currentVersion;

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


