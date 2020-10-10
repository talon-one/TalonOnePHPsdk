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
        'integrationId' => 'string',
        'created' => '\DateTime',
        'applicationId' => 'int',
        'profileId' => 'string',
        'couponCodes' => 'string[]',
        'referralCode' => 'string',
        'state' => 'string',
        'cartItems' => '\TalonOne\Client\Model\CartItem[]',
        'additionalCosts' => 'map[string,\TalonOne\Client\Model\AdditionalCost]',
        'identifiers' => 'string[]',
        'attributes' => 'object',
        'firstSession' => 'bool',
        'total' => 'float',
        'cartItemTotal' => 'float',
        'additionalCostTotal' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'integrationId' => 'string',
        'created' => 'date-time',
        'applicationId' => null,
        'profileId' => null,
        'couponCodes' => null,
        'referralCode' => null,
        'state' => null,
        'cartItems' => null,
        'additionalCosts' => null,
        'identifiers' => null,
        'attributes' => null,
        'firstSession' => null,
        'total' => null,
        'cartItemTotal' => null,
        'additionalCostTotal' => null
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
        'applicationId' => 'applicationId',
        'profileId' => 'profileId',
        'couponCodes' => 'couponCodes',
        'referralCode' => 'referralCode',
        'state' => 'state',
        'cartItems' => 'cartItems',
        'additionalCosts' => 'additionalCosts',
        'identifiers' => 'identifiers',
        'attributes' => 'attributes',
        'firstSession' => 'firstSession',
        'total' => 'total',
        'cartItemTotal' => 'cartItemTotal',
        'additionalCostTotal' => 'additionalCostTotal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'integrationId' => 'setIntegrationId',
        'created' => 'setCreated',
        'applicationId' => 'setApplicationId',
        'profileId' => 'setProfileId',
        'couponCodes' => 'setCouponCodes',
        'referralCode' => 'setReferralCode',
        'state' => 'setState',
        'cartItems' => 'setCartItems',
        'additionalCosts' => 'setAdditionalCosts',
        'identifiers' => 'setIdentifiers',
        'attributes' => 'setAttributes',
        'firstSession' => 'setFirstSession',
        'total' => 'setTotal',
        'cartItemTotal' => 'setCartItemTotal',
        'additionalCostTotal' => 'setAdditionalCostTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'integrationId' => 'getIntegrationId',
        'created' => 'getCreated',
        'applicationId' => 'getApplicationId',
        'profileId' => 'getProfileId',
        'couponCodes' => 'getCouponCodes',
        'referralCode' => 'getReferralCode',
        'state' => 'getState',
        'cartItems' => 'getCartItems',
        'additionalCosts' => 'getAdditionalCosts',
        'identifiers' => 'getIdentifiers',
        'attributes' => 'getAttributes',
        'firstSession' => 'getFirstSession',
        'total' => 'getTotal',
        'cartItemTotal' => 'getCartItemTotal',
        'additionalCostTotal' => 'getAdditionalCostTotal'
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
        $this->container['integrationId'] = isset($data['integrationId']) ? $data['integrationId'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['profileId'] = isset($data['profileId']) ? $data['profileId'] : null;
        $this->container['couponCodes'] = isset($data['couponCodes']) ? $data['couponCodes'] : null;
        $this->container['referralCode'] = isset($data['referralCode']) ? $data['referralCode'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : 'open';
        $this->container['cartItems'] = isset($data['cartItems']) ? $data['cartItems'] : null;
        $this->container['additionalCosts'] = isset($data['additionalCosts']) ? $data['additionalCosts'] : null;
        $this->container['identifiers'] = isset($data['identifiers']) ? $data['identifiers'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['firstSession'] = isset($data['firstSession']) ? $data['firstSession'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['cartItemTotal'] = isset($data['cartItemTotal']) ? $data['cartItemTotal'] : null;
        $this->container['additionalCostTotal'] = isset($data['additionalCostTotal']) ? $data['additionalCostTotal'] : null;
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
        if ($this->container['applicationId'] === null) {
            $invalidProperties[] = "'applicationId' can't be null";
        }
        if ($this->container['profileId'] === null) {
            $invalidProperties[] = "'profileId' can't be null";
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

        if ($this->container['cartItems'] === null) {
            $invalidProperties[] = "'cartItems' can't be null";
        }
        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
        }
        if ($this->container['firstSession'] === null) {
            $invalidProperties[] = "'firstSession' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['cartItemTotal'] === null) {
            $invalidProperties[] = "'cartItemTotal' can't be null";
        }
        if ($this->container['additionalCostTotal'] === null) {
            $invalidProperties[] = "'additionalCostTotal' can't be null";
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
     * @param int $applicationId The ID of the application that owns this entity.
     *
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;

        return $this;
    }

    /**
     * Gets profileId
     *
     * @return string
     */
    public function getProfileId()
    {
        return $this->container['profileId'];
    }

    /**
     * Sets profileId
     *
     * @param string $profileId ID of the customers profile as used within this Talon.One account. May be omitted or set to the empty string if the customer does not yet have a known profile ID.
     *
     * @return $this
     */
    public function setProfileId($profileId)
    {
        $this->container['profileId'] = $profileId;

        return $this;
    }

    /**
     * Gets couponCodes
     *
     * @return string[]|null
     */
    public function getCouponCodes()
    {
        return $this->container['couponCodes'];
    }

    /**
     * Sets couponCodes
     *
     * @param string[]|null $couponCodes Any coupon codes entered.
     *
     * @return $this
     */
    public function setCouponCodes($couponCodes)
    {
        $this->container['couponCodes'] = $couponCodes;

        return $this;
    }

    /**
     * Gets referralCode
     *
     * @return string|null
     */
    public function getReferralCode()
    {
        return $this->container['referralCode'];
    }

    /**
     * Sets referralCode
     *
     * @param string|null $referralCode Any referral code entered.
     *
     * @return $this
     */
    public function setReferralCode($referralCode)
    {
        $this->container['referralCode'] = $referralCode;

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
     * Gets cartItems
     *
     * @return \TalonOne\Client\Model\CartItem[]
     */
    public function getCartItems()
    {
        return $this->container['cartItems'];
    }

    /**
     * Sets cartItems
     *
     * @param \TalonOne\Client\Model\CartItem[] $cartItems All items the customer will be purchasing in this session
     *
     * @return $this
     */
    public function setCartItems($cartItems)
    {
        $this->container['cartItems'] = $cartItems;

        return $this;
    }

    /**
     * Gets additionalCosts
     *
     * @return map[string,\TalonOne\Client\Model\AdditionalCost]|null
     */
    public function getAdditionalCosts()
    {
        return $this->container['additionalCosts'];
    }

    /**
     * Sets additionalCosts
     *
     * @param map[string,\TalonOne\Client\Model\AdditionalCost]|null $additionalCosts Any costs associated with the session that can not be explicitly attributed to cart items. Examples include shipping costs and service fees.
     *
     * @return $this
     */
    public function setAdditionalCosts($additionalCosts)
    {
        $this->container['additionalCosts'] = $additionalCosts;

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
     * Gets firstSession
     *
     * @return bool
     */
    public function getFirstSession()
    {
        return $this->container['firstSession'];
    }

    /**
     * Sets firstSession
     *
     * @param bool $firstSession Indicates whether this is the first session for the customer's profile. Will always be true for anonymous sessions.
     *
     * @return $this
     */
    public function setFirstSession($firstSession)
    {
        $this->container['firstSession'] = $firstSession;

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
     * Gets cartItemTotal
     *
     * @return float
     */
    public function getCartItemTotal()
    {
        return $this->container['cartItemTotal'];
    }

    /**
     * Sets cartItemTotal
     *
     * @param float $cartItemTotal The total sum of cart-items before any discounts applied
     *
     * @return $this
     */
    public function setCartItemTotal($cartItemTotal)
    {
        $this->container['cartItemTotal'] = $cartItemTotal;

        return $this;
    }

    /**
     * Gets additionalCostTotal
     *
     * @return float
     */
    public function getAdditionalCostTotal()
    {
        return $this->container['additionalCostTotal'];
    }

    /**
     * Sets additionalCostTotal
     *
     * @param float $additionalCostTotal The total sum of additional costs before any discounts applied
     *
     * @return $this
     */
    public function setAdditionalCostTotal($additionalCostTotal)
    {
        $this->container['additionalCostTotal'] = $additionalCostTotal;

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


