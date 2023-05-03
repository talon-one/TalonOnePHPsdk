<?php
/**
 * SetDiscountPerAdditionalCostPerItemEffectProps
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
 * SetDiscountPerAdditionalCostPerItemEffectProps Class Doc Comment
 *
 * @category Class
 * @description The properties specific to the \&quot;setDiscountPerAdditionalCostPerItem\&quot; effect. This gets triggered whenever a validated rule contained a \&quot;set discount per additional cost per item\&quot; effect. This is a discount that should be applied on a specific additional cost in a specific item.
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SetDiscountPerAdditionalCostPerItemEffectProps implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SetDiscountPerAdditionalCostPerItemEffectProps';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'additionalCostId' => 'int',
        'value' => 'float',
        'position' => 'float',
        'subPosition' => 'float',
        'additionalCost' => 'string',
        'desiredValue' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'additionalCostId' => null,
        'value' => null,
        'position' => null,
        'subPosition' => null,
        'additionalCost' => null,
        'desiredValue' => null
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
        'additionalCostId' => 'additionalCostId',
        'value' => 'value',
        'position' => 'position',
        'subPosition' => 'subPosition',
        'additionalCost' => 'additionalCost',
        'desiredValue' => 'desiredValue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'additionalCostId' => 'setAdditionalCostId',
        'value' => 'setValue',
        'position' => 'setPosition',
        'subPosition' => 'setSubPosition',
        'additionalCost' => 'setAdditionalCost',
        'desiredValue' => 'setDesiredValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'additionalCostId' => 'getAdditionalCostId',
        'value' => 'getValue',
        'position' => 'getPosition',
        'subPosition' => 'getSubPosition',
        'additionalCost' => 'getAdditionalCost',
        'desiredValue' => 'getDesiredValue'
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
        $this->container['additionalCostId'] = isset($data['additionalCostId']) ? $data['additionalCostId'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['subPosition'] = isset($data['subPosition']) ? $data['subPosition'] : null;
        $this->container['additionalCost'] = isset($data['additionalCost']) ? $data['additionalCost'] : null;
        $this->container['desiredValue'] = isset($data['desiredValue']) ? $data['desiredValue'] : null;
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
        if ($this->container['additionalCostId'] === null) {
            $invalidProperties[] = "'additionalCostId' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
        if ($this->container['additionalCost'] === null) {
            $invalidProperties[] = "'additionalCost' can't be null";
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
     * @param string $name The name / description of this discount
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets additionalCostId
     *
     * @return int
     */
    public function getAdditionalCostId()
    {
        return $this->container['additionalCostId'];
    }

    /**
     * Sets additionalCostId
     *
     * @param int $additionalCostId The ID of the additional cost.
     *
     * @return $this
     */
    public function setAdditionalCostId($additionalCostId)
    {
        $this->container['additionalCostId'] = $additionalCostId;

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
     * @param float $position The index of the item in the cart item list containing the additional cost to be discounted.
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
     * Gets additionalCost
     *
     * @return string
     */
    public function getAdditionalCost()
    {
        return $this->container['additionalCost'];
    }

    /**
     * Sets additionalCost
     *
     * @param string $additionalCost The name of the additional cost.
     *
     * @return $this
     */
    public function setAdditionalCost($additionalCost)
    {
        $this->container['additionalCost'] = $additionalCost;

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
     * @param float|null $desiredValue Only with [partial discounts enabled](https://docs.talon.one/docs/product/campaigns/campaign-evaluation/#partial-discounts). Represents the monetary value of the discount to be applied to additional discount without considering budget limitations.
     *
     * @return $this
     */
    public function setDesiredValue($desiredValue)
    {
        $this->container['desiredValue'] = $desiredValue;

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


