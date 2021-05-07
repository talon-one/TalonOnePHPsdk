<?php
/**
 * NewCoupons
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
 * NewCoupons Class Doc Comment
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NewCoupons implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewCoupons';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'usageLimit' => 'int',
        'discountLimit' => 'float',
        'startDate' => '\DateTime',
        'expiryDate' => '\DateTime',
        'numberOfCoupons' => 'int',
        'uniquePrefix' => 'string',
        'attributes' => 'object',
        'recipientIntegrationId' => 'string',
        'validCharacters' => 'string[]',
        'couponPattern' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'usageLimit' => null,
        'discountLimit' => null,
        'startDate' => 'date-time',
        'expiryDate' => 'date-time',
        'numberOfCoupons' => null,
        'uniquePrefix' => null,
        'attributes' => null,
        'recipientIntegrationId' => null,
        'validCharacters' => null,
        'couponPattern' => null
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
        'usageLimit' => 'usageLimit',
        'discountLimit' => 'discountLimit',
        'startDate' => 'startDate',
        'expiryDate' => 'expiryDate',
        'numberOfCoupons' => 'numberOfCoupons',
        'uniquePrefix' => 'uniquePrefix',
        'attributes' => 'attributes',
        'recipientIntegrationId' => 'recipientIntegrationId',
        'validCharacters' => 'validCharacters',
        'couponPattern' => 'couponPattern'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'usageLimit' => 'setUsageLimit',
        'discountLimit' => 'setDiscountLimit',
        'startDate' => 'setStartDate',
        'expiryDate' => 'setExpiryDate',
        'numberOfCoupons' => 'setNumberOfCoupons',
        'uniquePrefix' => 'setUniquePrefix',
        'attributes' => 'setAttributes',
        'recipientIntegrationId' => 'setRecipientIntegrationId',
        'validCharacters' => 'setValidCharacters',
        'couponPattern' => 'setCouponPattern'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'usageLimit' => 'getUsageLimit',
        'discountLimit' => 'getDiscountLimit',
        'startDate' => 'getStartDate',
        'expiryDate' => 'getExpiryDate',
        'numberOfCoupons' => 'getNumberOfCoupons',
        'uniquePrefix' => 'getUniquePrefix',
        'attributes' => 'getAttributes',
        'recipientIntegrationId' => 'getRecipientIntegrationId',
        'validCharacters' => 'getValidCharacters',
        'couponPattern' => 'getCouponPattern'
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
        $this->container['usageLimit'] = isset($data['usageLimit']) ? $data['usageLimit'] : null;
        $this->container['discountLimit'] = isset($data['discountLimit']) ? $data['discountLimit'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['numberOfCoupons'] = isset($data['numberOfCoupons']) ? $data['numberOfCoupons'] : null;
        $this->container['uniquePrefix'] = isset($data['uniquePrefix']) ? $data['uniquePrefix'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['recipientIntegrationId'] = isset($data['recipientIntegrationId']) ? $data['recipientIntegrationId'] : null;
        $this->container['validCharacters'] = isset($data['validCharacters']) ? $data['validCharacters'] : null;
        $this->container['couponPattern'] = isset($data['couponPattern']) ? $data['couponPattern'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['usageLimit'] === null) {
            $invalidProperties[] = "'usageLimit' can't be null";
        }
        if (($this->container['usageLimit'] > 999999)) {
            $invalidProperties[] = "invalid value for 'usageLimit', must be smaller than or equal to 999999.";
        }

        if (($this->container['usageLimit'] < 0)) {
            $invalidProperties[] = "invalid value for 'usageLimit', must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['discountLimit']) && ($this->container['discountLimit'] > 999999)) {
            $invalidProperties[] = "invalid value for 'discountLimit', must be smaller than or equal to 999999.";
        }

        if (!is_null($this->container['discountLimit']) && ($this->container['discountLimit'] < 0)) {
            $invalidProperties[] = "invalid value for 'discountLimit', must be bigger than or equal to 0.";
        }

        if ($this->container['numberOfCoupons'] === null) {
            $invalidProperties[] = "'numberOfCoupons' can't be null";
        }
        if (!is_null($this->container['couponPattern']) && (mb_strlen($this->container['couponPattern']) > 100)) {
            $invalidProperties[] = "invalid value for 'couponPattern', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['couponPattern']) && (mb_strlen($this->container['couponPattern']) < 3)) {
            $invalidProperties[] = "invalid value for 'couponPattern', the character length must be bigger than or equal to 3.";
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
     * @param int $usageLimit The number of times a coupon code can be redeemed. This can be set to 0 for no limit, but any campaign usage limits will still apply.
     *
     * @return $this
     */
    public function setUsageLimit($usageLimit)
    {

        if (($usageLimit > 999999)) {
            throw new \InvalidArgumentException('invalid value for $usageLimit when calling NewCoupons., must be smaller than or equal to 999999.');
        }
        if (($usageLimit < 0)) {
            throw new \InvalidArgumentException('invalid value for $usageLimit when calling NewCoupons., must be bigger than or equal to 0.');
        }

        $this->container['usageLimit'] = $usageLimit;

        return $this;
    }

    /**
     * Gets discountLimit
     *
     * @return float|null
     */
    public function getDiscountLimit()
    {
        return $this->container['discountLimit'];
    }

    /**
     * Sets discountLimit
     *
     * @param float|null $discountLimit The amount of discounts that can be given with this coupon code.
     *
     * @return $this
     */
    public function setDiscountLimit($discountLimit)
    {

        if (!is_null($discountLimit) && ($discountLimit > 999999)) {
            throw new \InvalidArgumentException('invalid value for $discountLimit when calling NewCoupons., must be smaller than or equal to 999999.');
        }
        if (!is_null($discountLimit) && ($discountLimit < 0)) {
            throw new \InvalidArgumentException('invalid value for $discountLimit when calling NewCoupons., must be bigger than or equal to 0.');
        }

        $this->container['discountLimit'] = $discountLimit;

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
     * @param \DateTime|null $startDate Timestamp at which point the coupon becomes valid.
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
     * @param \DateTime|null $expiryDate Expiry date of the coupon. Coupon never expires if this is omitted, zero, or negative.
     *
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;

        return $this;
    }

    /**
     * Gets numberOfCoupons
     *
     * @return int
     */
    public function getNumberOfCoupons()
    {
        return $this->container['numberOfCoupons'];
    }

    /**
     * Sets numberOfCoupons
     *
     * @param int $numberOfCoupons The number of new coupon codes to generate for the campaign. Must be at least 1.
     *
     * @return $this
     */
    public function setNumberOfCoupons($numberOfCoupons)
    {
        $this->container['numberOfCoupons'] = $numberOfCoupons;

        return $this;
    }

    /**
     * Gets uniquePrefix
     *
     * @return string|null
     */
    public function getUniquePrefix()
    {
        return $this->container['uniquePrefix'];
    }

    /**
     * Sets uniquePrefix
     *
     * @param string|null $uniquePrefix A unique prefix to prepend to all generated coupons.
     *
     * @return $this
     */
    public function setUniquePrefix($uniquePrefix)
    {
        $this->container['uniquePrefix'] = $uniquePrefix;

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
     * @param object|null $attributes Arbitrary properties associated with this item
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets recipientIntegrationId
     *
     * @return string|null
     */
    public function getRecipientIntegrationId()
    {
        return $this->container['recipientIntegrationId'];
    }

    /**
     * Sets recipientIntegrationId
     *
     * @param string|null $recipientIntegrationId The integration ID for this coupon's beneficiary's profile
     *
     * @return $this
     */
    public function setRecipientIntegrationId($recipientIntegrationId)
    {
        $this->container['recipientIntegrationId'] = $recipientIntegrationId;

        return $this;
    }

    /**
     * Gets validCharacters
     *
     * @return string[]|null
     */
    public function getValidCharacters()
    {
        return $this->container['validCharacters'];
    }

    /**
     * Sets validCharacters
     *
     * @param string[]|null $validCharacters Set of characters to be used when generating random part of code. Defaults to [A-Z, 0-9] (in terms of RegExp).
     *
     * @return $this
     */
    public function setValidCharacters($validCharacters)
    {
        $this->container['validCharacters'] = $validCharacters;

        return $this;
    }

    /**
     * Gets couponPattern
     *
     * @return string|null
     */
    public function getCouponPattern()
    {
        return $this->container['couponPattern'];
    }

    /**
     * Sets couponPattern
     *
     * @param string|null $couponPattern The pattern that will be used to generate coupon codes. The character `#` acts as a placeholder and will be replaced by a random character from the `validCharacters` set.
     *
     * @return $this
     */
    public function setCouponPattern($couponPattern)
    {
        if (!is_null($couponPattern) && (mb_strlen($couponPattern) > 100)) {
            throw new \InvalidArgumentException('invalid length for $couponPattern when calling NewCoupons., must be smaller than or equal to 100.');
        }
        if (!is_null($couponPattern) && (mb_strlen($couponPattern) < 3)) {
            throw new \InvalidArgumentException('invalid length for $couponPattern when calling NewCoupons., must be bigger than or equal to 3.');
        }

        $this->container['couponPattern'] = $couponPattern;

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


