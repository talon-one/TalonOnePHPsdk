<?php
/**
 * SetDiscountPerItemEffectProps
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
 * SetDiscountPerItemEffectProps Class Doc Comment
 *
 * @category Class
 * @description The properties specific to the &#x60;setDiscountPerItem&#x60; effect, triggered whenever a validated rule contained a \&quot;set per item discount\&quot; effect. This is a discount that will be applied either on a specific item, on a specific item + additional cost or on all additional costs per item. This depends on the chosen scope.
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SetDiscountPerItemEffectProps implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SetDiscountPerItemEffectProps';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'value' => 'float',
        'position' => 'float',
        'subPosition' => 'float',
        'desiredValue' => 'float',
        'scope' => 'string',
        'totalDiscount' => 'float',
        'desiredTotalDiscount' => 'float',
        'bundleIndex' => 'int',
        'bundleName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'value' => null,
        'position' => null,
        'subPosition' => null,
        'desiredValue' => null,
        'scope' => null,
        'totalDiscount' => null,
        'desiredTotalDiscount' => null,
        'bundleIndex' => null,
        'bundleName' => null
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
        'name' => 'name',
        'value' => 'value',
        'position' => 'position',
        'subPosition' => 'subPosition',
        'desiredValue' => 'desiredValue',
        'scope' => 'scope',
        'totalDiscount' => 'totalDiscount',
        'desiredTotalDiscount' => 'desiredTotalDiscount',
        'bundleIndex' => 'bundleIndex',
        'bundleName' => 'bundleName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'value' => 'setValue',
        'position' => 'setPosition',
        'subPosition' => 'setSubPosition',
        'desiredValue' => 'setDesiredValue',
        'scope' => 'setScope',
        'totalDiscount' => 'setTotalDiscount',
        'desiredTotalDiscount' => 'setDesiredTotalDiscount',
        'bundleIndex' => 'setBundleIndex',
        'bundleName' => 'setBundleName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'value' => 'getValue',
        'position' => 'getPosition',
        'subPosition' => 'getSubPosition',
        'desiredValue' => 'getDesiredValue',
        'scope' => 'getScope',
        'totalDiscount' => 'getTotalDiscount',
        'desiredTotalDiscount' => 'getDesiredTotalDiscount',
        'bundleIndex' => 'getBundleIndex',
        'bundleName' => 'getBundleName'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['subPosition'] = isset($data['subPosition']) ? $data['subPosition'] : null;
        $this->container['desiredValue'] = isset($data['desiredValue']) ? $data['desiredValue'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['totalDiscount'] = isset($data['totalDiscount']) ? $data['totalDiscount'] : null;
        $this->container['desiredTotalDiscount'] = isset($data['desiredTotalDiscount']) ? $data['desiredTotalDiscount'] : null;
        $this->container['bundleIndex'] = isset($data['bundleIndex']) ? $data['bundleIndex'] : null;
        $this->container['bundleName'] = isset($data['bundleName']) ? $data['bundleName'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the discount. Contains a hashtag character indicating the index of the position of the item the discount applies to. It is identical to the value of the `position` property.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets value
     *
     * @return float
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param float $value The total monetary value of the discount.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets position
     *
     * @return float
     */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
     * Sets position
     *
     * @param float $position The index of the item in the cart items list on which this discount should be applied.
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->container['position'] = $position;

        return $this;
    }

    /**
     * Gets subPosition
     *
     * @return float|null
     */
    public function getSubPosition()
    {
        return $this->container['subPosition'];
    }

    /**
     * Sets subPosition
     *
     * @param float|null $subPosition Only used when [cart item flattening](https://docs.talon.one/docs/product/campaigns/campaign-evaluation#flattening) is enabled. Indicates which item the discount applies to for cart items with `quantity` > 1.
     *
     * @return $this
     */
    public function setSubPosition($subPosition)
    {
        $this->container['subPosition'] = $subPosition;

        return $this;
    }

    /**
     * Gets desiredValue
     *
     * @return float|null
     */
    public function getDesiredValue()
    {
        return $this->container['desiredValue'];
    }

    /**
     * Sets desiredValue
     *
     * @param float|null $desiredValue The original value of the discount.
     *
     * @return $this
     */
    public function setDesiredValue($desiredValue)
    {
        $this->container['desiredValue'] = $desiredValue;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string|null
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string|null $scope The scope of the discount: - `additionalCosts`: The discount applies to all the additional costs of the item. - `itemTotal`: The discount applies to the price of the item + the additional costs of the item. - `price`: The discount applies to the price of the item.
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets totalDiscount
     *
     * @return float|null
     */
    public function getTotalDiscount()
    {
        return $this->container['totalDiscount'];
    }

    /**
     * Sets totalDiscount
     *
     * @param float|null $totalDiscount The total discount given if this effect is a result of a prorated discount.
     *
     * @return $this
     */
    public function setTotalDiscount($totalDiscount)
    {
        $this->container['totalDiscount'] = $totalDiscount;

        return $this;
    }

    /**
     * Gets desiredTotalDiscount
     *
     * @return float|null
     */
    public function getDesiredTotalDiscount()
    {
        return $this->container['desiredTotalDiscount'];
    }

    /**
     * Sets desiredTotalDiscount
     *
     * @param float|null $desiredTotalDiscount The original total discount to give if this effect is a result of a prorated discount.
     *
     * @return $this
     */
    public function setDesiredTotalDiscount($desiredTotalDiscount)
    {
        $this->container['desiredTotalDiscount'] = $desiredTotalDiscount;

        return $this;
    }

    /**
     * Gets bundleIndex
     *
     * @return int|null
     */
    public function getBundleIndex()
    {
        return $this->container['bundleIndex'];
    }

    /**
     * Sets bundleIndex
     *
     * @param int|null $bundleIndex The position of the bundle in a list of item bundles created from the same bundle definition.
     *
     * @return $this
     */
    public function setBundleIndex($bundleIndex)
    {
        $this->container['bundleIndex'] = $bundleIndex;

        return $this;
    }

    /**
     * Gets bundleName
     *
     * @return string|null
     */
    public function getBundleName()
    {
        return $this->container['bundleName'];
    }

    /**
     * Sets bundleName
     *
     * @param string|null $bundleName The name of the bundle definition.
     *
     * @return $this
     */
    public function setBundleName($bundleName)
    {
        $this->container['bundleName'] = $bundleName;

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


