<?php
/**
 * ProductUnitAnalytics
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
 * ProductUnitAnalytics Class Doc Comment
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ProductUnitAnalytics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ProductUnitAnalytics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'startTime' => '\DateTime',
        'endTime' => '\DateTime',
        'purchasedUnits' => '\TalonOne\Client\Model\AnalyticsDataPointWithTrend',
        'productId' => 'int',
        'productName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'startTime' => 'date-time',
        'endTime' => 'date-time',
        'purchasedUnits' => null,
        'productId' => null,
        'productName' => null
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
        'startTime' => 'startTime',
        'endTime' => 'endTime',
        'purchasedUnits' => 'purchasedUnits',
        'productId' => 'productId',
        'productName' => 'productName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'startTime' => 'setStartTime',
        'endTime' => 'setEndTime',
        'purchasedUnits' => 'setPurchasedUnits',
        'productId' => 'setProductId',
        'productName' => 'setProductName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'startTime' => 'getStartTime',
        'endTime' => 'getEndTime',
        'purchasedUnits' => 'getPurchasedUnits',
        'productId' => 'getProductId',
        'productName' => 'getProductName'
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['purchasedUnits'] = isset($data['purchasedUnits']) ? $data['purchasedUnits'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['purchasedUnits'] === null) {
            $invalidProperties[] = "'purchasedUnits' can't be null";
        }
        if ($this->container['productId'] === null) {
            $invalidProperties[] = "'productId' can't be null";
        }
        if ($this->container['productName'] === null) {
            $invalidProperties[] = "'productName' can't be null";
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
     * Gets startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param \DateTime $startTime The start of the aggregation time frame in UTC.
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param \DateTime $endTime The end of the aggregation time frame in UTC.
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets purchasedUnits
     *
     * @return \TalonOne\Client\Model\AnalyticsDataPointWithTrend
     */
    public function getPurchasedUnits()
    {
        return $this->container['purchasedUnits'];
    }

    /**
     * Sets purchasedUnits
     *
     * @param \TalonOne\Client\Model\AnalyticsDataPointWithTrend $purchasedUnits purchasedUnits
     *
     * @return $this
     */
    public function setPurchasedUnits($purchasedUnits)
    {
        $this->container['purchasedUnits'] = $purchasedUnits;

        return $this;
    }

    /**
     * Gets productId
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     *
     * @param int $productId The ID of the analytics-level product.
     *
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;

        return $this;
    }

    /**
     * Gets productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     *
     * @param string $productName The name of the analytics-level product.
     *
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;

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


