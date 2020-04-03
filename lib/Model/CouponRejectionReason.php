<?php
/**
 * CouponRejectionReason
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
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

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * CouponRejectionReason Class Doc Comment
 *
 * @category Class
 * @description Holds a reference to the campaign, the coupon and the reason for which that coupon was rejected. Should only be present when there is a &#39;rejectCoupon&#39; effect.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CouponRejectionReason implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CouponRejectionReason';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'campaign_id' => 'int',
        'coupon_id' => 'int',
        'reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'campaign_id' => null,
        'coupon_id' => null,
        'reason' => null
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
        'campaign_id' => 'campaignId',
        'coupon_id' => 'couponId',
        'reason' => 'reason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaign_id' => 'setCampaignId',
        'coupon_id' => 'setCouponId',
        'reason' => 'setReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaign_id' => 'getCampaignId',
        'coupon_id' => 'getCouponId',
        'reason' => 'getReason'
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

    const REASON_COUPON_NOT_FOUND = 'CouponNotFound';
    const REASON_COUPON_PART_OF_NOT_RUNNING_CAMPAIGN = 'CouponPartOfNotRunningCampaign';
    const REASON_COUPON_VALID_CONDITION_MISSING = 'CouponValidConditionMissing';
    const REASON_COUPON_LIMIT_REACHED = 'CouponLimitReached';
    const REASON_CAMPAIGN_LIMIT_REACHED = 'CampaignLimitReached';
    const REASON_PROFILE_LIMIT_REACHED = 'ProfileLimitReached';
    const REASON_COUPON_RECIPIENT_DOES_NOT_MATCH = 'CouponRecipientDoesNotMatch';
    const REASON_COUPON_EXPIRED = 'CouponExpired';
    const REASON_COUPON_START_DATE_IN_FUTURE = 'CouponStartDateInFuture';
    const REASON_COUPON_REJECTED_BY_CONDITION = 'CouponRejectedByCondition';
    const REASON_EFFECT_COULD_NOT_BE_APPLIED = 'EffectCouldNotBeApplied';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReasonAllowableValues()
    {
        return [
            self::REASON_COUPON_NOT_FOUND,
            self::REASON_COUPON_PART_OF_NOT_RUNNING_CAMPAIGN,
            self::REASON_COUPON_VALID_CONDITION_MISSING,
            self::REASON_COUPON_LIMIT_REACHED,
            self::REASON_CAMPAIGN_LIMIT_REACHED,
            self::REASON_PROFILE_LIMIT_REACHED,
            self::REASON_COUPON_RECIPIENT_DOES_NOT_MATCH,
            self::REASON_COUPON_EXPIRED,
            self::REASON_COUPON_START_DATE_IN_FUTURE,
            self::REASON_COUPON_REJECTED_BY_CONDITION,
            self::REASON_EFFECT_COULD_NOT_BE_APPLIED,
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
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['coupon_id'] = isset($data['coupon_id']) ? $data['coupon_id'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['campaign_id'] === null) {
            $invalidProperties[] = "'campaign_id' can't be null";
        }
        if ($this->container['coupon_id'] === null) {
            $invalidProperties[] = "'coupon_id' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
        $allowedValues = $this->getReasonAllowableValues();
        if (!is_null($this->container['reason']) && !in_array($this->container['reason'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'reason', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets campaign_id
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param int $campaign_id campaign_id
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets coupon_id
     *
     * @return int
     */
    public function getCouponId()
    {
        return $this->container['coupon_id'];
    }

    /**
     * Sets coupon_id
     *
     * @param int $coupon_id coupon_id
     *
     * @return $this
     */
    public function setCouponId($coupon_id)
    {
        $this->container['coupon_id'] = $coupon_id;

        return $this;
    }

    /**
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $allowedValues = $this->getReasonAllowableValues();
        if (!in_array($reason, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'reason', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reason'] = $reason;

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


