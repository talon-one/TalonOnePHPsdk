<?php
/**
 * RollbackDiscountEffectProps
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
 * RollbackDiscountEffectProps Class Doc Comment
 *
 * @category Class
 * @description The properties specific to the \&quot;rollbackDiscount\&quot; effect. This gets triggered whenever previously closed session is now cancelled or partially returned and a setDiscount effect was cancelled on our internal discount limit counters.
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class RollbackDiscountEffectProps implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'RollbackDiscountEffectProps';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'value' => 'float',
        'cartItemPosition' => 'float',
        'cartItemSubPosition' => 'float',
        'additionalCostId' => 'int',
        'additionalCost' => 'string',
        'scope' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'value' => null,
        'cartItemPosition' => null,
        'cartItemSubPosition' => null,
        'additionalCostId' => null,
        'additionalCost' => null,
        'scope' => null
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
        'cartItemPosition' => 'cartItemPosition',
        'cartItemSubPosition' => 'cartItemSubPosition',
        'additionalCostId' => 'additionalCostId',
        'additionalCost' => 'additionalCost',
        'scope' => 'scope'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'value' => 'setValue',
        'cartItemPosition' => 'setCartItemPosition',
        'cartItemSubPosition' => 'setCartItemSubPosition',
        'additionalCostId' => 'setAdditionalCostId',
        'additionalCost' => 'setAdditionalCost',
        'scope' => 'setScope'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'value' => 'getValue',
        'cartItemPosition' => 'getCartItemPosition',
        'cartItemSubPosition' => 'getCartItemSubPosition',
        'additionalCostId' => 'getAdditionalCostId',
        'additionalCost' => 'getAdditionalCost',
        'scope' => 'getScope'
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
        $this->container['cartItemPosition'] = isset($data['cartItemPosition']) ? $data['cartItemPosition'] : null;
        $this->container['cartItemSubPosition'] = isset($data['cartItemSubPosition']) ? $data['cartItemSubPosition'] : null;
        $this->container['additionalCostId'] = isset($data['additionalCostId']) ? $data['additionalCostId'] : null;
        $this->container['additionalCost'] = isset($data['additionalCost']) ? $data['additionalCost'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
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
     * @param string $name The name of the \"setDiscount\" effect that was rolled back.
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
     * @param float $value The value of the discount that was rolled back.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets cartItemPosition
     *
     * @return float|null
     */
    public function getCartItemPosition()
    {
        return $this->container['cartItemPosition'];
    }

    /**
     * Sets cartItemPosition
     *
     * @param float|null $cartItemPosition The index of the item in the cart items for which the discount was rolled back.
     *
     * @return $this
     */
    public function setCartItemPosition($cartItemPosition)
    {
        $this->container['cartItemPosition'] = $cartItemPosition;

        return $this;
    }

    /**
     * Gets cartItemSubPosition
     *
     * @return float|null
     */
    public function getCartItemSubPosition()
    {
        return $this->container['cartItemSubPosition'];
    }

    /**
     * Sets cartItemSubPosition
     *
     * @param float|null $cartItemSubPosition For cart items with `quantity` > 1, the subposition returns the index of the item unit in its line item.
     *
     * @return $this
     */
    public function setCartItemSubPosition($cartItemSubPosition)
    {
        $this->container['cartItemSubPosition'] = $cartItemSubPosition;

        return $this;
    }

    /**
     * Gets additionalCostId
     *
     * @return int|null
     */
    public function getAdditionalCostId()
    {
        return $this->container['additionalCostId'];
    }

    /**
     * Sets additionalCostId
     *
     * @param int|null $additionalCostId The ID of the additional cost that was rolled back.
     *
     * @return $this
     */
    public function setAdditionalCostId($additionalCostId)
    {
        $this->container['additionalCostId'] = $additionalCostId;

        return $this;
    }

    /**
     * Gets additionalCost
     *
     * @return string|null
     */
    public function getAdditionalCost()
    {
        return $this->container['additionalCost'];
    }

    /**
     * Sets additionalCost
     *
     * @param string|null $additionalCost The name of the additional cost that was rolled back.
     *
     * @return $this
     */
    public function setAdditionalCost($additionalCost)
    {
        $this->container['additionalCost'] = $additionalCost;

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
     * @param string|null $scope The scope of the rolled back discount - For a discount per session, it can be one of `cartItems`, `additionalCosts` or `sessionTotal` - For a discount per item, it can be one of `price`, `additionalCosts` or `itemTotal`
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

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


