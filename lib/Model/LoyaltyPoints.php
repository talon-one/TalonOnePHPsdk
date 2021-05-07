<?php
/**
 * LoyaltyPoints
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
 * LoyaltyPoints Class Doc Comment
 *
 * @category Class
 * @description Points to add or deduct
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LoyaltyPoints implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoyaltyPoints';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'points' => 'float',
        'name' => 'string',
        'validityDuration' => 'string',
        'pendingDuration' => 'string',
        'subLedgerID' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'points' => null,
        'name' => null,
        'validityDuration' => null,
        'pendingDuration' => null,
        'subLedgerID' => null
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
        'points' => 'points',
        'name' => 'name',
        'validityDuration' => 'validityDuration',
        'pendingDuration' => 'pendingDuration',
        'subLedgerID' => 'subLedgerID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'points' => 'setPoints',
        'name' => 'setName',
        'validityDuration' => 'setValidityDuration',
        'pendingDuration' => 'setPendingDuration',
        'subLedgerID' => 'setSubLedgerID'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'points' => 'getPoints',
        'name' => 'getName',
        'validityDuration' => 'getValidityDuration',
        'pendingDuration' => 'getPendingDuration',
        'subLedgerID' => 'getSubLedgerID'
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
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['validityDuration'] = isset($data['validityDuration']) ? $data['validityDuration'] : null;
        $this->container['pendingDuration'] = isset($data['pendingDuration']) ? $data['pendingDuration'] : null;
        $this->container['subLedgerID'] = isset($data['subLedgerID']) ? $data['subLedgerID'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['points'] === null) {
            $invalidProperties[] = "'points' can't be null";
        }
        if (($this->container['points'] >= 100000000)) {
            $invalidProperties[] = "invalid value for 'points', must be smaller than 100000000.";
        }

        if (($this->container['points'] <= 0)) {
            $invalidProperties[] = "invalid value for 'points', must be bigger than 0.";
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
     * Gets points
     *
     * @return float
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points
     *
     * @param float $points Amount of loyalty points
     *
     * @return $this
     */
    public function setPoints($points)
    {

        if (($points >= 100000000)) {
            throw new \InvalidArgumentException('invalid value for $points when calling LoyaltyPoints., must be smaller than 100000000.');
        }
        if (($points <= 0)) {
            throw new \InvalidArgumentException('invalid value for $points when calling LoyaltyPoints., must be bigger than 0.');
        }

        $this->container['points'] = $points;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Allows to specify a name for the addition or deduction
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets validityDuration
     *
     * @return string|null
     */
    public function getValidityDuration()
    {
        return $this->container['validityDuration'];
    }

    /**
     * Sets validityDuration
     *
     * @param string|null $validityDuration Indicates the duration after which the added loyalty points should expire. The format is a number followed by one letter indicating the time unit, like '1h' or '40m' (defined by Go time package).
     *
     * @return $this
     */
    public function setValidityDuration($validityDuration)
    {
        $this->container['validityDuration'] = $validityDuration;

        return $this;
    }

    /**
     * Gets pendingDuration
     *
     * @return string|null
     */
    public function getPendingDuration()
    {
        return $this->container['pendingDuration'];
    }

    /**
     * Sets pendingDuration
     *
     * @param string|null $pendingDuration Indicates the amount of time before the points are considered valid. The format is a number followed by one letter indicating the time unit, like '1h' or '40m' (defined by Go time package).
     *
     * @return $this
     */
    public function setPendingDuration($pendingDuration)
    {
        $this->container['pendingDuration'] = $pendingDuration;

        return $this;
    }

    /**
     * Gets subLedgerID
     *
     * @return string|null
     */
    public function getSubLedgerID()
    {
        return $this->container['subLedgerID'];
    }

    /**
     * Sets subLedgerID
     *
     * @param string|null $subLedgerID This specifies if we are adding loyalty points to the main ledger or a subledger
     *
     * @return $this
     */
    public function setSubLedgerID($subLedgerID)
    {
        $this->container['subLedgerID'] = $subLedgerID;

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


