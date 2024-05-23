<?php
/**
 * NewNotificationTest
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
 * NewNotificationTest Class Doc Comment
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NewNotificationTest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewNotificationTest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'queryParams' => 'map[string,string]',
        'headers' => 'map[string,string]',
        'verb' => 'string',
        'url' => 'string',
        'payload' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'type' => null,
        'queryParams' => null,
        'headers' => null,
        'verb' => null,
        'url' => null,
        'payload' => null
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
        'type' => 'type',
        'queryParams' => 'queryParams',
        'headers' => 'headers',
        'verb' => 'verb',
        'url' => 'url',
        'payload' => 'payload'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'queryParams' => 'setQueryParams',
        'headers' => 'setHeaders',
        'verb' => 'setVerb',
        'url' => 'setUrl',
        'payload' => 'setPayload'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'queryParams' => 'getQueryParams',
        'headers' => 'getHeaders',
        'verb' => 'getVerb',
        'url' => 'getUrl',
        'payload' => 'getPayload'
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

    const TYPE_CAMPAIGN = 'campaign';
    const TYPE_LOYALTY_ADDED_DEDUCTED_POINTS = 'loyalty_added_deducted_points';
    const TYPE_COUPON = 'coupon';
    const TYPE_EXPIRING_COUPONS = 'expiring_coupons';
    const TYPE_EXPIRING_POINTS = 'expiring_points';
    const TYPE_PENDING_TO_ACTIVE_POINTS = 'pending_to_active_points';
    const TYPE_STRIKETHROUGH_PRICING = 'strikethrough_pricing';
    const TYPE_TIER_DOWNGRADE = 'tier_downgrade';
    const TYPE_TIER_UPGRADE = 'tier_upgrade';
    const TYPE_TIER_WILL_DOWNGRADE = 'tier_will_downgrade';
    const TYPE_CARD_EXPIRING_POINTS = 'card_expiring_points';
    const VERB_POST = 'POST';
    const VERB_PUT = 'PUT';
    const VERB_GET = 'GET';
    const VERB_DELETE = 'DELETE';
    const VERB_PATCH = 'PATCH';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CAMPAIGN,
            self::TYPE_LOYALTY_ADDED_DEDUCTED_POINTS,
            self::TYPE_COUPON,
            self::TYPE_EXPIRING_COUPONS,
            self::TYPE_EXPIRING_POINTS,
            self::TYPE_PENDING_TO_ACTIVE_POINTS,
            self::TYPE_STRIKETHROUGH_PRICING,
            self::TYPE_TIER_DOWNGRADE,
            self::TYPE_TIER_UPGRADE,
            self::TYPE_TIER_WILL_DOWNGRADE,
            self::TYPE_CARD_EXPIRING_POINTS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVerbAllowableValues()
    {
        return [
            self::VERB_POST,
            self::VERB_PUT,
            self::VERB_GET,
            self::VERB_DELETE,
            self::VERB_PATCH,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['queryParams'] = isset($data['queryParams']) ? $data['queryParams'] : null;
        $this->container['headers'] = isset($data['headers']) ? $data['headers'] : null;
        $this->container['verb'] = isset($data['verb']) ? $data['verb'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['payload'] = isset($data['payload']) ? $data['payload'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['verb'] === null) {
            $invalidProperties[] = "'verb' can't be null";
        }
        $allowedValues = $this->getVerbAllowableValues();
        if (!is_null($this->container['verb']) && !in_array($this->container['verb'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'verb', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['payload'] === null) {
            $invalidProperties[] = "'payload' can't be null";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The notification type.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets queryParams
     *
     * @return map[string,string]|null
     */
    public function getQueryParams()
    {
        return $this->container['queryParams'];
    }

    /**
     * Sets queryParams
     *
     * @param map[string,string]|null $queryParams Array of query parameters.
     *
     * @return $this
     */
    public function setQueryParams($queryParams)
    {
        $this->container['queryParams'] = $queryParams;

        return $this;
    }

    /**
     * Gets headers
     *
     * @return map[string,string]|null
     */
    public function getHeaders()
    {
        return $this->container['headers'];
    }

    /**
     * Sets headers
     *
     * @param map[string,string]|null $headers List of API HTTP headers for the given webhook-based notification.
     *
     * @return $this
     */
    public function setHeaders($headers)
    {
        $this->container['headers'] = $headers;

        return $this;
    }

    /**
     * Gets verb
     *
     * @return string
     */
    public function getVerb()
    {
        return $this->container['verb'];
    }

    /**
     * Sets verb
     *
     * @param string $verb API method for this notification.
     *
     * @return $this
     */
    public function setVerb($verb)
    {
        $allowedValues = $this->getVerbAllowableValues();
        if (!in_array($verb, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'verb', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['verb'] = $verb;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url API URL for the given notification.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets payload
     *
     * @return string
     */
    public function getPayload()
    {
        return $this->container['payload'];
    }

    /**
     * Sets payload
     *
     * @param string $payload API payload of this notification.
     *
     * @return $this
     */
    public function setPayload($payload)
    {
        $this->container['payload'] = $payload;

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


