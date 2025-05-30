<?php
/**
 * NewCouponsForMultipleRecipients
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
 * NewCouponsForMultipleRecipients Class Doc Comment
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NewCouponsForMultipleRecipients implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewCouponsForMultipleRecipients';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'usageLimit' => 'int',
        'discountLimit' => 'float',
        'reservationLimit' => 'int',
        'startDate' => '\DateTime',
        'expiryDate' => '\DateTime',
        'attributes' => 'object',
        'recipientsIntegrationIds' => 'string[]',
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
        'reservationLimit' => null,
        'startDate' => 'date-time',
        'expiryDate' => 'date-time',
        'attributes' => null,
        'recipientsIntegrationIds' => null,
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
        'reservationLimit' => 'reservationLimit',
        'startDate' => 'startDate',
        'expiryDate' => 'expiryDate',
        'attributes' => 'attributes',
        'recipientsIntegrationIds' => 'recipientsIntegrationIds',
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
        'reservationLimit' => 'setReservationLimit',
        'startDate' => 'setStartDate',
        'expiryDate' => 'setExpiryDate',
        'attributes' => 'setAttributes',
        'recipientsIntegrationIds' => 'setRecipientsIntegrationIds',
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
        'reservationLimit' => 'getReservationLimit',
        'startDate' => 'getStartDate',
        'expiryDate' => 'getExpiryDate',
        'attributes' => 'getAttributes',
        'recipientsIntegrationIds' => 'getRecipientsIntegrationIds',
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
        $this->container['reservationLimit'] = isset($data['reservationLimit']) ? $data['reservationLimit'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['recipientsIntegrationIds'] = isset($data['recipientsIntegrationIds']) ? $data['recipientsIntegrationIds'] : null;
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

        if (!is_null($this->container['reservationLimit']) && ($this->container['reservationLimit'] > 999999)) {
            $invalidProperties[] = "invalid value for 'reservationLimit', must be smaller than or equal to 999999.";
        }

        if (!is_null($this->container['reservationLimit']) && ($this->container['reservationLimit'] < 0)) {
            $invalidProperties[] = "invalid value for 'reservationLimit', must be bigger than or equal to 0.";
        }

        if ($this->container['recipientsIntegrationIds'] === null) {
            $invalidProperties[] = "'recipientsIntegrationIds' can't be null";
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
     * @param int $usageLimit The number of times the coupon code can be redeemed. `0` means unlimited redemptions but any campaign usage limits will still apply.
     *
     * @return $this
     */
    public function setUsageLimit($usageLimit)
    {

        if (($usageLimit > 999999)) {
            throw new \InvalidArgumentException('invalid value for $usageLimit when calling NewCouponsForMultipleRecipients., must be smaller than or equal to 999999.');
        }
        if (($usageLimit < 0)) {
            throw new \InvalidArgumentException('invalid value for $usageLimit when calling NewCouponsForMultipleRecipients., must be bigger than or equal to 0.');
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
     * @param float|null $discountLimit The total discount value that the code can give. Typically used to represent a gift card value.
     *
     * @return $this
     */
    public function setDiscountLimit($discountLimit)
    {

        if (!is_null($discountLimit) && ($discountLimit > 999999)) {
            throw new \InvalidArgumentException('invalid value for $discountLimit when calling NewCouponsForMultipleRecipients., must be smaller than or equal to 999999.');
        }
        if (!is_null($discountLimit) && ($discountLimit < 0)) {
            throw new \InvalidArgumentException('invalid value for $discountLimit when calling NewCouponsForMultipleRecipients., must be bigger than or equal to 0.');
        }

        $this->container['discountLimit'] = $discountLimit;

        return $this;
    }

    /**
     * Gets reservationLimit
     *
     * @return int|null
     */
    public function getReservationLimit()
    {
        return $this->container['reservationLimit'];
    }

    /**
     * Sets reservationLimit
     *
     * @param int|null $reservationLimit The number of reservations that can be made with this coupon code.
     *
     * @return $this
     */
    public function setReservationLimit($reservationLimit)
    {

        if (!is_null($reservationLimit) && ($reservationLimit > 999999)) {
            throw new \InvalidArgumentException('invalid value for $reservationLimit when calling NewCouponsForMultipleRecipients., must be smaller than or equal to 999999.');
        }
        if (!is_null($reservationLimit) && ($reservationLimit < 0)) {
            throw new \InvalidArgumentException('invalid value for $reservationLimit when calling NewCouponsForMultipleRecipients., must be bigger than or equal to 0.');
        }

        $this->container['reservationLimit'] = $reservationLimit;

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
     * @param \DateTime|null $expiryDate Expiration date of the coupon. Coupon never expires if this is omitted.
     *
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;

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
     * Gets recipientsIntegrationIds
     *
     * @return string[]
     */
    public function getRecipientsIntegrationIds()
    {
        return $this->container['recipientsIntegrationIds'];
    }

    /**
     * Sets recipientsIntegrationIds
     *
     * @param string[] $recipientsIntegrationIds The integration IDs for recipients.
     *
     * @return $this
     */
    public function setRecipientsIntegrationIds($recipientsIntegrationIds)
    {
        $this->container['recipientsIntegrationIds'] = $recipientsIntegrationIds;

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
     * @param string[]|null $validCharacters List of characters used to generate the random parts of a code. By default, the list of characters is equivalent to the `[A-Z, 0-9]` regular expression.
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
     * @param string|null $couponPattern The pattern used to generate coupon codes. The character `#` is a placeholder and is replaced by a random character from the `validCharacters` set.
     *
     * @return $this
     */
    public function setCouponPattern($couponPattern)
    {
        if (!is_null($couponPattern) && (mb_strlen($couponPattern) > 100)) {
            throw new \InvalidArgumentException('invalid length for $couponPattern when calling NewCouponsForMultipleRecipients., must be smaller than or equal to 100.');
        }
        if (!is_null($couponPattern) && (mb_strlen($couponPattern) < 3)) {
            throw new \InvalidArgumentException('invalid length for $couponPattern when calling NewCouponsForMultipleRecipients., must be bigger than or equal to 3.');
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


