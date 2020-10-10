<?php
/**
 * CustomerActivityReport
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
 * The Talon.One API is used to manage applications and campaigns, as well as to integrate with your application. The operations in the _Integration API_ section are used to integrate with our platform, while the other operations are used to manage applications and campaigns.  ### Where is the API?  The API is available at the same hostname as these docs. For example, if you are reading this page at `https://mycompany.talon.one/docs/api/`, the URL for the [updateCustomerProfile][] operation is `https://mycompany.talon.one/v1/customer_profiles/id`  [updateCustomerProfile]: #operation--v1-customer_profiles--integrationId--put
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
 * CustomerActivityReport Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerActivityReport implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerActivityReport';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'integrationId' => 'string',
        'created' => '\DateTime',
        'name' => 'string',
        'customerId' => 'int',
        'lastActivity' => '\DateTime',
        'couponRedemptions' => 'int',
        'couponUseAttempts' => 'int',
        'couponFailedAttempts' => 'int',
        'accruedDiscounts' => 'float',
        'accruedRevenue' => 'float',
        'totalOrders' => 'int',
        'totalOrdersNoCoupon' => 'int',
        'campaignName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'integrationId' => 'string',
        'created' => 'date-time',
        'name' => null,
        'customerId' => null,
        'lastActivity' => 'date-time',
        'couponRedemptions' => null,
        'couponUseAttempts' => null,
        'couponFailedAttempts' => null,
        'accruedDiscounts' => null,
        'accruedRevenue' => null,
        'totalOrders' => null,
        'totalOrdersNoCoupon' => null,
        'campaignName' => null
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
        'integrationId' => 'integrationId',
        'created' => 'created',
        'name' => 'name',
        'customerId' => 'customerId',
        'lastActivity' => 'lastActivity',
        'couponRedemptions' => 'couponRedemptions',
        'couponUseAttempts' => 'couponUseAttempts',
        'couponFailedAttempts' => 'couponFailedAttempts',
        'accruedDiscounts' => 'accruedDiscounts',
        'accruedRevenue' => 'accruedRevenue',
        'totalOrders' => 'totalOrders',
        'totalOrdersNoCoupon' => 'totalOrdersNoCoupon',
        'campaignName' => 'campaignName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'integrationId' => 'setIntegrationId',
        'created' => 'setCreated',
        'name' => 'setName',
        'customerId' => 'setCustomerId',
        'lastActivity' => 'setLastActivity',
        'couponRedemptions' => 'setCouponRedemptions',
        'couponUseAttempts' => 'setCouponUseAttempts',
        'couponFailedAttempts' => 'setCouponFailedAttempts',
        'accruedDiscounts' => 'setAccruedDiscounts',
        'accruedRevenue' => 'setAccruedRevenue',
        'totalOrders' => 'setTotalOrders',
        'totalOrdersNoCoupon' => 'setTotalOrdersNoCoupon',
        'campaignName' => 'setCampaignName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'integrationId' => 'getIntegrationId',
        'created' => 'getCreated',
        'name' => 'getName',
        'customerId' => 'getCustomerId',
        'lastActivity' => 'getLastActivity',
        'couponRedemptions' => 'getCouponRedemptions',
        'couponUseAttempts' => 'getCouponUseAttempts',
        'couponFailedAttempts' => 'getCouponFailedAttempts',
        'accruedDiscounts' => 'getAccruedDiscounts',
        'accruedRevenue' => 'getAccruedRevenue',
        'totalOrders' => 'getTotalOrders',
        'totalOrdersNoCoupon' => 'getTotalOrdersNoCoupon',
        'campaignName' => 'getCampaignName'
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
        $this->container['integrationId'] = isset($data['integrationId']) ? $data['integrationId'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['lastActivity'] = isset($data['lastActivity']) ? $data['lastActivity'] : null;
        $this->container['couponRedemptions'] = isset($data['couponRedemptions']) ? $data['couponRedemptions'] : null;
        $this->container['couponUseAttempts'] = isset($data['couponUseAttempts']) ? $data['couponUseAttempts'] : null;
        $this->container['couponFailedAttempts'] = isset($data['couponFailedAttempts']) ? $data['couponFailedAttempts'] : null;
        $this->container['accruedDiscounts'] = isset($data['accruedDiscounts']) ? $data['accruedDiscounts'] : null;
        $this->container['accruedRevenue'] = isset($data['accruedRevenue']) ? $data['accruedRevenue'] : null;
        $this->container['totalOrders'] = isset($data['totalOrders']) ? $data['totalOrders'] : null;
        $this->container['totalOrdersNoCoupon'] = isset($data['totalOrdersNoCoupon']) ? $data['totalOrdersNoCoupon'] : null;
        $this->container['campaignName'] = isset($data['campaignName']) ? $data['campaignName'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['integrationId'] === null) {
            $invalidProperties[] = "'integrationId' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['customerId'] === null) {
            $invalidProperties[] = "'customerId' can't be null";
        }
        if ($this->container['couponRedemptions'] === null) {
            $invalidProperties[] = "'couponRedemptions' can't be null";
        }
        if ($this->container['couponUseAttempts'] === null) {
            $invalidProperties[] = "'couponUseAttempts' can't be null";
        }
        if ($this->container['couponFailedAttempts'] === null) {
            $invalidProperties[] = "'couponFailedAttempts' can't be null";
        }
        if ($this->container['accruedDiscounts'] === null) {
            $invalidProperties[] = "'accruedDiscounts' can't be null";
        }
        if ($this->container['accruedRevenue'] === null) {
            $invalidProperties[] = "'accruedRevenue' can't be null";
        }
        if ($this->container['totalOrders'] === null) {
            $invalidProperties[] = "'totalOrders' can't be null";
        }
        if ($this->container['totalOrdersNoCoupon'] === null) {
            $invalidProperties[] = "'totalOrdersNoCoupon' can't be null";
        }
        if ($this->container['campaignName'] === null) {
            $invalidProperties[] = "'campaignName' can't be null";
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
     * @param string $integrationId The integration ID for this entity sent to and used in the Talon.One system.
     *
     * @return $this
     */
    public function setIntegrationId($integrationId)
    {
        $this->container['integrationId'] = $integrationId;

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
     * @param \DateTime $created The exact moment this entity was created.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name for this customer profile.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets customerId
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
     * Sets customerId
     *
     * @param int $customerId The internal Talon.One ID of the customer.
     *
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;

        return $this;
    }

    /**
     * Gets lastActivity
     *
     * @return \DateTime|null
     */
    public function getLastActivity()
    {
        return $this->container['lastActivity'];
    }

    /**
     * Sets lastActivity
     *
     * @param \DateTime|null $lastActivity The last activity of the customer.
     *
     * @return $this
     */
    public function setLastActivity($lastActivity)
    {
        $this->container['lastActivity'] = $lastActivity;

        return $this;
    }

    /**
     * Gets couponRedemptions
     *
     * @return int
     */
    public function getCouponRedemptions()
    {
        return $this->container['couponRedemptions'];
    }

    /**
     * Sets couponRedemptions
     *
     * @param int $couponRedemptions Number of coupon redemptions in all customer campaigns.
     *
     * @return $this
     */
    public function setCouponRedemptions($couponRedemptions)
    {
        $this->container['couponRedemptions'] = $couponRedemptions;

        return $this;
    }

    /**
     * Gets couponUseAttempts
     *
     * @return int
     */
    public function getCouponUseAttempts()
    {
        return $this->container['couponUseAttempts'];
    }

    /**
     * Sets couponUseAttempts
     *
     * @param int $couponUseAttempts Number of coupon use attempts in all customer campaigns.
     *
     * @return $this
     */
    public function setCouponUseAttempts($couponUseAttempts)
    {
        $this->container['couponUseAttempts'] = $couponUseAttempts;

        return $this;
    }

    /**
     * Gets couponFailedAttempts
     *
     * @return int
     */
    public function getCouponFailedAttempts()
    {
        return $this->container['couponFailedAttempts'];
    }

    /**
     * Sets couponFailedAttempts
     *
     * @param int $couponFailedAttempts Number of failed coupon use attempts in all customer campaigns.
     *
     * @return $this
     */
    public function setCouponFailedAttempts($couponFailedAttempts)
    {
        $this->container['couponFailedAttempts'] = $couponFailedAttempts;

        return $this;
    }

    /**
     * Gets accruedDiscounts
     *
     * @return float
     */
    public function getAccruedDiscounts()
    {
        return $this->container['accruedDiscounts'];
    }

    /**
     * Sets accruedDiscounts
     *
     * @param float $accruedDiscounts Number of accrued discounts in all customer campaigns.
     *
     * @return $this
     */
    public function setAccruedDiscounts($accruedDiscounts)
    {
        $this->container['accruedDiscounts'] = $accruedDiscounts;

        return $this;
    }

    /**
     * Gets accruedRevenue
     *
     * @return float
     */
    public function getAccruedRevenue()
    {
        return $this->container['accruedRevenue'];
    }

    /**
     * Sets accruedRevenue
     *
     * @param float $accruedRevenue Amount of accrued revenue in all customer campaigns.
     *
     * @return $this
     */
    public function setAccruedRevenue($accruedRevenue)
    {
        $this->container['accruedRevenue'] = $accruedRevenue;

        return $this;
    }

    /**
     * Gets totalOrders
     *
     * @return int
     */
    public function getTotalOrders()
    {
        return $this->container['totalOrders'];
    }

    /**
     * Sets totalOrders
     *
     * @param int $totalOrders Number of orders in all customer campaigns.
     *
     * @return $this
     */
    public function setTotalOrders($totalOrders)
    {
        $this->container['totalOrders'] = $totalOrders;

        return $this;
    }

    /**
     * Gets totalOrdersNoCoupon
     *
     * @return int
     */
    public function getTotalOrdersNoCoupon()
    {
        return $this->container['totalOrdersNoCoupon'];
    }

    /**
     * Sets totalOrdersNoCoupon
     *
     * @param int $totalOrdersNoCoupon Number of orders without coupon used in all customer campaigns.
     *
     * @return $this
     */
    public function setTotalOrdersNoCoupon($totalOrdersNoCoupon)
    {
        $this->container['totalOrdersNoCoupon'] = $totalOrdersNoCoupon;

        return $this;
    }

    /**
     * Gets campaignName
     *
     * @return string
     */
    public function getCampaignName()
    {
        return $this->container['campaignName'];
    }

    /**
     * Sets campaignName
     *
     * @param string $campaignName The name of the campaign this customer belongs to.
     *
     * @return $this
     */
    public function setCampaignName($campaignName)
    {
        $this->container['campaignName'] = $campaignName;

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


