<?php
/**
 * CouponCreationJob
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
 * CouponCreationJob Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CouponCreationJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CouponCreationJob';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'created' => '\DateTime',
        'campaignId' => 'int',
        'applicationId' => 'int',
        'accountId' => 'int',
        'usageLimit' => 'int',
        'discountLimit' => 'float',
        'reservationLimit' => 'int',
        'startDate' => '\DateTime',
        'expiryDate' => '\DateTime',
        'numberOfCoupons' => 'int',
        'couponSettings' => '\TalonOne\Client\Model\CodeGeneratorSettings',
        'attributes' => 'object',
        'batchId' => 'string',
        'status' => 'string',
        'createdAmount' => 'int',
        'failCount' => 'int',
        'errors' => 'string[]',
        'createdBy' => 'int',
        'communicated' => 'bool',
        'chunkExecutionCount' => 'int',
        'chunkSize' => 'int'
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
        'applicationId' => null,
        'accountId' => null,
        'usageLimit' => null,
        'discountLimit' => null,
        'reservationLimit' => null,
        'startDate' => 'date-time',
        'expiryDate' => 'date-time',
        'numberOfCoupons' => null,
        'couponSettings' => null,
        'attributes' => null,
        'batchId' => null,
        'status' => null,
        'createdAmount' => null,
        'failCount' => null,
        'errors' => null,
        'createdBy' => null,
        'communicated' => null,
        'chunkExecutionCount' => null,
        'chunkSize' => null
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
        'applicationId' => 'applicationId',
        'accountId' => 'accountId',
        'usageLimit' => 'usageLimit',
        'discountLimit' => 'discountLimit',
        'reservationLimit' => 'reservationLimit',
        'startDate' => 'startDate',
        'expiryDate' => 'expiryDate',
        'numberOfCoupons' => 'numberOfCoupons',
        'couponSettings' => 'couponSettings',
        'attributes' => 'attributes',
        'batchId' => 'batchId',
        'status' => 'status',
        'createdAmount' => 'createdAmount',
        'failCount' => 'failCount',
        'errors' => 'errors',
        'createdBy' => 'createdBy',
        'communicated' => 'communicated',
        'chunkExecutionCount' => 'chunkExecutionCount',
        'chunkSize' => 'chunkSize'
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
        'applicationId' => 'setApplicationId',
        'accountId' => 'setAccountId',
        'usageLimit' => 'setUsageLimit',
        'discountLimit' => 'setDiscountLimit',
        'reservationLimit' => 'setReservationLimit',
        'startDate' => 'setStartDate',
        'expiryDate' => 'setExpiryDate',
        'numberOfCoupons' => 'setNumberOfCoupons',
        'couponSettings' => 'setCouponSettings',
        'attributes' => 'setAttributes',
        'batchId' => 'setBatchId',
        'status' => 'setStatus',
        'createdAmount' => 'setCreatedAmount',
        'failCount' => 'setFailCount',
        'errors' => 'setErrors',
        'createdBy' => 'setCreatedBy',
        'communicated' => 'setCommunicated',
        'chunkExecutionCount' => 'setChunkExecutionCount',
        'chunkSize' => 'setChunkSize'
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
        'applicationId' => 'getApplicationId',
        'accountId' => 'getAccountId',
        'usageLimit' => 'getUsageLimit',
        'discountLimit' => 'getDiscountLimit',
        'reservationLimit' => 'getReservationLimit',
        'startDate' => 'getStartDate',
        'expiryDate' => 'getExpiryDate',
        'numberOfCoupons' => 'getNumberOfCoupons',
        'couponSettings' => 'getCouponSettings',
        'attributes' => 'getAttributes',
        'batchId' => 'getBatchId',
        'status' => 'getStatus',
        'createdAmount' => 'getCreatedAmount',
        'failCount' => 'getFailCount',
        'errors' => 'getErrors',
        'createdBy' => 'getCreatedBy',
        'communicated' => 'getCommunicated',
        'chunkExecutionCount' => 'getChunkExecutionCount',
        'chunkSize' => 'getChunkSize'
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
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['usageLimit'] = isset($data['usageLimit']) ? $data['usageLimit'] : null;
        $this->container['discountLimit'] = isset($data['discountLimit']) ? $data['discountLimit'] : null;
        $this->container['reservationLimit'] = isset($data['reservationLimit']) ? $data['reservationLimit'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['numberOfCoupons'] = isset($data['numberOfCoupons']) ? $data['numberOfCoupons'] : null;
        $this->container['couponSettings'] = isset($data['couponSettings']) ? $data['couponSettings'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['batchId'] = isset($data['batchId']) ? $data['batchId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createdAmount'] = isset($data['createdAmount']) ? $data['createdAmount'] : null;
        $this->container['failCount'] = isset($data['failCount']) ? $data['failCount'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['communicated'] = isset($data['communicated']) ? $data['communicated'] : null;
        $this->container['chunkExecutionCount'] = isset($data['chunkExecutionCount']) ? $data['chunkExecutionCount'] : null;
        $this->container['chunkSize'] = isset($data['chunkSize']) ? $data['chunkSize'] : null;
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
        if ($this->container['applicationId'] === null) {
            $invalidProperties[] = "'applicationId' can't be null";
        }
        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
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

        if ($this->container['numberOfCoupons'] === null) {
            $invalidProperties[] = "'numberOfCoupons' can't be null";
        }
        if (($this->container['numberOfCoupons'] > 5000000)) {
            $invalidProperties[] = "invalid value for 'numberOfCoupons', must be smaller than or equal to 5000000.";
        }

        if (($this->container['numberOfCoupons'] < 1)) {
            $invalidProperties[] = "invalid value for 'numberOfCoupons', must be bigger than or equal to 1.";
        }

        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
        }
        if ($this->container['batchId'] === null) {
            $invalidProperties[] = "'batchId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['createdAmount'] === null) {
            $invalidProperties[] = "'createdAmount' can't be null";
        }
        if ($this->container['failCount'] === null) {
            $invalidProperties[] = "'failCount' can't be null";
        }
        if ($this->container['errors'] === null) {
            $invalidProperties[] = "'errors' can't be null";
        }
        if ($this->container['createdBy'] === null) {
            $invalidProperties[] = "'createdBy' can't be null";
        }
        if ($this->container['communicated'] === null) {
            $invalidProperties[] = "'communicated' can't be null";
        }
        if ($this->container['chunkExecutionCount'] === null) {
            $invalidProperties[] = "'chunkExecutionCount' can't be null";
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
            throw new \InvalidArgumentException('invalid value for $usageLimit when calling CouponCreationJob., must be smaller than or equal to 999999.');
        }
        if (($usageLimit < 0)) {
            throw new \InvalidArgumentException('invalid value for $usageLimit when calling CouponCreationJob., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid value for $discountLimit when calling CouponCreationJob., must be smaller than or equal to 999999.');
        }
        if (!is_null($discountLimit) && ($discountLimit < 0)) {
            throw new \InvalidArgumentException('invalid value for $discountLimit when calling CouponCreationJob., must be bigger than or equal to 0.');
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
            throw new \InvalidArgumentException('invalid value for $reservationLimit when calling CouponCreationJob., must be smaller than or equal to 999999.');
        }
        if (!is_null($reservationLimit) && ($reservationLimit < 0)) {
            throw new \InvalidArgumentException('invalid value for $reservationLimit when calling CouponCreationJob., must be bigger than or equal to 0.');
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
     * @param int $numberOfCoupons The number of new coupon codes to generate for the campaign.
     *
     * @return $this
     */
    public function setNumberOfCoupons($numberOfCoupons)
    {

        if (($numberOfCoupons > 5000000)) {
            throw new \InvalidArgumentException('invalid value for $numberOfCoupons when calling CouponCreationJob., must be smaller than or equal to 5000000.');
        }
        if (($numberOfCoupons < 1)) {
            throw new \InvalidArgumentException('invalid value for $numberOfCoupons when calling CouponCreationJob., must be bigger than or equal to 1.');
        }

        $this->container['numberOfCoupons'] = $numberOfCoupons;

        return $this;
    }

    /**
     * Gets couponSettings
     *
     * @return \TalonOne\Client\Model\CodeGeneratorSettings|null
     */
    public function getCouponSettings()
    {
        return $this->container['couponSettings'];
    }

    /**
     * Sets couponSettings
     *
     * @param \TalonOne\Client\Model\CodeGeneratorSettings|null $couponSettings couponSettings
     *
     * @return $this
     */
    public function setCouponSettings($couponSettings)
    {
        $this->container['couponSettings'] = $couponSettings;

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
     * @param object $attributes Arbitrary properties associated with coupons.
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets batchId
     *
     * @return string
     */
    public function getBatchId()
    {
        return $this->container['batchId'];
    }

    /**
     * Sets batchId
     *
     * @param string $batchId The batch ID coupons created by this job will bear.
     *
     * @return $this
     */
    public function setBatchId($batchId)
    {
        $this->container['batchId'] = $batchId;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The current status of this request. Possible values: - `pending verification` - `pending` - `completed` - `failed` - `coupon pattern full`
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets createdAmount
     *
     * @return int
     */
    public function getCreatedAmount()
    {
        return $this->container['createdAmount'];
    }

    /**
     * Sets createdAmount
     *
     * @param int $createdAmount The number of coupon codes that were already created for this request.
     *
     * @return $this
     */
    public function setCreatedAmount($createdAmount)
    {
        $this->container['createdAmount'] = $createdAmount;

        return $this;
    }

    /**
     * Gets failCount
     *
     * @return int
     */
    public function getFailCount()
    {
        return $this->container['failCount'];
    }

    /**
     * Sets failCount
     *
     * @param int $failCount The number of times this job failed.
     *
     * @return $this
     */
    public function setFailCount($failCount)
    {
        $this->container['failCount'] = $failCount;

        return $this;
    }

    /**
     * Gets errors
     *
     * @return string[]
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors
     *
     * @param string[] $errors An array of individual problems encountered during the request.
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

        return $this;
    }

    /**
     * Gets createdBy
     *
     * @return int
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param int $createdBy ID of the user who created this effect.
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

        return $this;
    }

    /**
     * Gets communicated
     *
     * @return bool
     */
    public function getCommunicated()
    {
        return $this->container['communicated'];
    }

    /**
     * Sets communicated
     *
     * @param bool $communicated Whether or not the user that created this job was notified of its final state.
     *
     * @return $this
     */
    public function setCommunicated($communicated)
    {
        $this->container['communicated'] = $communicated;

        return $this;
    }

    /**
     * Gets chunkExecutionCount
     *
     * @return int
     */
    public function getChunkExecutionCount()
    {
        return $this->container['chunkExecutionCount'];
    }

    /**
     * Sets chunkExecutionCount
     *
     * @param int $chunkExecutionCount The number of times an attempt to create a chunk of coupons was made during the processing of the job.
     *
     * @return $this
     */
    public function setChunkExecutionCount($chunkExecutionCount)
    {
        $this->container['chunkExecutionCount'] = $chunkExecutionCount;

        return $this;
    }

    /**
     * Gets chunkSize
     *
     * @return int|null
     */
    public function getChunkSize()
    {
        return $this->container['chunkSize'];
    }

    /**
     * Sets chunkSize
     *
     * @param int|null $chunkSize The number of coupons that will be created in a single transactions. Coupons will be created in chunks until arriving at the requested amount.
     *
     * @return $this
     */
    public function setChunkSize($chunkSize)
    {
        $this->container['chunkSize'] = $chunkSize;

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


