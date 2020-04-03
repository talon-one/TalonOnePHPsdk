<?php
/**
 * CustomerSessionV2
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
 * CustomerSessionV2 Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerSessionV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerSessionV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'integration_id' => 'string',
        'created' => '\DateTime',
        'application_id' => 'int',
        'profile_id' => 'string',
        'coupon_codes' => 'string[]',
        'referral_code' => 'string',
        'state' => 'string',
        'cart_items' => '\TalonOne\Client\Model\CartItem[]',
        'additional_costs' => 'map[string,\TalonOne\Client\Model\AdditionalCost]',
        'identifiers' => 'string[]',
        'attributes' => 'object',
        'first_session' => 'bool',
        'total' => 'float',
        'cart_item_total' => 'float',
        'additional_cost_total' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'integration_id' => 'string',
        'created' => 'date-time',
        'application_id' => null,
        'profile_id' => null,
        'coupon_codes' => null,
        'referral_code' => null,
        'state' => null,
        'cart_items' => null,
        'additional_costs' => null,
        'identifiers' => null,
        'attributes' => null,
        'first_session' => null,
        'total' => null,
        'cart_item_total' => null,
        'additional_cost_total' => null
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
        'application_id' => 'applicationId',
        'profile_id' => 'profileId',
        'coupon_codes' => 'couponCodes',
        'referral_code' => 'referralCode',
        'state' => 'state',
        'cart_items' => 'cartItems',
        'additional_costs' => 'additionalCosts',
        'identifiers' => 'identifiers',
        'attributes' => 'attributes',
        'first_session' => 'firstSession',
        'total' => 'total',
        'cart_item_total' => 'cartItemTotal',
        'additional_cost_total' => 'additionalCostTotal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'integration_id' => 'setIntegrationId',
        'created' => 'setCreated',
        'application_id' => 'setApplicationId',
        'profile_id' => 'setProfileId',
        'coupon_codes' => 'setCouponCodes',
        'referral_code' => 'setReferralCode',
        'state' => 'setState',
        'cart_items' => 'setCartItems',
        'additional_costs' => 'setAdditionalCosts',
        'identifiers' => 'setIdentifiers',
        'attributes' => 'setAttributes',
        'first_session' => 'setFirstSession',
        'total' => 'setTotal',
        'cart_item_total' => 'setCartItemTotal',
        'additional_cost_total' => 'setAdditionalCostTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'integration_id' => 'getIntegrationId',
        'created' => 'getCreated',
        'application_id' => 'getApplicationId',
        'profile_id' => 'getProfileId',
        'coupon_codes' => 'getCouponCodes',
        'referral_code' => 'getReferralCode',
        'state' => 'getState',
        'cart_items' => 'getCartItems',
        'additional_costs' => 'getAdditionalCosts',
        'identifiers' => 'getIdentifiers',
        'attributes' => 'getAttributes',
        'first_session' => 'getFirstSession',
        'total' => 'getTotal',
        'cart_item_total' => 'getCartItemTotal',
        'additional_cost_total' => 'getAdditionalCostTotal'
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

    const STATE_OPEN = 'open';
    const STATE_CLOSED = 'closed';
    const STATE_CANCELLED = 'cancelled';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_OPEN,
            self::STATE_CLOSED,
            self::STATE_CANCELLED,
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
        $this->container['integration_id'] = isset($data['integration_id']) ? $data['integration_id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['application_id'] = isset($data['application_id']) ? $data['application_id'] : null;
        $this->container['profile_id'] = isset($data['profile_id']) ? $data['profile_id'] : null;
        $this->container['coupon_codes'] = isset($data['coupon_codes']) ? $data['coupon_codes'] : null;
        $this->container['referral_code'] = isset($data['referral_code']) ? $data['referral_code'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : 'open';
        $this->container['cart_items'] = isset($data['cart_items']) ? $data['cart_items'] : null;
        $this->container['additional_costs'] = isset($data['additional_costs']) ? $data['additional_costs'] : null;
        $this->container['identifiers'] = isset($data['identifiers']) ? $data['identifiers'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['first_session'] = isset($data['first_session']) ? $data['first_session'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['cart_item_total'] = isset($data['cart_item_total']) ? $data['cart_item_total'] : null;
        $this->container['additional_cost_total'] = isset($data['additional_cost_total']) ? $data['additional_cost_total'] : null;
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
        if ($this->container['application_id'] === null) {
            $invalidProperties[] = "'application_id' can't be null";
        }
        if ($this->container['profile_id'] === null) {
            $invalidProperties[] = "'profile_id' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['cart_items'] === null) {
            $invalidProperties[] = "'cart_items' can't be null";
        }
        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
        }
        if ($this->container['first_session'] === null) {
            $invalidProperties[] = "'first_session' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['cart_item_total'] === null) {
            $invalidProperties[] = "'cart_item_total' can't be null";
        }
        if ($this->container['additional_cost_total'] === null) {
            $invalidProperties[] = "'additional_cost_total' can't be null";
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
     * Gets application_id
     *
     * @return int
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     *
     * @param int $application_id The ID of the application that owns this entity.
     *
     * @return $this
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets profile_id
     *
     * @return string
     */
    public function getProfileId()
    {
        return $this->container['profile_id'];
    }

    /**
     * Sets profile_id
     *
     * @param string $profile_id ID of the customers profile as used within this Talon.One account. May be omitted or set to the empty string if the customer does not yet have a known profile ID.
     *
     * @return $this
     */
    public function setProfileId($profile_id)
    {
        $this->container['profile_id'] = $profile_id;

        return $this;
    }

    /**
     * Gets coupon_codes
     *
     * @return string[]|null
     */
    public function getCouponCodes()
    {
        return $this->container['coupon_codes'];
    }

    /**
     * Sets coupon_codes
     *
     * @param string[]|null $coupon_codes Any coupon codes entered.
     *
     * @return $this
     */
    public function setCouponCodes($coupon_codes)
    {
        $this->container['coupon_codes'] = $coupon_codes;

        return $this;
    }

    /**
     * Gets referral_code
     *
     * @return string|null
     */
    public function getReferralCode()
    {
        return $this->container['referral_code'];
    }

    /**
     * Sets referral_code
     *
     * @param string|null $referral_code Any referral code entered.
     *
     * @return $this
     */
    public function setReferralCode($referral_code)
    {
        $this->container['referral_code'] = $referral_code;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state Indicates the current state of the session. All sessions must start in the \"open\" state, after which valid transitions are...  1. open -> closed 2. open -> cancelled 3. closed -> cancelled
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets cart_items
     *
     * @return \TalonOne\Client\Model\CartItem[]
     */
    public function getCartItems()
    {
        return $this->container['cart_items'];
    }

    /**
     * Sets cart_items
     *
     * @param \TalonOne\Client\Model\CartItem[] $cart_items All items the customer will be purchasing in this session
     *
     * @return $this
     */
    public function setCartItems($cart_items)
    {
        $this->container['cart_items'] = $cart_items;

        return $this;
    }

    /**
     * Gets additional_costs
     *
     * @return map[string,\TalonOne\Client\Model\AdditionalCost]|null
     */
    public function getAdditionalCosts()
    {
        return $this->container['additional_costs'];
    }

    /**
     * Sets additional_costs
     *
     * @param map[string,\TalonOne\Client\Model\AdditionalCost]|null $additional_costs Any costs associated with the session that can not be explicitly attributed to cart items. Examples include shipping costs and service fees.
     *
     * @return $this
     */
    public function setAdditionalCosts($additional_costs)
    {
        $this->container['additional_costs'] = $additional_costs;

        return $this;
    }

    /**
     * Gets identifiers
     *
     * @return string[]|null
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param string[]|null $identifiers Identifiers for the customer, this can be used for limits on values such as device ID.
     *
     * @return $this
     */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;

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
     * @param object $attributes A key-value map of the sessions attributes. The potentially valid attributes are configured in your accounts developer settings.
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets first_session
     *
     * @return bool
     */
    public function getFirstSession()
    {
        return $this->container['first_session'];
    }

    /**
     * Sets first_session
     *
     * @param bool $first_session Indicates whether this is the first session for the customer's profile. Will always be true for anonymous sessions.
     *
     * @return $this
     */
    public function setFirstSession($first_session)
    {
        $this->container['first_session'] = $first_session;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float $total The total sum of cart-items, as well as additional costs, before any discounts applied
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets cart_item_total
     *
     * @return float
     */
    public function getCartItemTotal()
    {
        return $this->container['cart_item_total'];
    }

    /**
     * Sets cart_item_total
     *
     * @param float $cart_item_total The total sum of cart-items before any discounts applied
     *
     * @return $this
     */
    public function setCartItemTotal($cart_item_total)
    {
        $this->container['cart_item_total'] = $cart_item_total;

        return $this;
    }

    /**
     * Gets additional_cost_total
     *
     * @return float
     */
    public function getAdditionalCostTotal()
    {
        return $this->container['additional_cost_total'];
    }

    /**
     * Sets additional_cost_total
     *
     * @param float $additional_cost_total The total sum of additional costs before any discounts applied
     *
     * @return $this
     */
    public function setAdditionalCostTotal($additional_cost_total)
    {
        $this->container['additional_cost_total'] = $additional_cost_total;

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


