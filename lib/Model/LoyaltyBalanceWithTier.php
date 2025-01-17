<?php
/**
 * LoyaltyBalanceWithTier
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
 * LoyaltyBalanceWithTier Class Doc Comment
 *
 * @category Class
 * @description Point balance of a ledger in the Loyalty Program.
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LoyaltyBalanceWithTier implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoyaltyBalanceWithTier';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'activePoints' => 'float',
        'pendingPoints' => 'float',
        'spentPoints' => 'float',
        'expiredPoints' => 'float',
        'currentTier' => '\TalonOne\Client\Model\Tier',
        'projectedTier' => '\TalonOne\Client\Model\ProjectedTier',
        'pointsToNextTier' => 'float',
        'nextTierName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'activePoints' => null,
        'pendingPoints' => null,
        'spentPoints' => null,
        'expiredPoints' => null,
        'currentTier' => null,
        'projectedTier' => null,
        'pointsToNextTier' => null,
        'nextTierName' => null
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
        'activePoints' => 'activePoints',
        'pendingPoints' => 'pendingPoints',
        'spentPoints' => 'spentPoints',
        'expiredPoints' => 'expiredPoints',
        'currentTier' => 'currentTier',
        'projectedTier' => 'projectedTier',
        'pointsToNextTier' => 'pointsToNextTier',
        'nextTierName' => 'nextTierName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activePoints' => 'setActivePoints',
        'pendingPoints' => 'setPendingPoints',
        'spentPoints' => 'setSpentPoints',
        'expiredPoints' => 'setExpiredPoints',
        'currentTier' => 'setCurrentTier',
        'projectedTier' => 'setProjectedTier',
        'pointsToNextTier' => 'setPointsToNextTier',
        'nextTierName' => 'setNextTierName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activePoints' => 'getActivePoints',
        'pendingPoints' => 'getPendingPoints',
        'spentPoints' => 'getSpentPoints',
        'expiredPoints' => 'getExpiredPoints',
        'currentTier' => 'getCurrentTier',
        'projectedTier' => 'getProjectedTier',
        'pointsToNextTier' => 'getPointsToNextTier',
        'nextTierName' => 'getNextTierName'
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
        $this->container['activePoints'] = isset($data['activePoints']) ? $data['activePoints'] : null;
        $this->container['pendingPoints'] = isset($data['pendingPoints']) ? $data['pendingPoints'] : null;
        $this->container['spentPoints'] = isset($data['spentPoints']) ? $data['spentPoints'] : null;
        $this->container['expiredPoints'] = isset($data['expiredPoints']) ? $data['expiredPoints'] : null;
        $this->container['currentTier'] = isset($data['currentTier']) ? $data['currentTier'] : null;
        $this->container['projectedTier'] = isset($data['projectedTier']) ? $data['projectedTier'] : null;
        $this->container['pointsToNextTier'] = isset($data['pointsToNextTier']) ? $data['pointsToNextTier'] : null;
        $this->container['nextTierName'] = isset($data['nextTierName']) ? $data['nextTierName'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets activePoints
     *
     * @return float|null
     */
    public function getActivePoints()
    {
        return $this->container['activePoints'];
    }

    /**
     * Sets activePoints
     *
     * @param float|null $activePoints Total amount of points awarded to this customer and available to spend.
     *
     * @return $this
     */
    public function setActivePoints($activePoints)
    {
        $this->container['activePoints'] = $activePoints;

        return $this;
    }

    /**
     * Gets pendingPoints
     *
     * @return float|null
     */
    public function getPendingPoints()
    {
        return $this->container['pendingPoints'];
    }

    /**
     * Sets pendingPoints
     *
     * @param float|null $pendingPoints Total amount of points awarded to this customer but not available until their start date.
     *
     * @return $this
     */
    public function setPendingPoints($pendingPoints)
    {
        $this->container['pendingPoints'] = $pendingPoints;

        return $this;
    }

    /**
     * Gets spentPoints
     *
     * @return float|null
     */
    public function getSpentPoints()
    {
        return $this->container['spentPoints'];
    }

    /**
     * Sets spentPoints
     *
     * @param float|null $spentPoints Total amount of points already spent by this customer.
     *
     * @return $this
     */
    public function setSpentPoints($spentPoints)
    {
        $this->container['spentPoints'] = $spentPoints;

        return $this;
    }

    /**
     * Gets expiredPoints
     *
     * @return float|null
     */
    public function getExpiredPoints()
    {
        return $this->container['expiredPoints'];
    }

    /**
     * Sets expiredPoints
     *
     * @param float|null $expiredPoints Total amount of points awarded but never redeemed. They cannot be used anymore.
     *
     * @return $this
     */
    public function setExpiredPoints($expiredPoints)
    {
        $this->container['expiredPoints'] = $expiredPoints;

        return $this;
    }

    /**
     * Gets currentTier
     *
     * @return \TalonOne\Client\Model\Tier|null
     */
    public function getCurrentTier()
    {
        return $this->container['currentTier'];
    }

    /**
     * Sets currentTier
     *
     * @param \TalonOne\Client\Model\Tier|null $currentTier currentTier
     *
     * @return $this
     */
    public function setCurrentTier($currentTier)
    {
        $this->container['currentTier'] = $currentTier;

        return $this;
    }

    /**
     * Gets projectedTier
     *
     * @return \TalonOne\Client\Model\ProjectedTier|null
     */
    public function getProjectedTier()
    {
        return $this->container['projectedTier'];
    }

    /**
     * Sets projectedTier
     *
     * @param \TalonOne\Client\Model\ProjectedTier|null $projectedTier projectedTier
     *
     * @return $this
     */
    public function setProjectedTier($projectedTier)
    {
        $this->container['projectedTier'] = $projectedTier;

        return $this;
    }

    /**
     * Gets pointsToNextTier
     *
     * @return float|null
     */
    public function getPointsToNextTier()
    {
        return $this->container['pointsToNextTier'];
    }

    /**
     * Sets pointsToNextTier
     *
     * @param float|null $pointsToNextTier The number of points required to move up a tier.
     *
     * @return $this
     */
    public function setPointsToNextTier($pointsToNextTier)
    {
        $this->container['pointsToNextTier'] = $pointsToNextTier;

        return $this;
    }

    /**
     * Gets nextTierName
     *
     * @return string|null
     */
    public function getNextTierName()
    {
        return $this->container['nextTierName'];
    }

    /**
     * Sets nextTierName
     *
     * @param string|null $nextTierName The name of the tier consecutive to the current tier.
     *
     * @return $this
     */
    public function setNextTierName($nextTierName)
    {
        $this->container['nextTierName'] = $nextTierName;

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


