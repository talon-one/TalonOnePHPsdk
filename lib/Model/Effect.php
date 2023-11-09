<?php
/**
 * Effect
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
 * Effect Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Effect implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Effect';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'campaignId' => 'int',
        'rulesetId' => 'int',
        'ruleIndex' => 'int',
        'ruleName' => 'string',
        'effectType' => 'string',
        'triggeredByCoupon' => 'int',
        'triggeredForCatalogItem' => 'int',
        'conditionIndex' => 'int',
        'props' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'campaignId' => null,
        'rulesetId' => null,
        'ruleIndex' => null,
        'ruleName' => null,
        'effectType' => null,
        'triggeredByCoupon' => null,
        'triggeredForCatalogItem' => null,
        'conditionIndex' => null,
        'props' => null
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
        'campaignId' => 'campaignId',
        'rulesetId' => 'rulesetId',
        'ruleIndex' => 'ruleIndex',
        'ruleName' => 'ruleName',
        'effectType' => 'effectType',
        'triggeredByCoupon' => 'triggeredByCoupon',
        'triggeredForCatalogItem' => 'triggeredForCatalogItem',
        'conditionIndex' => 'conditionIndex',
        'props' => 'props'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'campaignId' => 'setCampaignId',
        'rulesetId' => 'setRulesetId',
        'ruleIndex' => 'setRuleIndex',
        'ruleName' => 'setRuleName',
        'effectType' => 'setEffectType',
        'triggeredByCoupon' => 'setTriggeredByCoupon',
        'triggeredForCatalogItem' => 'setTriggeredForCatalogItem',
        'conditionIndex' => 'setConditionIndex',
        'props' => 'setProps'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'campaignId' => 'getCampaignId',
        'rulesetId' => 'getRulesetId',
        'ruleIndex' => 'getRuleIndex',
        'ruleName' => 'getRuleName',
        'effectType' => 'getEffectType',
        'triggeredByCoupon' => 'getTriggeredByCoupon',
        'triggeredForCatalogItem' => 'getTriggeredForCatalogItem',
        'conditionIndex' => 'getConditionIndex',
        'props' => 'getProps'
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
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['rulesetId'] = isset($data['rulesetId']) ? $data['rulesetId'] : null;
        $this->container['ruleIndex'] = isset($data['ruleIndex']) ? $data['ruleIndex'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
        $this->container['effectType'] = isset($data['effectType']) ? $data['effectType'] : null;
        $this->container['triggeredByCoupon'] = isset($data['triggeredByCoupon']) ? $data['triggeredByCoupon'] : null;
        $this->container['triggeredForCatalogItem'] = isset($data['triggeredForCatalogItem']) ? $data['triggeredForCatalogItem'] : null;
        $this->container['conditionIndex'] = isset($data['conditionIndex']) ? $data['conditionIndex'] : null;
        $this->container['props'] = isset($data['props']) ? $data['props'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['campaignId'] === null) {
            $invalidProperties[] = "'campaignId' can't be null";
        }
        if ($this->container['rulesetId'] === null) {
            $invalidProperties[] = "'rulesetId' can't be null";
        }
        if ($this->container['ruleIndex'] === null) {
            $invalidProperties[] = "'ruleIndex' can't be null";
        }
        if ($this->container['ruleName'] === null) {
            $invalidProperties[] = "'ruleName' can't be null";
        }
        if ($this->container['effectType'] === null) {
            $invalidProperties[] = "'effectType' can't be null";
        }
        if ($this->container['props'] === null) {
            $invalidProperties[] = "'props' can't be null";
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
     * Gets campaignId
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaignId'];
    }

    /**
     * Sets campaignId
     *
     * @param int $campaignId The ID of the campaign that triggered this effect.
     *
     * @return $this
     */
    public function setCampaignId($campaignId)
    {
        $this->container['campaignId'] = $campaignId;

        return $this;
    }

    /**
     * Gets rulesetId
     *
     * @return int
     */
    public function getRulesetId()
    {
        return $this->container['rulesetId'];
    }

    /**
     * Sets rulesetId
     *
     * @param int $rulesetId The ID of the ruleset that was active in the campaign when this effect was triggered.
     *
     * @return $this
     */
    public function setRulesetId($rulesetId)
    {
        $this->container['rulesetId'] = $rulesetId;

        return $this;
    }

    /**
     * Gets ruleIndex
     *
     * @return int
     */
    public function getRuleIndex()
    {
        return $this->container['ruleIndex'];
    }

    /**
     * Sets ruleIndex
     *
     * @param int $ruleIndex The position of the rule that triggered this effect within the ruleset.
     *
     * @return $this
     */
    public function setRuleIndex($ruleIndex)
    {
        $this->container['ruleIndex'] = $ruleIndex;

        return $this;
    }

    /**
     * Gets ruleName
     *
     * @return string
     */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
     * Sets ruleName
     *
     * @param string $ruleName The name of the rule that triggered this effect.
     *
     * @return $this
     */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;

        return $this;
    }

    /**
     * Gets effectType
     *
     * @return string
     */
    public function getEffectType()
    {
        return $this->container['effectType'];
    }

    /**
     * Sets effectType
     *
     * @param string $effectType The type of effect that was triggered. See [API effects](https://docs.talon.one/docs/dev/integration-api/api-effects).
     *
     * @return $this
     */
    public function setEffectType($effectType)
    {
        $this->container['effectType'] = $effectType;

        return $this;
    }

    /**
     * Gets triggeredByCoupon
     *
     * @return int|null
     */
    public function getTriggeredByCoupon()
    {
        return $this->container['triggeredByCoupon'];
    }

    /**
     * Sets triggeredByCoupon
     *
     * @param int|null $triggeredByCoupon The ID of the coupon that was being evaluated when this effect was triggered.
     *
     * @return $this
     */
    public function setTriggeredByCoupon($triggeredByCoupon)
    {
        $this->container['triggeredByCoupon'] = $triggeredByCoupon;

        return $this;
    }

    /**
     * Gets triggeredForCatalogItem
     *
     * @return int|null
     */
    public function getTriggeredForCatalogItem()
    {
        return $this->container['triggeredForCatalogItem'];
    }

    /**
     * Sets triggeredForCatalogItem
     *
     * @param int|null $triggeredForCatalogItem The ID of the catalog item that was being evaluated when this effect was triggered.
     *
     * @return $this
     */
    public function setTriggeredForCatalogItem($triggeredForCatalogItem)
    {
        $this->container['triggeredForCatalogItem'] = $triggeredForCatalogItem;

        return $this;
    }

    /**
     * Gets conditionIndex
     *
     * @return int|null
     */
    public function getConditionIndex()
    {
        return $this->container['conditionIndex'];
    }

    /**
     * Sets conditionIndex
     *
     * @param int|null $conditionIndex The index of the condition that was triggered.
     *
     * @return $this
     */
    public function setConditionIndex($conditionIndex)
    {
        $this->container['conditionIndex'] = $conditionIndex;

        return $this;
    }

    /**
     * Gets props
     *
     * @return object
     */
    public function getProps()
    {
        return $this->container['props'];
    }

    /**
     * Sets props
     *
     * @param object $props The properties of the effect. See [API effects](https://docs.talon.one/docs/dev/integration-api/api-effects).
     *
     * @return $this
     */
    public function setProps($props)
    {
        $this->container['props'] = $props;

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


