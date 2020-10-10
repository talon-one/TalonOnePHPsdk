<?php
/**
 * Application
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
 * Application Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Application implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Application';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'accountId' => 'int',
        'name' => 'string',
        'description' => 'string',
        'timezone' => 'string',
        'currency' => 'string',
        'caseSensitivity' => 'string',
        'attributes' => 'object',
        'limits' => '\TalonOne\Client\Model\LimitConfig[]',
        'campaignPriority' => 'string',
        'exclusiveCampaignsStrategy' => 'string',
        'enableCascadingDiscounts' => 'bool',
        'enableFlattenedCartItems' => 'bool',
        'attributesSettings' => '\TalonOne\Client\Model\AttributesSettings',
        'sandbox' => 'bool',
        'loyaltyPrograms' => '\TalonOne\Client\Model\LoyaltyProgram[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created' => 'date-time',
        'modified' => 'date-time',
        'accountId' => null,
        'name' => null,
        'description' => null,
        'timezone' => null,
        'currency' => null,
        'caseSensitivity' => null,
        'attributes' => null,
        'limits' => null,
        'campaignPriority' => null,
        'exclusiveCampaignsStrategy' => null,
        'enableCascadingDiscounts' => null,
        'enableFlattenedCartItems' => null,
        'attributesSettings' => null,
        'sandbox' => null,
        'loyaltyPrograms' => null
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
        'id' => 'id',
        'created' => 'created',
        'modified' => 'modified',
        'accountId' => 'accountId',
        'name' => 'name',
        'description' => 'description',
        'timezone' => 'timezone',
        'currency' => 'currency',
        'caseSensitivity' => 'caseSensitivity',
        'attributes' => 'attributes',
        'limits' => 'limits',
        'campaignPriority' => 'campaignPriority',
        'exclusiveCampaignsStrategy' => 'exclusiveCampaignsStrategy',
        'enableCascadingDiscounts' => 'enableCascadingDiscounts',
        'enableFlattenedCartItems' => 'enableFlattenedCartItems',
        'attributesSettings' => 'attributesSettings',
        'sandbox' => 'sandbox',
        'loyaltyPrograms' => 'loyaltyPrograms'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created' => 'setCreated',
        'modified' => 'setModified',
        'accountId' => 'setAccountId',
        'name' => 'setName',
        'description' => 'setDescription',
        'timezone' => 'setTimezone',
        'currency' => 'setCurrency',
        'caseSensitivity' => 'setCaseSensitivity',
        'attributes' => 'setAttributes',
        'limits' => 'setLimits',
        'campaignPriority' => 'setCampaignPriority',
        'exclusiveCampaignsStrategy' => 'setExclusiveCampaignsStrategy',
        'enableCascadingDiscounts' => 'setEnableCascadingDiscounts',
        'enableFlattenedCartItems' => 'setEnableFlattenedCartItems',
        'attributesSettings' => 'setAttributesSettings',
        'sandbox' => 'setSandbox',
        'loyaltyPrograms' => 'setLoyaltyPrograms'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created' => 'getCreated',
        'modified' => 'getModified',
        'accountId' => 'getAccountId',
        'name' => 'getName',
        'description' => 'getDescription',
        'timezone' => 'getTimezone',
        'currency' => 'getCurrency',
        'caseSensitivity' => 'getCaseSensitivity',
        'attributes' => 'getAttributes',
        'limits' => 'getLimits',
        'campaignPriority' => 'getCampaignPriority',
        'exclusiveCampaignsStrategy' => 'getExclusiveCampaignsStrategy',
        'enableCascadingDiscounts' => 'getEnableCascadingDiscounts',
        'enableFlattenedCartItems' => 'getEnableFlattenedCartItems',
        'attributesSettings' => 'getAttributesSettings',
        'sandbox' => 'getSandbox',
        'loyaltyPrograms' => 'getLoyaltyPrograms'
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

    const CASE_SENSITIVITY_SENSITIVE = 'sensitive';
    const CASE_SENSITIVITY_INSENSITIVE_UPPERCASE = 'insensitive-uppercase';
    const CASE_SENSITIVITY_INSENSITIVE_LOWERCASE = 'insensitive-lowercase';
    const CAMPAIGN_PRIORITY_UNIVERSAL = 'universal';
    const CAMPAIGN_PRIORITY_STACKABLE = 'stackable';
    const CAMPAIGN_PRIORITY_EXCLUSIVE = 'exclusive';
    const EXCLUSIVE_CAMPAIGNS_STRATEGY_LIST_ORDER = 'listOrder';
    const EXCLUSIVE_CAMPAIGNS_STRATEGY_LOWEST_DISCOUNT = 'lowestDiscount';
    const EXCLUSIVE_CAMPAIGNS_STRATEGY_HIGHEST_DISCOUNT = 'highestDiscount';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCaseSensitivityAllowableValues()
    {
        return [
            self::CASE_SENSITIVITY_SENSITIVE,
            self::CASE_SENSITIVITY_INSENSITIVE_UPPERCASE,
            self::CASE_SENSITIVITY_INSENSITIVE_LOWERCASE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCampaignPriorityAllowableValues()
    {
        return [
            self::CAMPAIGN_PRIORITY_UNIVERSAL,
            self::CAMPAIGN_PRIORITY_STACKABLE,
            self::CAMPAIGN_PRIORITY_EXCLUSIVE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExclusiveCampaignsStrategyAllowableValues()
    {
        return [
            self::EXCLUSIVE_CAMPAIGNS_STRATEGY_LIST_ORDER,
            self::EXCLUSIVE_CAMPAIGNS_STRATEGY_LOWEST_DISCOUNT,
            self::EXCLUSIVE_CAMPAIGNS_STRATEGY_HIGHEST_DISCOUNT,
        ];
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['caseSensitivity'] = isset($data['caseSensitivity']) ? $data['caseSensitivity'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['campaignPriority'] = isset($data['campaignPriority']) ? $data['campaignPriority'] : null;
        $this->container['exclusiveCampaignsStrategy'] = isset($data['exclusiveCampaignsStrategy']) ? $data['exclusiveCampaignsStrategy'] : null;
        $this->container['enableCascadingDiscounts'] = isset($data['enableCascadingDiscounts']) ? $data['enableCascadingDiscounts'] : null;
        $this->container['enableFlattenedCartItems'] = isset($data['enableFlattenedCartItems']) ? $data['enableFlattenedCartItems'] : null;
        $this->container['attributesSettings'] = isset($data['attributesSettings']) ? $data['attributesSettings'] : null;
        $this->container['sandbox'] = isset($data['sandbox']) ? $data['sandbox'] : null;
        $this->container['loyaltyPrograms'] = isset($data['loyaltyPrograms']) ? $data['loyaltyPrograms'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['modified'] === null) {
            $invalidProperties[] = "'modified' can't be null";
        }
        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['timezone'] === null) {
            $invalidProperties[] = "'timezone' can't be null";
        }
        if ((mb_strlen($this->container['timezone']) < 1)) {
            $invalidProperties[] = "invalid value for 'timezone', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ((mb_strlen($this->container['currency']) < 1)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getCaseSensitivityAllowableValues();
        if (!is_null($this->container['caseSensitivity']) && !in_array($this->container['caseSensitivity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'caseSensitivity', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCampaignPriorityAllowableValues();
        if (!is_null($this->container['campaignPriority']) && !in_array($this->container['campaignPriority'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'campaignPriority', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getExclusiveCampaignsStrategyAllowableValues();
        if (!is_null($this->container['exclusiveCampaignsStrategy']) && !in_array($this->container['exclusiveCampaignsStrategy'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'exclusiveCampaignsStrategy', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['loyaltyPrograms'] === null) {
            $invalidProperties[] = "'loyaltyPrograms' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Unique ID for this entity.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param \DateTime $created The exact moment this entity was created.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param \DateTime $modified The exact moment this entity was last modified.
     *
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets accountId
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int $accountId The ID of the account that owns this entity.
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

        return $this;
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
     * @param string $name The name of this application.
     *
     * @return $this
     */
    public function setName($name)
    {

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Application., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description A longer description of the application.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets timezone
     *
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     *
     * @param string $timezone A string containing an IANA timezone descriptor.
     *
     * @return $this
     */
    public function setTimezone($timezone)
    {

        if ((mb_strlen($timezone) < 1)) {
            throw new \InvalidArgumentException('invalid length for $timezone when calling Application., must be bigger than or equal to 1.');
        }

        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency A string describing a default currency for new customer sessions.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {

        if ((mb_strlen($currency) < 1)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling Application., must be bigger than or equal to 1.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets caseSensitivity
     *
     * @return string|null
     */
    public function getCaseSensitivity()
    {
        return $this->container['caseSensitivity'];
    }

    /**
     * Sets caseSensitivity
     *
     * @param string|null $caseSensitivity A string indicating how should campaigns in this application deal with case sensitivity on coupon codes.
     *
     * @return $this
     */
    public function setCaseSensitivity($caseSensitivity)
    {
        $allowedValues = $this->getCaseSensitivityAllowableValues();
        if (!is_null($caseSensitivity) && !in_array($caseSensitivity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'caseSensitivity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['caseSensitivity'] = $caseSensitivity;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return object|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param object|null $attributes Arbitrary properties associated with this campaign
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets limits
     *
     * @return \TalonOne\Client\Model\LimitConfig[]|null
     */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
     * Sets limits
     *
     * @param \TalonOne\Client\Model\LimitConfig[]|null $limits Default limits for campaigns created in this application
     *
     * @return $this
     */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;

        return $this;
    }

    /**
     * Gets campaignPriority
     *
     * @return string|null
     */
    public function getCampaignPriority()
    {
        return $this->container['campaignPriority'];
    }

    /**
     * Sets campaignPriority
     *
     * @param string|null $campaignPriority Default priority for campaigns created in this application, can be one of (universal, stackable, exclusive). If no value is provided, this is set to \"universal\"
     *
     * @return $this
     */
    public function setCampaignPriority($campaignPriority)
    {
        $allowedValues = $this->getCampaignPriorityAllowableValues();
        if (!is_null($campaignPriority) && !in_array($campaignPriority, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'campaignPriority', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['campaignPriority'] = $campaignPriority;

        return $this;
    }

    /**
     * Gets exclusiveCampaignsStrategy
     *
     * @return string|null
     */
    public function getExclusiveCampaignsStrategy()
    {
        return $this->container['exclusiveCampaignsStrategy'];
    }

    /**
     * Sets exclusiveCampaignsStrategy
     *
     * @param string|null $exclusiveCampaignsStrategy The strategy used when choosing exclusive campaigns for evaluation, can be one of (listOrder, lowestDiscount, highestDiscount). If no value is provided, this is set to \"listOrder\"
     *
     * @return $this
     */
    public function setExclusiveCampaignsStrategy($exclusiveCampaignsStrategy)
    {
        $allowedValues = $this->getExclusiveCampaignsStrategyAllowableValues();
        if (!is_null($exclusiveCampaignsStrategy) && !in_array($exclusiveCampaignsStrategy, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'exclusiveCampaignsStrategy', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['exclusiveCampaignsStrategy'] = $exclusiveCampaignsStrategy;

        return $this;
    }

    /**
     * Gets enableCascadingDiscounts
     *
     * @return bool|null
     */
    public function getEnableCascadingDiscounts()
    {
        return $this->container['enableCascadingDiscounts'];
    }

    /**
     * Sets enableCascadingDiscounts
     *
     * @param bool|null $enableCascadingDiscounts Flag indicating if discounts should cascade for this application
     *
     * @return $this
     */
    public function setEnableCascadingDiscounts($enableCascadingDiscounts)
    {
        $this->container['enableCascadingDiscounts'] = $enableCascadingDiscounts;

        return $this;
    }

    /**
     * Gets enableFlattenedCartItems
     *
     * @return bool|null
     */
    public function getEnableFlattenedCartItems()
    {
        return $this->container['enableFlattenedCartItems'];
    }

    /**
     * Sets enableFlattenedCartItems
     *
     * @param bool|null $enableFlattenedCartItems Flag indicating if cart items of quantity larger than one should be separated into different items of quantity one
     *
     * @return $this
     */
    public function setEnableFlattenedCartItems($enableFlattenedCartItems)
    {
        $this->container['enableFlattenedCartItems'] = $enableFlattenedCartItems;

        return $this;
    }

    /**
     * Gets attributesSettings
     *
     * @return \TalonOne\Client\Model\AttributesSettings|null
     */
    public function getAttributesSettings()
    {
        return $this->container['attributesSettings'];
    }

    /**
     * Sets attributesSettings
     *
     * @param \TalonOne\Client\Model\AttributesSettings|null $attributesSettings attributesSettings
     *
     * @return $this
     */
    public function setAttributesSettings($attributesSettings)
    {
        $this->container['attributesSettings'] = $attributesSettings;

        return $this;
    }

    /**
     * Gets sandbox
     *
     * @return bool|null
     */
    public function getSandbox()
    {
        return $this->container['sandbox'];
    }

    /**
     * Sets sandbox
     *
     * @param bool|null $sandbox Flag indicating if this is a live or sandbox application
     *
     * @return $this
     */
    public function setSandbox($sandbox)
    {
        $this->container['sandbox'] = $sandbox;

        return $this;
    }

    /**
     * Gets loyaltyPrograms
     *
     * @return \TalonOne\Client\Model\LoyaltyProgram[]
     */
    public function getLoyaltyPrograms()
    {
        return $this->container['loyaltyPrograms'];
    }

    /**
     * Sets loyaltyPrograms
     *
     * @param \TalonOne\Client\Model\LoyaltyProgram[] $loyaltyPrograms An array containing all the loyalty programs to which this application is subscribed
     *
     * @return $this
     */
    public function setLoyaltyPrograms($loyaltyPrograms)
    {
        $this->container['loyaltyPrograms'] = $loyaltyPrograms;

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


