<?php
/**
 * LoyaltyStatistics
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
 * LoyaltyStatistics Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LoyaltyStatistics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoyaltyStatistics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'totalActivePoints' => 'float',
        'totalPendingPoints' => 'float',
        'totalSpentPoints' => 'float',
        'totalExpiredPoints' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'totalActivePoints' => null,
        'totalPendingPoints' => null,
        'totalSpentPoints' => null,
        'totalExpiredPoints' => null
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
        'totalActivePoints' => 'totalActivePoints',
        'totalPendingPoints' => 'totalPendingPoints',
        'totalSpentPoints' => 'totalSpentPoints',
        'totalExpiredPoints' => 'totalExpiredPoints'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'totalActivePoints' => 'setTotalActivePoints',
        'totalPendingPoints' => 'setTotalPendingPoints',
        'totalSpentPoints' => 'setTotalSpentPoints',
        'totalExpiredPoints' => 'setTotalExpiredPoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'totalActivePoints' => 'getTotalActivePoints',
        'totalPendingPoints' => 'getTotalPendingPoints',
        'totalSpentPoints' => 'getTotalSpentPoints',
        'totalExpiredPoints' => 'getTotalExpiredPoints'
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
        $this->container['totalActivePoints'] = isset($data['totalActivePoints']) ? $data['totalActivePoints'] : null;
        $this->container['totalPendingPoints'] = isset($data['totalPendingPoints']) ? $data['totalPendingPoints'] : null;
        $this->container['totalSpentPoints'] = isset($data['totalSpentPoints']) ? $data['totalSpentPoints'] : null;
        $this->container['totalExpiredPoints'] = isset($data['totalExpiredPoints']) ? $data['totalExpiredPoints'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['totalActivePoints'] === null) {
            $invalidProperties[] = "'totalActivePoints' can't be null";
        }
        if ($this->container['totalPendingPoints'] === null) {
            $invalidProperties[] = "'totalPendingPoints' can't be null";
        }
        if ($this->container['totalSpentPoints'] === null) {
            $invalidProperties[] = "'totalSpentPoints' can't be null";
        }
        if ($this->container['totalExpiredPoints'] === null) {
            $invalidProperties[] = "'totalExpiredPoints' can't be null";
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
     * Gets totalActivePoints
     *
     * @return float
     */
    public function getTotalActivePoints()
    {
        return $this->container['totalActivePoints'];
    }

    /**
     * Sets totalActivePoints
     *
     * @param float $totalActivePoints Total of active points for this loyalty program
     *
     * @return $this
     */
    public function setTotalActivePoints($totalActivePoints)
    {
        $this->container['totalActivePoints'] = $totalActivePoints;

        return $this;
    }

    /**
     * Gets totalPendingPoints
     *
     * @return float
     */
    public function getTotalPendingPoints()
    {
        return $this->container['totalPendingPoints'];
    }

    /**
     * Sets totalPendingPoints
     *
     * @param float $totalPendingPoints Total of pending points for this loyalty program
     *
     * @return $this
     */
    public function setTotalPendingPoints($totalPendingPoints)
    {
        $this->container['totalPendingPoints'] = $totalPendingPoints;

        return $this;
    }

    /**
     * Gets totalSpentPoints
     *
     * @return float
     */
    public function getTotalSpentPoints()
    {
        return $this->container['totalSpentPoints'];
    }

    /**
     * Sets totalSpentPoints
     *
     * @param float $totalSpentPoints Total of spent points for this loyalty program
     *
     * @return $this
     */
    public function setTotalSpentPoints($totalSpentPoints)
    {
        $this->container['totalSpentPoints'] = $totalSpentPoints;

        return $this;
    }

    /**
     * Gets totalExpiredPoints
     *
     * @return float
     */
    public function getTotalExpiredPoints()
    {
        return $this->container['totalExpiredPoints'];
    }

    /**
     * Sets totalExpiredPoints
     *
     * @param float $totalExpiredPoints Total of expired points for this loyalty program
     *
     * @return $this
     */
    public function setTotalExpiredPoints($totalExpiredPoints)
    {
        $this->container['totalExpiredPoints'] = $totalExpiredPoints;

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


