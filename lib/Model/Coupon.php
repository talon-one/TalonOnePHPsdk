<?php
/**
 * Coupon
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Talon.One API
 *
 * The Talon.One API is used to manage applications and campaigns, as well as to integrate with your application. The operations in the _Integration API_ section are used to integrate with our platform, while the other operations are used to manage applications and campaigns.  ### Where is the API?  The API is available at the same hostname as these docs. For example, if you are reading this page at `https://mycompany.talon.one/docs/api/`, the URL for the [updateCustomerProfile][] operation is `https://mycompany.talon.one/v1/customer_profiles/id`  [updateCustomerProfile]: #operation--v1-customer_profiles--integrationId--put
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * Coupon Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Coupon implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Coupon';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'created' => '\DateTime',
        'campaign_id' => 'int',
        'value' => 'string',
        'usage_limit' => 'int',
        'start_date' => '\DateTime',
        'expiry_date' => '\DateTime',
        'usage_counter' => 'int',
        'attributes' => 'object',
        'referral_id' => 'int',
        'recipient_integration_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'created' => 'date-time',
        'campaign_id' => null,
        'value' => null,
        'usage_limit' => null,
        'start_date' => 'date-time',
        'expiry_date' => 'date-time',
        'usage_counter' => null,
        'attributes' => null,
        'referral_id' => null,
        'recipient_integration_id' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
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
        'campaign_id' => 'campaignId',
        'value' => 'value',
        'usage_limit' => 'usageLimit',
        'start_date' => 'startDate',
        'expiry_date' => 'expiryDate',
        'usage_counter' => 'usageCounter',
        'attributes' => 'attributes',
        'referral_id' => 'referralId',
        'recipient_integration_id' => 'recipientIntegrationId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created' => 'setCreated',
        'campaign_id' => 'setCampaignId',
        'value' => 'setValue',
        'usage_limit' => 'setUsageLimit',
        'start_date' => 'setStartDate',
        'expiry_date' => 'setExpiryDate',
        'usage_counter' => 'setUsageCounter',
        'attributes' => 'setAttributes',
        'referral_id' => 'setReferralId',
        'recipient_integration_id' => 'setRecipientIntegrationId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created' => 'getCreated',
        'campaign_id' => 'getCampaignId',
        'value' => 'getValue',
        'usage_limit' => 'getUsageLimit',
        'start_date' => 'getStartDate',
        'expiry_date' => 'getExpiryDate',
        'usage_counter' => 'getUsageCounter',
        'attributes' => 'getAttributes',
        'referral_id' => 'getReferralId',
        'recipient_integration_id' => 'getRecipientIntegrationId'
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
        return self::$swaggerModelName;
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
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['usage_limit'] = isset($data['usage_limit']) ? $data['usage_limit'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
        $this->container['usage_counter'] = isset($data['usage_counter']) ? $data['usage_counter'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['referral_id'] = isset($data['referral_id']) ? $data['referral_id'] : null;
        $this->container['recipient_integration_id'] = isset($data['recipient_integration_id']) ? $data['recipient_integration_id'] : null;
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
        if ($this->container['campaign_id'] === null) {
            $invalidProperties[] = "'campaign_id' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ((strlen($this->container['value']) < 4)) {
            $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 4.";
        }

        if ($this->container['usage_limit'] === null) {
            $invalidProperties[] = "'usage_limit' can't be null";
        }
        if (($this->container['usage_limit'] < 0)) {
            $invalidProperties[] = "invalid value for 'usage_limit', must be bigger than or equal to 0.";
        }

        if ($this->container['usage_counter'] === null) {
            $invalidProperties[] = "'usage_counter' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        if ($this->container['campaign_id'] === null) {
            return false;
        }
        if ($this->container['value'] === null) {
            return false;
        }
        if (strlen($this->container['value']) < 4) {
            return false;
        }
        if ($this->container['usage_limit'] === null) {
            return false;
        }
        if ($this->container['usage_limit'] < 0) {
            return false;
        }
        if ($this->container['usage_counter'] === null) {
            return false;
        }
        return true;
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
     * @param int $id Unique ID for this entity.
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
     * @param int $campaign_id The ID of the campaign that owns this entity.
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

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
     * @param string $value The actual coupon code.
     *
     * @return $this
     */
    public function setValue($value)
    {

        if ((strlen($value) < 4)) {
            throw new \InvalidArgumentException('invalid length for $value when calling Coupon., must be bigger than or equal to 4.');
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets usage_limit
     *
     * @return int
     */
    public function getUsageLimit()
    {
        return $this->container['usage_limit'];
    }

    /**
     * Sets usage_limit
     *
     * @param int $usage_limit The number of times a coupon code can be redeemed. This can be set to 0 for no limit, but any campaign usage limits will still apply.
     *
     * @return $this
     */
    public function setUsageLimit($usage_limit)
    {

        if (($usage_limit < 0)) {
            throw new \InvalidArgumentException('invalid value for $usage_limit when calling Coupon., must be bigger than or equal to 0.');
        }

        $this->container['usage_limit'] = $usage_limit;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date Timestamp at which point the coupon becomes valid.
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param \DateTime $expiry_date Expiry date of the coupon. Coupon never expires if this is omitted, zero, or negative.
     *
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets usage_counter
     *
     * @return int
     */
    public function getUsageCounter()
    {
        return $this->container['usage_counter'];
    }

    /**
     * Sets usage_counter
     *
     * @param int $usage_counter The number of times this coupon has been successfully used.
     *
     * @return $this
     */
    public function setUsageCounter($usage_counter)
    {
        $this->container['usage_counter'] = $usage_counter;

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
     * @param object $attributes Arbitrary properties associated with this item
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets referral_id
     *
     * @return int
     */
    public function getReferralId()
    {
        return $this->container['referral_id'];
    }

    /**
     * Sets referral_id
     *
     * @param int $referral_id The integration ID of the referring customer (if any) for whom this coupon was created as an effect.
     *
     * @return $this
     */
    public function setReferralId($referral_id)
    {
        $this->container['referral_id'] = $referral_id;

        return $this;
    }

    /**
     * Gets recipient_integration_id
     *
     * @return string
     */
    public function getRecipientIntegrationId()
    {
        return $this->container['recipient_integration_id'];
    }

    /**
     * Sets recipient_integration_id
     *
     * @param string $recipient_integration_id The integration ID of a referred customer profile.
     *
     * @return $this
     */
    public function setRecipientIntegrationId($recipient_integration_id)
    {
        $this->container['recipient_integration_id'] = $recipient_integration_id;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


