<?php
/**
 * Coupon
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
 * Coupon Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Coupon implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Coupon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'created' => '\DateTime',
        'campaignId' => 'int',
        'value' => 'string',
        'usageLimit' => 'int',
        'discountLimit' => 'float',
        'reservationLimit' => 'int',
        'startDate' => '\DateTime',
        'expiryDate' => '\DateTime',
        'limits' => '\TalonOne\Client\Model\LimitConfig[]',
        'usageCounter' => 'int',
        'discountCounter' => 'float',
        'discountRemainder' => 'float',
        'reservationCounter' => 'float',
        'attributes' => 'object',
        'referralId' => 'int',
        'recipientIntegrationId' => 'string',
        'importId' => 'int',
        'reservation' => 'bool',
        'batchId' => 'string',
        'isReservationMandatory' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created' => 'date-time',
        'campaignId' => null,
        'value' => null,
        'usageLimit' => null,
        'discountLimit' => null,
        'reservationLimit' => null,
        'startDate' => 'date-time',
        'expiryDate' => 'date-time',
        'limits' => null,
        'usageCounter' => null,
        'discountCounter' => null,
        'discountRemainder' => null,
        'reservationCounter' => null,
        'attributes' => null,
        'referralId' => null,
        'recipientIntegrationId' => null,
        'importId' => null,
        'reservation' => null,
        'batchId' => null,
        'isReservationMandatory' => null
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
        'campaignId' => 'campaignId',
        'value' => 'value',
        'usageLimit' => 'usageLimit',
        'discountLimit' => 'discountLimit',
        'reservationLimit' => 'reservationLimit',
        'startDate' => 'startDate',
        'expiryDate' => 'expiryDate',
        'limits' => 'limits',
        'usageCounter' => 'usageCounter',
        'discountCounter' => 'discountCounter',
        'discountRemainder' => 'discountRemainder',
        'reservationCounter' => 'reservationCounter',
        'attributes' => 'attributes',
        'referralId' => 'referralId',
        'recipientIntegrationId' => 'recipientIntegrationId',
        'importId' => 'importId',
        'reservation' => 'reservation',
        'batchId' => 'batchId',
        'isReservationMandatory' => 'isReservationMandatory'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created' => 'setCreated',
        'campaignId' => 'setCampaignId',
        'value' => 'setValue',
        'usageLimit' => 'setUsageLimit',
        'discountLimit' => 'setDiscountLimit',
        'reservationLimit' => 'setReservationLimit',
        'startDate' => 'setStartDate',
        'expiryDate' => 'setExpiryDate',
        'limits' => 'setLimits',
        'usageCounter' => 'setUsageCounter',
        'discountCounter' => 'setDiscountCounter',
        'discountRemainder' => 'setDiscountRemainder',
        'reservationCounter' => 'setReservationCounter',
        'attributes' => 'setAttributes',
        'referralId' => 'setReferralId',
        'recipientIntegrationId' => 'setRecipientIntegrationId',
        'importId' => 'setImportId',
        'reservation' => 'setReservation',
        'batchId' => 'setBatchId',
        'isReservationMandatory' => 'setIsReservationMandatory'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created' => 'getCreated',
        'campaignId' => 'getCampaignId',
        'value' => 'getValue',
        'usageLimit' => 'getUsageLimit',
        'discountLimit' => 'getDiscountLimit',
        'reservationLimit' => 'getReservationLimit',
        'startDate' => 'getStartDate',
        'expiryDate' => 'getExpiryDate',
        'limits' => 'getLimits',
        'usageCounter' => 'getUsageCounter',
        'discountCounter' => 'getDiscountCounter',
        'discountRemainder' => 'getDiscountRemainder',
        'reservationCounter' => 'getReservationCounter',
        'attributes' => 'getAttributes',
        'referralId' => 'getReferralId',
        'recipientIntegrationId' => 'getRecipientIntegrationId',
        'importId' => 'getImportId',
        'reservation' => 'getReservation',
        'batchId' => 'getBatchId',
        'isReservationMandatory' => 'getIsReservationMandatory'
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
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['usageLimit'] = isset($data['usageLimit']) ? $data['usageLimit'] : null;
        $this->container['discountLimit'] = isset($data['discountLimit']) ? $data['discountLimit'] : null;
        $this->container['reservationLimit'] = isset($data['reservationLimit']) ? $data['reservationLimit'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['usageCounter'] = isset($data['usageCounter']) ? $data['usageCounter'] : null;
        $this->container['discountCounter'] = isset($data['discountCounter']) ? $data['discountCounter'] : null;
        $this->container['discountRemainder'] = isset($data['discountRemainder']) ? $data['discountRemainder'] : null;
        $this->container['reservationCounter'] = isset($data['reservationCounter']) ? $data['reservationCounter'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['referralId'] = isset($data['referralId']) ? $data['referralId'] : null;
        $this->container['recipientIntegrationId'] = isset($data['recipientIntegrationId']) ? $data['recipientIntegrationId'] : null;
        $this->container['importId'] = isset($data['importId']) ? $data['importId'] : null;
        $this->container['reservation'] = isset($data['reservation']) ? $data['reservation'] : true;
        $this->container['batchId'] = isset($data['batchId']) ? $data['batchId'] : null;
        $this->container['isReservationMandatory'] = isset($data['isReservationMandatory']) ? $data['isReservationMandatory'] : true;
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
        if ($this->container['campaignId'] === null) {
            $invalidProperties[] = "'campaignId' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ((mb_strlen($this->container['value']) < 4)) {
            $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 4.";
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

        if ($this->container['usageCounter'] === null) {
            $invalidProperties[] = "'usageCounter' can't be null";
        }
        if (!is_null($this->container['recipientIntegrationId']) && (mb_strlen($this->container['recipientIntegrationId']) > 1000)) {
            $invalidProperties[] = "invalid value for 'recipientIntegrationId', the character length must be smaller than or equal to 1000.";
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
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value The coupon code.
     *
     * @return $this
     */
    public function setValue($value)
    {

        if ((mb_strlen($value) < 4)) {
            throw new \InvalidArgumentException('invalid length for $value when calling Coupon., must be bigger than or equal to 4.');
        }

        $this->container['value'] = $value;

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
     * @param int $usageLimit The number of times the coupon code can be redeemed. `0` means unlimited redemptions but any campaign usage limits will still apply.
     *
     * @return $this
     */
    public function setUsageLimit($usageLimit)
    {

        if (($usageLimit > 999999)) {
            throw new \InvalidArgumentException('invalid value for $usageLimit when calling Coupon., must be smaller than or equal to 999999.');
        }
        if (($usageLimit < 0)) {
            throw new \InvalidArgumentException('invalid value for $usageLimit when calling Coupon., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid value for $discountLimit when calling Coupon., must be smaller than or equal to 999999.');
        }
        if (!is_null($discountLimit) && ($discountLimit < 0)) {
            throw new \InvalidArgumentException('invalid value for $discountLimit when calling Coupon., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid value for $reservationLimit when calling Coupon., must be smaller than or equal to 999999.');
        }
        if (!is_null($reservationLimit) && ($reservationLimit < 0)) {
            throw new \InvalidArgumentException('invalid value for $reservationLimit when calling Coupon., must be bigger than or equal to 0.');
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
     * @param \DateTime|null $expiryDate Expiration date of the coupon. Coupon never expires if this is omitted, zero, or negative.
     *
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;

        return $this;
    }

    /**
     * Gets limits
     *
     * @return \TalonOne\Client\Model\LimitConfig[]|null
     */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
     * Sets limits
     *
     * @param \TalonOne\Client\Model\LimitConfig[]|null $limits Limits configuration for a coupon. These limits will override the limits set from the campaign.  **Note:** Only usable when creating a single coupon which is not tied to a specific recipient. Only per-profile limits are allowed to be configured.
     *
     * @return $this
     */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;

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
     * @param int $usageCounter The number of times the coupon has been successfully redeemed.
     *
     * @return $this
     */
    public function setUsageCounter($usageCounter)
    {
        $this->container['usageCounter'] = $usageCounter;

        return $this;
    }

    /**
     * Gets discountCounter
     *
     * @return float|null
     */
    public function getDiscountCounter()
    {
        return $this->container['discountCounter'];
    }

    /**
     * Sets discountCounter
     *
     * @param float|null $discountCounter The amount of discounts given on rules redeeming this coupon. Only usable if a coupon discount budget was set for this coupon.
     *
     * @return $this
     */
    public function setDiscountCounter($discountCounter)
    {
        $this->container['discountCounter'] = $discountCounter;

        return $this;
    }

    /**
     * Gets discountRemainder
     *
     * @return float|null
     */
    public function getDiscountRemainder()
    {
        return $this->container['discountRemainder'];
    }

    /**
     * Sets discountRemainder
     *
     * @param float|null $discountRemainder The remaining discount this coupon can give.
     *
     * @return $this
     */
    public function setDiscountRemainder($discountRemainder)
    {
        $this->container['discountRemainder'] = $discountRemainder;

        return $this;
    }

    /**
     * Gets reservationCounter
     *
     * @return float|null
     */
    public function getReservationCounter()
    {
        return $this->container['reservationCounter'];
    }

    /**
     * Sets reservationCounter
     *
     * @param float|null $reservationCounter The number of times this coupon has been reserved.
     *
     * @return $this
     */
    public function setReservationCounter($reservationCounter)
    {
        $this->container['reservationCounter'] = $reservationCounter;

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
     * @param object|null $attributes Custom attributes associated with this coupon.
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

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
     * @param int|null $referralId The integration ID of the referring customer (if any) for whom this coupon was created as an effect.
     *
     * @return $this
     */
    public function setReferralId($referralId)
    {
        $this->container['referralId'] = $referralId;

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
     * @param string|null $recipientIntegrationId The Integration ID of the customer that is allowed to redeem this coupon.
     *
     * @return $this
     */
    public function setRecipientIntegrationId($recipientIntegrationId)
    {
        if (!is_null($recipientIntegrationId) && (mb_strlen($recipientIntegrationId) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $recipientIntegrationId when calling Coupon., must be smaller than or equal to 1000.');
        }

        $this->container['recipientIntegrationId'] = $recipientIntegrationId;

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
     * @param int|null $importId The ID of the Import which created this coupon.
     *
     * @return $this
     */
    public function setImportId($importId)
    {
        $this->container['importId'] = $importId;

        return $this;
    }

    /**
     * Gets reservation
     *
     * @return bool|null
     */
    public function getReservation()
    {
        return $this->container['reservation'];
    }

    /**
     * Sets reservation
     *
     * @param bool|null $reservation Defines the type of reservation: - `true`: The reservation is a soft reservation. Any customer can use the coupon. This is done via the [Create coupon reservation](https://docs.talon.one/integration-api#operation/createCouponReservation) endpoint. - `false`: The reservation is a hard reservation. Only the associated customer (`recipientIntegrationId`) can use the coupon. This is done via the Campaign Manager when you create a coupon for a given `recipientIntegrationId`, the [Create coupons](https://docs.talon.one/management-api#operation/createCoupons) endpoint or [Create coupons for multiple recipients](https://docs.talon.one/management-api#operation/createCouponsForMultipleRecipients) endpoint.
     *
     * @return $this
     */
    public function setReservation($reservation)
    {
        $this->container['reservation'] = $reservation;

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
     * @param string|null $batchId The id of the batch the coupon belongs to.
     *
     * @return $this
     */
    public function setBatchId($batchId)
    {
        $this->container['batchId'] = $batchId;

        return $this;
    }

    /**
     * Gets isReservationMandatory
     *
     * @return bool|null
     */
    public function getIsReservationMandatory()
    {
        return $this->container['isReservationMandatory'];
    }

    /**
     * Sets isReservationMandatory
     *
     * @param bool|null $isReservationMandatory Whether the reservation effect actually created a new reservation.
     *
     * @return $this
     */
    public function setIsReservationMandatory($isReservationMandatory)
    {
        $this->container['isReservationMandatory'] = $isReservationMandatory;

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


