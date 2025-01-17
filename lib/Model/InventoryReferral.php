<?php
/**
 * InventoryReferral
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
 * InventoryReferral Class Doc Comment
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InventoryReferral implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'InventoryReferral';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'created' => '\DateTime',
        'startDate' => '\DateTime',
        'expiryDate' => '\DateTime',
        'usageLimit' => 'int',
        'campaignId' => 'int',
        'advocateProfileIntegrationId' => 'string',
        'friendProfileIntegrationId' => 'string',
        'attributes' => 'object',
        'importId' => 'int',
        'code' => 'string',
        'usageCounter' => 'int',
        'batchId' => 'string',
        'referredCustomers' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created' => 'date-time',
        'startDate' => 'date-time',
        'expiryDate' => 'date-time',
        'usageLimit' => null,
        'campaignId' => null,
        'advocateProfileIntegrationId' => null,
        'friendProfileIntegrationId' => null,
        'attributes' => null,
        'importId' => null,
        'code' => null,
        'usageCounter' => null,
        'batchId' => null,
        'referredCustomers' => null
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
        'created' => 'created',
        'startDate' => 'startDate',
        'expiryDate' => 'expiryDate',
        'usageLimit' => 'usageLimit',
        'campaignId' => 'campaignId',
        'advocateProfileIntegrationId' => 'advocateProfileIntegrationId',
        'friendProfileIntegrationId' => 'friendProfileIntegrationId',
        'attributes' => 'attributes',
        'importId' => 'importId',
        'code' => 'code',
        'usageCounter' => 'usageCounter',
        'batchId' => 'batchId',
        'referredCustomers' => 'referredCustomers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created' => 'setCreated',
        'startDate' => 'setStartDate',
        'expiryDate' => 'setExpiryDate',
        'usageLimit' => 'setUsageLimit',
        'campaignId' => 'setCampaignId',
        'advocateProfileIntegrationId' => 'setAdvocateProfileIntegrationId',
        'friendProfileIntegrationId' => 'setFriendProfileIntegrationId',
        'attributes' => 'setAttributes',
        'importId' => 'setImportId',
        'code' => 'setCode',
        'usageCounter' => 'setUsageCounter',
        'batchId' => 'setBatchId',
        'referredCustomers' => 'setReferredCustomers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created' => 'getCreated',
        'startDate' => 'getStartDate',
        'expiryDate' => 'getExpiryDate',
        'usageLimit' => 'getUsageLimit',
        'campaignId' => 'getCampaignId',
        'advocateProfileIntegrationId' => 'getAdvocateProfileIntegrationId',
        'friendProfileIntegrationId' => 'getFriendProfileIntegrationId',
        'attributes' => 'getAttributes',
        'importId' => 'getImportId',
        'code' => 'getCode',
        'usageCounter' => 'getUsageCounter',
        'batchId' => 'getBatchId',
        'referredCustomers' => 'getReferredCustomers'
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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['usageLimit'] = isset($data['usageLimit']) ? $data['usageLimit'] : null;
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['advocateProfileIntegrationId'] = isset($data['advocateProfileIntegrationId']) ? $data['advocateProfileIntegrationId'] : null;
        $this->container['friendProfileIntegrationId'] = isset($data['friendProfileIntegrationId']) ? $data['friendProfileIntegrationId'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['importId'] = isset($data['importId']) ? $data['importId'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['usageCounter'] = isset($data['usageCounter']) ? $data['usageCounter'] : null;
        $this->container['batchId'] = isset($data['batchId']) ? $data['batchId'] : null;
        $this->container['referredCustomers'] = isset($data['referredCustomers']) ? $data['referredCustomers'] : null;
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
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['usageLimit'] === null) {
            $invalidProperties[] = "'usageLimit' can't be null";
        }
        if (($this->container['usageLimit'] > 999999)) {
            $invalidProperties[] = "invalid value for 'usageLimit', must be smaller than or equal to 999999.";
        }

        if (($this->container['usageLimit'] < 0)) {
            $invalidProperties[] = "invalid value for 'usageLimit', must be bigger than or equal to 0.";
        }

        if ($this->container['campaignId'] === null) {
            $invalidProperties[] = "'campaignId' can't be null";
        }
        if ($this->container['advocateProfileIntegrationId'] === null) {
            $invalidProperties[] = "'advocateProfileIntegrationId' can't be null";
        }
        if ((mb_strlen($this->container['advocateProfileIntegrationId']) > 1000)) {
            $invalidProperties[] = "invalid value for 'advocateProfileIntegrationId', the character length must be smaller than or equal to 1000.";
        }

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ((mb_strlen($this->container['code']) < 4)) {
            $invalidProperties[] = "invalid value for 'code', the character length must be bigger than or equal to 4.";
        }

        if ($this->container['usageCounter'] === null) {
            $invalidProperties[] = "'usageCounter' can't be null";
        }
        if ($this->container['referredCustomers'] === null) {
            $invalidProperties[] = "'referredCustomers' can't be null";
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
     * @param int $id Internal ID of this entity.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param \DateTime $created The time this entity was created.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime|null $startDate Timestamp at which point the referral code becomes valid.
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets expiryDate
     *
     * @return \DateTime|null
     */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
     * Sets expiryDate
     *
     * @param \DateTime|null $expiryDate Expiration date of the referral code. Referral never expires if this is omitted.
     *
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;

        return $this;
    }

    /**
     * Gets usageLimit
     *
     * @return int
     */
    public function getUsageLimit()
    {
        return $this->container['usageLimit'];
    }

    /**
     * Sets usageLimit
     *
     * @param int $usageLimit The number of times a referral code can be used. `0` means no limit but any campaign usage limits will still apply.
     *
     * @return $this
     */
    public function setUsageLimit($usageLimit)
    {

        if (($usageLimit > 999999)) {
            throw new \InvalidArgumentException('invalid value for $usageLimit when calling InventoryReferral., must be smaller than or equal to 999999.');
        }
        if (($usageLimit < 0)) {
            throw new \InvalidArgumentException('invalid value for $usageLimit when calling InventoryReferral., must be bigger than or equal to 0.');
        }

        $this->container['usageLimit'] = $usageLimit;

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
     * @param int $campaignId ID of the campaign from which the referral received the referral code.
     *
     * @return $this
     */
    public function setCampaignId($campaignId)
    {
        $this->container['campaignId'] = $campaignId;

        return $this;
    }

    /**
     * Gets advocateProfileIntegrationId
     *
     * @return string
     */
    public function getAdvocateProfileIntegrationId()
    {
        return $this->container['advocateProfileIntegrationId'];
    }

    /**
     * Sets advocateProfileIntegrationId
     *
     * @param string $advocateProfileIntegrationId The Integration ID of the Advocate's Profile.
     *
     * @return $this
     */
    public function setAdvocateProfileIntegrationId($advocateProfileIntegrationId)
    {
        if ((mb_strlen($advocateProfileIntegrationId) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $advocateProfileIntegrationId when calling InventoryReferral., must be smaller than or equal to 1000.');
        }

        $this->container['advocateProfileIntegrationId'] = $advocateProfileIntegrationId;

        return $this;
    }

    /**
     * Gets friendProfileIntegrationId
     *
     * @return string|null
     */
    public function getFriendProfileIntegrationId()
    {
        return $this->container['friendProfileIntegrationId'];
    }

    /**
     * Sets friendProfileIntegrationId
     *
     * @param string|null $friendProfileIntegrationId An optional Integration ID of the Friend's Profile.
     *
     * @return $this
     */
    public function setFriendProfileIntegrationId($friendProfileIntegrationId)
    {
        $this->container['friendProfileIntegrationId'] = $friendProfileIntegrationId;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return object|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param object|null $attributes Arbitrary properties associated with this item.
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets importId
     *
     * @return int|null
     */
    public function getImportId()
    {
        return $this->container['importId'];
    }

    /**
     * Sets importId
     *
     * @param int|null $importId The ID of the Import which created this referral.
     *
     * @return $this
     */
    public function setImportId($importId)
    {
        $this->container['importId'] = $importId;

        return $this;
    }

    /**
     * Gets code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code The referral code.
     *
     * @return $this
     */
    public function setCode($code)
    {

        if ((mb_strlen($code) < 4)) {
            throw new \InvalidArgumentException('invalid length for $code when calling InventoryReferral., must be bigger than or equal to 4.');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets usageCounter
     *
     * @return int
     */
    public function getUsageCounter()
    {
        return $this->container['usageCounter'];
    }

    /**
     * Sets usageCounter
     *
     * @param int $usageCounter The number of times this referral code has been successfully used.
     *
     * @return $this
     */
    public function setUsageCounter($usageCounter)
    {
        $this->container['usageCounter'] = $usageCounter;

        return $this;
    }

    /**
     * Gets batchId
     *
     * @return string|null
     */
    public function getBatchId()
    {
        return $this->container['batchId'];
    }

    /**
     * Sets batchId
     *
     * @param string|null $batchId The ID of the batch the referrals belong to.
     *
     * @return $this
     */
    public function setBatchId($batchId)
    {
        $this->container['batchId'] = $batchId;

        return $this;
    }

    /**
     * Gets referredCustomers
     *
     * @return string[]
     */
    public function getReferredCustomers()
    {
        return $this->container['referredCustomers'];
    }

    /**
     * Sets referredCustomers
     *
     * @param string[] $referredCustomers An array of referred customers.
     *
     * @return $this
     */
    public function setReferredCustomers($referredCustomers)
    {
        $this->container['referredCustomers'] = $referredCustomers;

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


