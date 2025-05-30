<?php
/**
 * LimitCounter
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
 * LimitCounter Class Doc Comment
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LimitCounter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LimitCounter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'campaignId' => 'int',
        'applicationId' => 'int',
        'accountId' => 'int',
        'id' => 'int',
        'action' => 'string',
        'profileId' => 'int',
        'profileIntegrationId' => 'string',
        'couponId' => 'int',
        'couponValue' => 'string',
        'referralId' => 'int',
        'referralValue' => 'string',
        'identifier' => 'string',
        'period' => 'string',
        'limit' => 'float',
        'counter' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'campaignId' => null,
        'applicationId' => null,
        'accountId' => null,
        'id' => null,
        'action' => null,
        'profileId' => null,
        'profileIntegrationId' => null,
        'couponId' => null,
        'couponValue' => null,
        'referralId' => null,
        'referralValue' => null,
        'identifier' => null,
        'period' => null,
        'limit' => null,
        'counter' => null
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
        'campaignId' => 'campaignId',
        'applicationId' => 'applicationId',
        'accountId' => 'accountId',
        'id' => 'id',
        'action' => 'action',
        'profileId' => 'profileId',
        'profileIntegrationId' => 'profileIntegrationId',
        'couponId' => 'couponId',
        'couponValue' => 'couponValue',
        'referralId' => 'referralId',
        'referralValue' => 'referralValue',
        'identifier' => 'identifier',
        'period' => 'period',
        'limit' => 'limit',
        'counter' => 'counter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaignId' => 'setCampaignId',
        'applicationId' => 'setApplicationId',
        'accountId' => 'setAccountId',
        'id' => 'setId',
        'action' => 'setAction',
        'profileId' => 'setProfileId',
        'profileIntegrationId' => 'setProfileIntegrationId',
        'couponId' => 'setCouponId',
        'couponValue' => 'setCouponValue',
        'referralId' => 'setReferralId',
        'referralValue' => 'setReferralValue',
        'identifier' => 'setIdentifier',
        'period' => 'setPeriod',
        'limit' => 'setLimit',
        'counter' => 'setCounter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaignId' => 'getCampaignId',
        'applicationId' => 'getApplicationId',
        'accountId' => 'getAccountId',
        'id' => 'getId',
        'action' => 'getAction',
        'profileId' => 'getProfileId',
        'profileIntegrationId' => 'getProfileIntegrationId',
        'couponId' => 'getCouponId',
        'couponValue' => 'getCouponValue',
        'referralId' => 'getReferralId',
        'referralValue' => 'getReferralValue',
        'identifier' => 'getIdentifier',
        'period' => 'getPeriod',
        'limit' => 'getLimit',
        'counter' => 'getCounter'
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
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['profileId'] = isset($data['profileId']) ? $data['profileId'] : null;
        $this->container['profileIntegrationId'] = isset($data['profileIntegrationId']) ? $data['profileIntegrationId'] : null;
        $this->container['couponId'] = isset($data['couponId']) ? $data['couponId'] : null;
        $this->container['couponValue'] = isset($data['couponValue']) ? $data['couponValue'] : null;
        $this->container['referralId'] = isset($data['referralId']) ? $data['referralId'] : null;
        $this->container['referralValue'] = isset($data['referralValue']) ? $data['referralValue'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['counter'] = isset($data['counter']) ? $data['counter'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['campaignId'] === null) {
            $invalidProperties[] = "'campaignId' can't be null";
        }
        if ($this->container['applicationId'] === null) {
            $invalidProperties[] = "'applicationId' can't be null";
        }
        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
        if (!is_null($this->container['profileIntegrationId']) && (mb_strlen($this->container['profileIntegrationId']) > 1000)) {
            $invalidProperties[] = "invalid value for 'profileIntegrationId', the character length must be smaller than or equal to 1000.";
        }

        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['counter'] === null) {
            $invalidProperties[] = "'counter' can't be null";
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
     * @param int $campaignId The ID of the campaign that owns this entity.
     *
     * @return $this
     */
    public function setCampaignId($campaignId)
    {
        $this->container['campaignId'] = $campaignId;

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
     * @param int $applicationId The ID of the Application that owns this entity.
     *
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;

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
     * @param int $accountId The ID of the account that owns this entity.
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

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
     * @param int $id Unique ID for this entity.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
     * Sets action
     *
     * @param string $action The limitable action of the limit counter.
     *
     * @return $this
     */
    public function setAction($action)
    {
        $this->container['action'] = $action;

        return $this;
    }

    /**
     * Gets profileId
     *
     * @return int|null
     */
    public function getProfileId()
    {
        return $this->container['profileId'];
    }

    /**
     * Sets profileId
     *
     * @param int|null $profileId The profile ID for which this limit counter is used.
     *
     * @return $this
     */
    public function setProfileId($profileId)
    {
        $this->container['profileId'] = $profileId;

        return $this;
    }

    /**
     * Gets profileIntegrationId
     *
     * @return string|null
     */
    public function getProfileIntegrationId()
    {
        return $this->container['profileIntegrationId'];
    }

    /**
     * Sets profileIntegrationId
     *
     * @param string|null $profileIntegrationId The profile integration ID for which this limit counter is used.
     *
     * @return $this
     */
    public function setProfileIntegrationId($profileIntegrationId)
    {
        if (!is_null($profileIntegrationId) && (mb_strlen($profileIntegrationId) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $profileIntegrationId when calling LimitCounter., must be smaller than or equal to 1000.');
        }

        $this->container['profileIntegrationId'] = $profileIntegrationId;

        return $this;
    }

    /**
     * Gets couponId
     *
     * @return int|null
     */
    public function getCouponId()
    {
        return $this->container['couponId'];
    }

    /**
     * Sets couponId
     *
     * @param int|null $couponId The internal coupon ID for which this limit counter is used.
     *
     * @return $this
     */
    public function setCouponId($couponId)
    {
        $this->container['couponId'] = $couponId;

        return $this;
    }

    /**
     * Gets couponValue
     *
     * @return string|null
     */
    public function getCouponValue()
    {
        return $this->container['couponValue'];
    }

    /**
     * Sets couponValue
     *
     * @param string|null $couponValue The coupon value for which this limit counter is used.
     *
     * @return $this
     */
    public function setCouponValue($couponValue)
    {
        $this->container['couponValue'] = $couponValue;

        return $this;
    }

    /**
     * Gets referralId
     *
     * @return int|null
     */
    public function getReferralId()
    {
        return $this->container['referralId'];
    }

    /**
     * Sets referralId
     *
     * @param int|null $referralId The referral ID for which this limit counter is used.
     *
     * @return $this
     */
    public function setReferralId($referralId)
    {
        $this->container['referralId'] = $referralId;

        return $this;
    }

    /**
     * Gets referralValue
     *
     * @return string|null
     */
    public function getReferralValue()
    {
        return $this->container['referralValue'];
    }

    /**
     * Sets referralValue
     *
     * @param string|null $referralValue The referral value for which this limit counter is used.
     *
     * @return $this
     */
    public function setReferralValue($referralValue)
    {
        $this->container['referralValue'] = $referralValue;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string|null
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string|null $identifier The arbitrary identifier for which this limit counter is used.
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string|null $period The time period for which this limit counter is used.
     *
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return float
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param float $limit The highest possible value for this limit counter.
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets counter
     *
     * @return float
     */
    public function getCounter()
    {
        return $this->container['counter'];
    }

    /**
     * Sets counter
     *
     * @param float $counter The current value for this limit counter.
     *
     * @return $this
     */
    public function setCounter($counter)
    {
        $this->container['counter'] = $counter;

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


