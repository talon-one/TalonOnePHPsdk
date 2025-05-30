<?php
/**
 * AddLoyaltyPointsEffectProps
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
 * AddLoyaltyPointsEffectProps Class Doc Comment
 *
 * @category Class
 * @description The properties specific to the \&quot;addLoyaltyPoints\&quot; effect. This gets triggered whenever a validated rule contained an \&quot;add loyalty\&quot; effect. These points are automatically stored and managed inside Talon.One.
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AddLoyaltyPointsEffectProps implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AddLoyaltyPointsEffectProps';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'programId' => 'int',
        'subLedgerId' => 'string',
        'value' => 'float',
        'desiredValue' => 'float',
        'recipientIntegrationId' => 'string',
        'startDate' => '\DateTime',
        'expiryDate' => '\DateTime',
        'transactionUUID' => 'string',
        'cartItemPosition' => 'float',
        'cartItemSubPosition' => 'float',
        'cardIdentifier' => 'string',
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
        'programId' => null,
        'subLedgerId' => null,
        'value' => null,
        'desiredValue' => null,
        'recipientIntegrationId' => null,
        'startDate' => 'date-time',
        'expiryDate' => 'date-time',
        'transactionUUID' => null,
        'cartItemPosition' => null,
        'cartItemSubPosition' => null,
        'cardIdentifier' => null,
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
        'programId' => 'programId',
        'subLedgerId' => 'subLedgerId',
        'value' => 'value',
        'desiredValue' => 'desiredValue',
        'recipientIntegrationId' => 'recipientIntegrationId',
        'startDate' => 'startDate',
        'expiryDate' => 'expiryDate',
        'transactionUUID' => 'transactionUUID',
        'cartItemPosition' => 'cartItemPosition',
        'cartItemSubPosition' => 'cartItemSubPosition',
        'cardIdentifier' => 'cardIdentifier',
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
        'programId' => 'setProgramId',
        'subLedgerId' => 'setSubLedgerId',
        'value' => 'setValue',
        'desiredValue' => 'setDesiredValue',
        'recipientIntegrationId' => 'setRecipientIntegrationId',
        'startDate' => 'setStartDate',
        'expiryDate' => 'setExpiryDate',
        'transactionUUID' => 'setTransactionUUID',
        'cartItemPosition' => 'setCartItemPosition',
        'cartItemSubPosition' => 'setCartItemSubPosition',
        'cardIdentifier' => 'setCardIdentifier',
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
        'programId' => 'getProgramId',
        'subLedgerId' => 'getSubLedgerId',
        'value' => 'getValue',
        'desiredValue' => 'getDesiredValue',
        'recipientIntegrationId' => 'getRecipientIntegrationId',
        'startDate' => 'getStartDate',
        'expiryDate' => 'getExpiryDate',
        'transactionUUID' => 'getTransactionUUID',
        'cartItemPosition' => 'getCartItemPosition',
        'cartItemSubPosition' => 'getCartItemSubPosition',
        'cardIdentifier' => 'getCardIdentifier',
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
        $this->container['programId'] = isset($data['programId']) ? $data['programId'] : null;
        $this->container['subLedgerId'] = isset($data['subLedgerId']) ? $data['subLedgerId'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['desiredValue'] = isset($data['desiredValue']) ? $data['desiredValue'] : null;
        $this->container['recipientIntegrationId'] = isset($data['recipientIntegrationId']) ? $data['recipientIntegrationId'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['transactionUUID'] = isset($data['transactionUUID']) ? $data['transactionUUID'] : null;
        $this->container['cartItemPosition'] = isset($data['cartItemPosition']) ? $data['cartItemPosition'] : null;
        $this->container['cartItemSubPosition'] = isset($data['cartItemSubPosition']) ? $data['cartItemSubPosition'] : null;
        $this->container['cardIdentifier'] = isset($data['cardIdentifier']) ? $data['cardIdentifier'] : null;
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
        if ($this->container['programId'] === null) {
            $invalidProperties[] = "'programId' can't be null";
        }
        if ($this->container['subLedgerId'] === null) {
            $invalidProperties[] = "'subLedgerId' can't be null";
        }
        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['recipientIntegrationId'] === null) {
            $invalidProperties[] = "'recipientIntegrationId' can't be null";
        }
        if ((mb_strlen($this->container['recipientIntegrationId']) > 1000)) {
            $invalidProperties[] = "invalid value for 'recipientIntegrationId', the character length must be smaller than or equal to 1000.";
        }

        if ($this->container['transactionUUID'] === null) {
            $invalidProperties[] = "'transactionUUID' can't be null";
        }
        if (!is_null($this->container['cardIdentifier']) && (mb_strlen($this->container['cardIdentifier']) > 108)) {
            $invalidProperties[] = "invalid value for 'cardIdentifier', the character length must be smaller than or equal to 108.";
        }

        if (!is_null($this->container['cardIdentifier']) && !preg_match("/^[A-Za-z0-9_-]*$/", $this->container['cardIdentifier'])) {
            $invalidProperties[] = "invalid value for 'cardIdentifier', must be conform to the pattern /^[A-Za-z0-9_-]*$/.";
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
     * @param string $name The name / description of this loyalty point addition.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets programId
     *
     * @return int
     */
    public function getProgramId()
    {
        return $this->container['programId'];
    }

    /**
     * Sets programId
     *
     * @param int $programId The ID of the loyalty program where these points were added.
     *
     * @return $this
     */
    public function setProgramId($programId)
    {
        $this->container['programId'] = $programId;

        return $this;
    }

    /**
     * Gets subLedgerId
     *
     * @return string
     */
    public function getSubLedgerId()
    {
        return $this->container['subLedgerId'];
    }

    /**
     * Sets subLedgerId
     *
     * @param string $subLedgerId The ID of the subledger within the loyalty program where these points were added.
     *
     * @return $this
     */
    public function setSubLedgerId($subLedgerId)
    {
        $this->container['subLedgerId'] = $subLedgerId;

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
     * @param float $value The amount of points that were added.
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

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
     * @param float|null $desiredValue The original amount of loyalty points to be awarded.
     *
     * @return $this
     */
    public function setDesiredValue($desiredValue)
    {
        $this->container['desiredValue'] = $desiredValue;

        return $this;
    }

    /**
     * Gets recipientIntegrationId
     *
     * @return string
     */
    public function getRecipientIntegrationId()
    {
        return $this->container['recipientIntegrationId'];
    }

    /**
     * Sets recipientIntegrationId
     *
     * @param string $recipientIntegrationId The user for whom these points were added.
     *
     * @return $this
     */
    public function setRecipientIntegrationId($recipientIntegrationId)
    {
        if ((mb_strlen($recipientIntegrationId) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $recipientIntegrationId when calling AddLoyaltyPointsEffectProps., must be smaller than or equal to 1000.');
        }

        $this->container['recipientIntegrationId'] = $recipientIntegrationId;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime|null $startDate Date after which points will be valid.
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets expiryDate
     *
     * @return \DateTime|null
     */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
     * Sets expiryDate
     *
     * @param \DateTime|null $expiryDate Date after which points will expire.
     *
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;

        return $this;
    }

    /**
     * Gets transactionUUID
     *
     * @return string
     */
    public function getTransactionUUID()
    {
        return $this->container['transactionUUID'];
    }

    /**
     * Sets transactionUUID
     *
     * @param string $transactionUUID The identifier of this addition in the loyalty ledger.
     *
     * @return $this
     */
    public function setTransactionUUID($transactionUUID)
    {
        $this->container['transactionUUID'] = $transactionUUID;

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
     * @param float|null $cartItemPosition The index of the item in the cart items list on which the loyal points addition should be applied.
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
     * @param float|null $cartItemSubPosition For cart items with `quantity` > 1, the sub position indicates to which item the loyalty points addition is applied.
     *
     * @return $this
     */
    public function setCartItemSubPosition($cartItemSubPosition)
    {
        $this->container['cartItemSubPosition'] = $cartItemSubPosition;

        return $this;
    }

    /**
     * Gets cardIdentifier
     *
     * @return string|null
     */
    public function getCardIdentifier()
    {
        return $this->container['cardIdentifier'];
    }

    /**
     * Sets cardIdentifier
     *
     * @param string|null $cardIdentifier The alphanumeric identifier of the loyalty card.
     *
     * @return $this
     */
    public function setCardIdentifier($cardIdentifier)
    {
        if (!is_null($cardIdentifier) && (mb_strlen($cardIdentifier) > 108)) {
            throw new \InvalidArgumentException('invalid length for $cardIdentifier when calling AddLoyaltyPointsEffectProps., must be smaller than or equal to 108.');
        }
        if (!is_null($cardIdentifier) && (!preg_match("/^[A-Za-z0-9_-]*$/", $cardIdentifier))) {
            throw new \InvalidArgumentException("invalid value for $cardIdentifier when calling AddLoyaltyPointsEffectProps., must conform to the pattern /^[A-Za-z0-9_-]*$/.");
        }

        $this->container['cardIdentifier'] = $cardIdentifier;

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


