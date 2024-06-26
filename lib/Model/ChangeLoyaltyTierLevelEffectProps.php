<?php
/**
 * ChangeLoyaltyTierLevelEffectProps
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
 * ChangeLoyaltyTierLevelEffectProps Class Doc Comment
 *
 * @category Class
 * @description The properties specific to the \&quot;changeLoyaltyTierLevel\&quot; effect. This is triggered whenever the user&#39;s loyalty tier is upgraded due to a validated rule that contained an \&quot;addLoyaltyPoints\&quot; effect.
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChangeLoyaltyTierLevelEffectProps implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChangeLoyaltyTierLevelEffectProps';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'ruleTitle' => 'string',
        'programId' => 'int',
        'subLedgerId' => 'string',
        'previousTierName' => 'string',
        'newTierName' => 'string',
        'expiryDate' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'ruleTitle' => null,
        'programId' => null,
        'subLedgerId' => null,
        'previousTierName' => null,
        'newTierName' => null,
        'expiryDate' => 'date-time'
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
        'ruleTitle' => 'ruleTitle',
        'programId' => 'programId',
        'subLedgerId' => 'subLedgerId',
        'previousTierName' => 'previousTierName',
        'newTierName' => 'newTierName',
        'expiryDate' => 'expiryDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ruleTitle' => 'setRuleTitle',
        'programId' => 'setProgramId',
        'subLedgerId' => 'setSubLedgerId',
        'previousTierName' => 'setPreviousTierName',
        'newTierName' => 'setNewTierName',
        'expiryDate' => 'setExpiryDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ruleTitle' => 'getRuleTitle',
        'programId' => 'getProgramId',
        'subLedgerId' => 'getSubLedgerId',
        'previousTierName' => 'getPreviousTierName',
        'newTierName' => 'getNewTierName',
        'expiryDate' => 'getExpiryDate'
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
        $this->container['ruleTitle'] = isset($data['ruleTitle']) ? $data['ruleTitle'] : null;
        $this->container['programId'] = isset($data['programId']) ? $data['programId'] : null;
        $this->container['subLedgerId'] = isset($data['subLedgerId']) ? $data['subLedgerId'] : null;
        $this->container['previousTierName'] = isset($data['previousTierName']) ? $data['previousTierName'] : null;
        $this->container['newTierName'] = isset($data['newTierName']) ? $data['newTierName'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ruleTitle'] === null) {
            $invalidProperties[] = "'ruleTitle' can't be null";
        }
        if ($this->container['programId'] === null) {
            $invalidProperties[] = "'programId' can't be null";
        }
        if ($this->container['subLedgerId'] === null) {
            $invalidProperties[] = "'subLedgerId' can't be null";
        }
        if ($this->container['newTierName'] === null) {
            $invalidProperties[] = "'newTierName' can't be null";
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
     * Gets ruleTitle
     *
     * @return string
     */
    public function getRuleTitle()
    {
        return $this->container['ruleTitle'];
    }

    /**
     * Sets ruleTitle
     *
     * @param string $ruleTitle The title of the rule that triggered the tier upgrade.
     *
     * @return $this
     */
    public function setRuleTitle($ruleTitle)
    {
        $this->container['ruleTitle'] = $ruleTitle;

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
     * Gets previousTierName
     *
     * @return string|null
     */
    public function getPreviousTierName()
    {
        return $this->container['previousTierName'];
    }

    /**
     * Sets previousTierName
     *
     * @param string|null $previousTierName The name of the tier from which the user was upgraded.
     *
     * @return $this
     */
    public function setPreviousTierName($previousTierName)
    {
        $this->container['previousTierName'] = $previousTierName;

        return $this;
    }

    /**
     * Gets newTierName
     *
     * @return string
     */
    public function getNewTierName()
    {
        return $this->container['newTierName'];
    }

    /**
     * Sets newTierName
     *
     * @param string $newTierName The name of the tier to which the user has been upgraded.
     *
     * @return $this
     */
    public function setNewTierName($newTierName)
    {
        $this->container['newTierName'] = $newTierName;

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
     * @param \DateTime|null $expiryDate The expiration date of the new tier.
     *
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;

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


