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
 * OpenAPI Generator version: 4.2.3
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
        'integration_id' => 'string',
        'created' => '\DateTime',
        'name' => 'string',
        'customer_id' => 'int',
        'last_activity' => '\DateTime',
        'coupon_redemptions' => 'int',
        'coupon_use_attempts' => 'int',
        'coupon_failed_attempts' => 'int',
        'accrued_discounts' => 'float',
        'accrued_revenue' => 'float',
        'total_orders' => 'int',
        'total_orders_no_coupon' => 'int',
        'campaign_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'integration_id' => 'string',
        'created' => 'date-time',
        'name' => null,
        'customer_id' => null,
        'last_activity' => 'date-time',
        'coupon_redemptions' => null,
        'coupon_use_attempts' => null,
        'coupon_failed_attempts' => null,
        'accrued_discounts' => null,
        'accrued_revenue' => null,
        'total_orders' => null,
        'total_orders_no_coupon' => null,
        'campaign_name' => null
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
        'integration_id' => 'integrationId',
        'created' => 'created',
        'name' => 'name',
        'customer_id' => 'customerId',
        'last_activity' => 'lastActivity',
        'coupon_redemptions' => 'couponRedemptions',
        'coupon_use_attempts' => 'couponUseAttempts',
        'coupon_failed_attempts' => 'couponFailedAttempts',
        'accrued_discounts' => 'accruedDiscounts',
        'accrued_revenue' => 'accruedRevenue',
        'total_orders' => 'totalOrders',
        'total_orders_no_coupon' => 'totalOrdersNoCoupon',
        'campaign_name' => 'campaignName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'integration_id' => 'setIntegrationId',
        'created' => 'setCreated',
        'name' => 'setName',
        'customer_id' => 'setCustomerId',
        'last_activity' => 'setLastActivity',
        'coupon_redemptions' => 'setCouponRedemptions',
        'coupon_use_attempts' => 'setCouponUseAttempts',
        'coupon_failed_attempts' => 'setCouponFailedAttempts',
        'accrued_discounts' => 'setAccruedDiscounts',
        'accrued_revenue' => 'setAccruedRevenue',
        'total_orders' => 'setTotalOrders',
        'total_orders_no_coupon' => 'setTotalOrdersNoCoupon',
        'campaign_name' => 'setCampaignName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'integration_id' => 'getIntegrationId',
        'created' => 'getCreated',
        'name' => 'getName',
        'customer_id' => 'getCustomerId',
        'last_activity' => 'getLastActivity',
        'coupon_redemptions' => 'getCouponRedemptions',
        'coupon_use_attempts' => 'getCouponUseAttempts',
        'coupon_failed_attempts' => 'getCouponFailedAttempts',
        'accrued_discounts' => 'getAccruedDiscounts',
        'accrued_revenue' => 'getAccruedRevenue',
        'total_orders' => 'getTotalOrders',
        'total_orders_no_coupon' => 'getTotalOrdersNoCoupon',
        'campaign_name' => 'getCampaignName'
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
        $this->container['integration_id'] = isset($data['integration_id']) ? $data['integration_id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['last_activity'] = isset($data['last_activity']) ? $data['last_activity'] : null;
        $this->container['coupon_redemptions'] = isset($data['coupon_redemptions']) ? $data['coupon_redemptions'] : null;
        $this->container['coupon_use_attempts'] = isset($data['coupon_use_attempts']) ? $data['coupon_use_attempts'] : null;
        $this->container['coupon_failed_attempts'] = isset($data['coupon_failed_attempts']) ? $data['coupon_failed_attempts'] : null;
        $this->container['accrued_discounts'] = isset($data['accrued_discounts']) ? $data['accrued_discounts'] : null;
        $this->container['accrued_revenue'] = isset($data['accrued_revenue']) ? $data['accrued_revenue'] : null;
        $this->container['total_orders'] = isset($data['total_orders']) ? $data['total_orders'] : null;
        $this->container['total_orders_no_coupon'] = isset($data['total_orders_no_coupon']) ? $data['total_orders_no_coupon'] : null;
        $this->container['campaign_name'] = isset($data['campaign_name']) ? $data['campaign_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['integration_id'] === null) {
            $invalidProperties[] = "'integration_id' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['customer_id'] === null) {
            $invalidProperties[] = "'customer_id' can't be null";
        }
        if ($this->container['coupon_redemptions'] === null) {
            $invalidProperties[] = "'coupon_redemptions' can't be null";
        }
        if ($this->container['coupon_use_attempts'] === null) {
            $invalidProperties[] = "'coupon_use_attempts' can't be null";
        }
        if ($this->container['coupon_failed_attempts'] === null) {
            $invalidProperties[] = "'coupon_failed_attempts' can't be null";
        }
        if ($this->container['accrued_discounts'] === null) {
            $invalidProperties[] = "'accrued_discounts' can't be null";
        }
        if ($this->container['accrued_revenue'] === null) {
            $invalidProperties[] = "'accrued_revenue' can't be null";
        }
        if ($this->container['total_orders'] === null) {
            $invalidProperties[] = "'total_orders' can't be null";
        }
        if ($this->container['total_orders_no_coupon'] === null) {
            $invalidProperties[] = "'total_orders_no_coupon' can't be null";
        }
        if ($this->container['campaign_name'] === null) {
            $invalidProperties[] = "'campaign_name' can't be null";
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
     * Gets integration_id
     *
     * @return string
     */
    public function getIntegrationId()
    {
        return $this->container['integration_id'];
    }

    /**
     * Sets integration_id
     *
     * @param string $integration_id The ID used for this entity in the application system.
     *
     * @return $this
     */
    public function setIntegrationId($integration_id)
    {
        $this->container['integration_id'] = $integration_id;

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
     * Gets customer_id
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int $customer_id The internal Talon.One ID of the customer.
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets last_activity
     *
     * @return \DateTime|null
     */
    public function getLastActivity()
    {
        return $this->container['last_activity'];
    }

    /**
     * Sets last_activity
     *
     * @param \DateTime|null $last_activity The last activity of the customer.
     *
     * @return $this
     */
    public function setLastActivity($last_activity)
    {
        $this->container['last_activity'] = $last_activity;

        return $this;
    }

    /**
     * Gets coupon_redemptions
     *
     * @return int
     */
    public function getCouponRedemptions()
    {
        return $this->container['coupon_redemptions'];
    }

    /**
     * Sets coupon_redemptions
     *
     * @param int $coupon_redemptions Number of coupon redemptions in all customer campaigns.
     *
     * @return $this
     */
    public function setCouponRedemptions($coupon_redemptions)
    {
        $this->container['coupon_redemptions'] = $coupon_redemptions;

        return $this;
    }

    /**
     * Gets coupon_use_attempts
     *
     * @return int
     */
    public function getCouponUseAttempts()
    {
        return $this->container['coupon_use_attempts'];
    }

    /**
     * Sets coupon_use_attempts
     *
     * @param int $coupon_use_attempts Number of coupon use attempts in all customer campaigns.
     *
     * @return $this
     */
    public function setCouponUseAttempts($coupon_use_attempts)
    {
        $this->container['coupon_use_attempts'] = $coupon_use_attempts;

        return $this;
    }

    /**
     * Gets coupon_failed_attempts
     *
     * @return int
     */
    public function getCouponFailedAttempts()
    {
        return $this->container['coupon_failed_attempts'];
    }

    /**
     * Sets coupon_failed_attempts
     *
     * @param int $coupon_failed_attempts Number of failed coupon use attempts in all customer campaigns.
     *
     * @return $this
     */
    public function setCouponFailedAttempts($coupon_failed_attempts)
    {
        $this->container['coupon_failed_attempts'] = $coupon_failed_attempts;

        return $this;
    }

    /**
     * Gets accrued_discounts
     *
     * @return float
     */
    public function getAccruedDiscounts()
    {
        return $this->container['accrued_discounts'];
    }

    /**
     * Sets accrued_discounts
     *
     * @param float $accrued_discounts Number of accrued discounts in all customer campaigns.
     *
     * @return $this
     */
    public function setAccruedDiscounts($accrued_discounts)
    {
        $this->container['accrued_discounts'] = $accrued_discounts;

        return $this;
    }

    /**
     * Gets accrued_revenue
     *
     * @return float
     */
    public function getAccruedRevenue()
    {
        return $this->container['accrued_revenue'];
    }

    /**
     * Sets accrued_revenue
     *
     * @param float $accrued_revenue Amount of accrued revenue in all customer campaigns.
     *
     * @return $this
     */
    public function setAccruedRevenue($accrued_revenue)
    {
        $this->container['accrued_revenue'] = $accrued_revenue;

        return $this;
    }

    /**
     * Gets total_orders
     *
     * @return int
     */
    public function getTotalOrders()
    {
        return $this->container['total_orders'];
    }

    /**
     * Sets total_orders
     *
     * @param int $total_orders Number of orders in all customer campaigns.
     *
     * @return $this
     */
    public function setTotalOrders($total_orders)
    {
        $this->container['total_orders'] = $total_orders;

        return $this;
    }

    /**
     * Gets total_orders_no_coupon
     *
     * @return int
     */
    public function getTotalOrdersNoCoupon()
    {
        return $this->container['total_orders_no_coupon'];
    }

    /**
     * Sets total_orders_no_coupon
     *
     * @param int $total_orders_no_coupon Number of orders without coupon used in all customer campaigns.
     *
     * @return $this
     */
    public function setTotalOrdersNoCoupon($total_orders_no_coupon)
    {
        $this->container['total_orders_no_coupon'] = $total_orders_no_coupon;

        return $this;
    }

    /**
     * Gets campaign_name
     *
     * @return string
     */
    public function getCampaignName()
    {
        return $this->container['campaign_name'];
    }

    /**
     * Sets campaign_name
     *
     * @param string $campaign_name The name of the campaign this customer belongs to.
     *
     * @return $this
     */
    public function setCampaignName($campaign_name)
    {
        $this->container['campaign_name'] = $campaign_name;

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


