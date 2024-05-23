<?php
/**
 * CustomerProfile
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
 * CustomerProfile Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerProfile implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerProfile';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'created' => '\DateTime',
        'integrationId' => 'string',
        'attributes' => 'object',
        'accountId' => 'int',
        'closedSessions' => 'int',
        'totalSales' => 'float',
        'loyaltyMemberships' => '\TalonOne\Client\Model\LoyaltyMembership[]',
        'audienceMemberships' => '\TalonOne\Client\Model\AudienceMembership[]',
        'lastActivity' => '\DateTime',
        'sandbox' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created' => 'date-time',
        'integrationId' => 'string',
        'attributes' => null,
        'accountId' => null,
        'closedSessions' => null,
        'totalSales' => null,
        'loyaltyMemberships' => null,
        'audienceMemberships' => null,
        'lastActivity' => 'date-time',
        'sandbox' => null
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
        'integrationId' => 'integrationId',
        'attributes' => 'attributes',
        'accountId' => 'accountId',
        'closedSessions' => 'closedSessions',
        'totalSales' => 'totalSales',
        'loyaltyMemberships' => 'loyaltyMemberships',
        'audienceMemberships' => 'audienceMemberships',
        'lastActivity' => 'lastActivity',
        'sandbox' => 'sandbox'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created' => 'setCreated',
        'integrationId' => 'setIntegrationId',
        'attributes' => 'setAttributes',
        'accountId' => 'setAccountId',
        'closedSessions' => 'setClosedSessions',
        'totalSales' => 'setTotalSales',
        'loyaltyMemberships' => 'setLoyaltyMemberships',
        'audienceMemberships' => 'setAudienceMemberships',
        'lastActivity' => 'setLastActivity',
        'sandbox' => 'setSandbox'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created' => 'getCreated',
        'integrationId' => 'getIntegrationId',
        'attributes' => 'getAttributes',
        'accountId' => 'getAccountId',
        'closedSessions' => 'getClosedSessions',
        'totalSales' => 'getTotalSales',
        'loyaltyMemberships' => 'getLoyaltyMemberships',
        'audienceMemberships' => 'getAudienceMemberships',
        'lastActivity' => 'getLastActivity',
        'sandbox' => 'getSandbox'
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
        $this->container['integrationId'] = isset($data['integrationId']) ? $data['integrationId'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['closedSessions'] = isset($data['closedSessions']) ? $data['closedSessions'] : null;
        $this->container['totalSales'] = isset($data['totalSales']) ? $data['totalSales'] : null;
        $this->container['loyaltyMemberships'] = isset($data['loyaltyMemberships']) ? $data['loyaltyMemberships'] : null;
        $this->container['audienceMemberships'] = isset($data['audienceMemberships']) ? $data['audienceMemberships'] : null;
        $this->container['lastActivity'] = isset($data['lastActivity']) ? $data['lastActivity'] : null;
        $this->container['sandbox'] = isset($data['sandbox']) ? $data['sandbox'] : null;
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
        if ($this->container['integrationId'] === null) {
            $invalidProperties[] = "'integrationId' can't be null";
        }
        if ((mb_strlen($this->container['integrationId']) > 1000)) {
            $invalidProperties[] = "invalid value for 'integrationId', the character length must be smaller than or equal to 1000.";
        }

        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
        }
        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
        if ($this->container['closedSessions'] === null) {
            $invalidProperties[] = "'closedSessions' can't be null";
        }
        if ($this->container['totalSales'] === null) {
            $invalidProperties[] = "'totalSales' can't be null";
        }
        if ($this->container['lastActivity'] === null) {
            $invalidProperties[] = "'lastActivity' can't be null";
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
     * @param \DateTime $created The time this entity was created. The time this entity was created.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets integrationId
     *
     * @return string
     */
    public function getIntegrationId()
    {
        return $this->container['integrationId'];
    }

    /**
     * Sets integrationId
     *
     * @param string $integrationId The integration ID set by your integration layer.
     *
     * @return $this
     */
    public function setIntegrationId($integrationId)
    {
        if ((mb_strlen($integrationId) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $integrationId when calling CustomerProfile., must be smaller than or equal to 1000.');
        }

        $this->container['integrationId'] = $integrationId;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return object
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param object $attributes Arbitrary properties associated with this item.
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

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
     * @param int $accountId The ID of the Talon.One account that owns this profile.
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
    }

    /**
     * Gets closedSessions
     *
     * @return int
     */
    public function getClosedSessions()
    {
        return $this->container['closedSessions'];
    }

    /**
     * Sets closedSessions
     *
     * @param int $closedSessions The total amount of closed sessions by a customer. A closed session is a successful purchase.
     *
     * @return $this
     */
    public function setClosedSessions($closedSessions)
    {
        $this->container['closedSessions'] = $closedSessions;

        return $this;
    }

    /**
     * Gets totalSales
     *
     * @return float
     */
    public function getTotalSales()
    {
        return $this->container['totalSales'];
    }

    /**
     * Sets totalSales
     *
     * @param float $totalSales The total amount of money spent by the customer **before** discounts are applied.  The total sales amount excludes the following: - Cancelled or reopened sessions. - Returned items.
     *
     * @return $this
     */
    public function setTotalSales($totalSales)
    {
        $this->container['totalSales'] = $totalSales;

        return $this;
    }

    /**
     * Gets loyaltyMemberships
     *
     * @return \TalonOne\Client\Model\LoyaltyMembership[]|null
     */
    public function getLoyaltyMemberships()
    {
        return $this->container['loyaltyMemberships'];
    }

    /**
     * Sets loyaltyMemberships
     *
     * @param \TalonOne\Client\Model\LoyaltyMembership[]|null $loyaltyMemberships **DEPRECATED** A list of loyalty programs joined by the customer.
     *
     * @return $this
     */
    public function setLoyaltyMemberships($loyaltyMemberships)
    {
        $this->container['loyaltyMemberships'] = $loyaltyMemberships;

        return $this;
    }

    /**
     * Gets audienceMemberships
     *
     * @return \TalonOne\Client\Model\AudienceMembership[]|null
     */
    public function getAudienceMemberships()
    {
        return $this->container['audienceMemberships'];
    }

    /**
     * Sets audienceMemberships
     *
     * @param \TalonOne\Client\Model\AudienceMembership[]|null $audienceMemberships The audiences the customer belongs to.
     *
     * @return $this
     */
    public function setAudienceMemberships($audienceMemberships)
    {
        $this->container['audienceMemberships'] = $audienceMemberships;

        return $this;
    }

    /**
     * Gets lastActivity
     *
     * @return \DateTime
     */
    public function getLastActivity()
    {
        return $this->container['lastActivity'];
    }

    /**
     * Sets lastActivity
     *
     * @param \DateTime $lastActivity Timestamp of the most recent event received from this customer. This field is updated on calls that trigger the Rule Engine and that are not [dry requests](https://docs.talon.one/docs/dev/integration-api/dry-requests/#overlay).  For example, [reserving a coupon](https://docs.talon.one/integration-api#operation/createCouponReservation) for a customer doesn't impact this field.
     *
     * @return $this
     */
    public function setLastActivity($lastActivity)
    {
        $this->container['lastActivity'] = $lastActivity;

        return $this;
    }

    /**
     * Gets sandbox
     *
     * @return bool|null
     */
    public function getSandbox()
    {
        return $this->container['sandbox'];
    }

    /**
     * Sets sandbox
     *
     * @param bool|null $sandbox An indicator of whether the customer is part of a sandbox or live Application. See the [docs](https://docs.talon.one/docs/product/applications/overview#application-environments).
     *
     * @return $this
     */
    public function setSandbox($sandbox)
    {
        $this->container['sandbox'] = $sandbox;

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


