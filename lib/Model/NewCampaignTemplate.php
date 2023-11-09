<?php
/**
 * NewCampaignTemplate
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
 * NewCampaignTemplate Class Doc Comment
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NewCampaignTemplate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewCampaignTemplate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'description' => 'string',
        'instructions' => 'string',
        'campaignAttributes' => 'object',
        'couponAttributes' => 'object',
        'state' => 'string',
        'tags' => 'string[]',
        'features' => 'string[]',
        'couponSettings' => '\TalonOne\Client\Model\CodeGeneratorSettings',
        'referralSettings' => '\TalonOne\Client\Model\CodeGeneratorSettings',
        'limits' => '\TalonOne\Client\Model\TemplateLimitConfig[]',
        'templateParams' => '\TalonOne\Client\Model\CampaignTemplateParams[]',
        'campaignCollections' => '\TalonOne\Client\Model\CampaignTemplateCollection[]',
        'defaultCampaignGroupId' => 'int',
        'campaignType' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'instructions' => null,
        'campaignAttributes' => null,
        'couponAttributes' => null,
        'state' => null,
        'tags' => null,
        'features' => null,
        'couponSettings' => null,
        'referralSettings' => null,
        'limits' => null,
        'templateParams' => null,
        'campaignCollections' => null,
        'defaultCampaignGroupId' => null,
        'campaignType' => null
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
        'description' => 'description',
        'instructions' => 'instructions',
        'campaignAttributes' => 'campaignAttributes',
        'couponAttributes' => 'couponAttributes',
        'state' => 'state',
        'tags' => 'tags',
        'features' => 'features',
        'couponSettings' => 'couponSettings',
        'referralSettings' => 'referralSettings',
        'limits' => 'limits',
        'templateParams' => 'templateParams',
        'campaignCollections' => 'campaignCollections',
        'defaultCampaignGroupId' => 'defaultCampaignGroupId',
        'campaignType' => 'campaignType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'instructions' => 'setInstructions',
        'campaignAttributes' => 'setCampaignAttributes',
        'couponAttributes' => 'setCouponAttributes',
        'state' => 'setState',
        'tags' => 'setTags',
        'features' => 'setFeatures',
        'couponSettings' => 'setCouponSettings',
        'referralSettings' => 'setReferralSettings',
        'limits' => 'setLimits',
        'templateParams' => 'setTemplateParams',
        'campaignCollections' => 'setCampaignCollections',
        'defaultCampaignGroupId' => 'setDefaultCampaignGroupId',
        'campaignType' => 'setCampaignType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'instructions' => 'getInstructions',
        'campaignAttributes' => 'getCampaignAttributes',
        'couponAttributes' => 'getCouponAttributes',
        'state' => 'getState',
        'tags' => 'getTags',
        'features' => 'getFeatures',
        'couponSettings' => 'getCouponSettings',
        'referralSettings' => 'getReferralSettings',
        'limits' => 'getLimits',
        'templateParams' => 'getTemplateParams',
        'campaignCollections' => 'getCampaignCollections',
        'defaultCampaignGroupId' => 'getDefaultCampaignGroupId',
        'campaignType' => 'getCampaignType'
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

    const STATE_DRAFT = 'draft';
    const STATE_ENABLED = 'enabled';
    const STATE_DISABLED = 'disabled';
    const FEATURES_COUPONS = 'coupons';
    const FEATURES_REFERRALS = 'referrals';
    const FEATURES_LOYALTY = 'loyalty';
    const FEATURES_GIVEAWAYS = 'giveaways';
    const FEATURES_STRIKETHROUGH = 'strikethrough';
    const CAMPAIGN_TYPE_CART_ITEM = 'cartItem';
    const CAMPAIGN_TYPE_ADVANCED = 'advanced';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_DRAFT,
            self::STATE_ENABLED,
            self::STATE_DISABLED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFeaturesAllowableValues()
    {
        return [
            self::FEATURES_COUPONS,
            self::FEATURES_REFERRALS,
            self::FEATURES_LOYALTY,
            self::FEATURES_GIVEAWAYS,
            self::FEATURES_STRIKETHROUGH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCampaignTypeAllowableValues()
    {
        return [
            self::CAMPAIGN_TYPE_CART_ITEM,
            self::CAMPAIGN_TYPE_ADVANCED,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['instructions'] = isset($data['instructions']) ? $data['instructions'] : null;
        $this->container['campaignAttributes'] = isset($data['campaignAttributes']) ? $data['campaignAttributes'] : null;
        $this->container['couponAttributes'] = isset($data['couponAttributes']) ? $data['couponAttributes'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['couponSettings'] = isset($data['couponSettings']) ? $data['couponSettings'] : null;
        $this->container['referralSettings'] = isset($data['referralSettings']) ? $data['referralSettings'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['templateParams'] = isset($data['templateParams']) ? $data['templateParams'] : null;
        $this->container['campaignCollections'] = isset($data['campaignCollections']) ? $data['campaignCollections'] : null;
        $this->container['defaultCampaignGroupId'] = isset($data['defaultCampaignGroupId']) ? $data['defaultCampaignGroupId'] : null;
        $this->container['campaignType'] = isset($data['campaignType']) ? $data['campaignType'] : 'advanced';
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
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['instructions'] === null) {
            $invalidProperties[] = "'instructions' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'state', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['campaignType'] === null) {
            $invalidProperties[] = "'campaignType' can't be null";
        }
        $allowedValues = $this->getCampaignTypeAllowableValues();
        if (!is_null($this->container['campaignType']) && !in_array($this->container['campaignType'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'campaignType', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * @param string $name The campaign template name.
     *
     * @return $this
     */
    public function setName($name)
    {

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling NewCampaignTemplate., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Customer-facing text that explains the objective of the template.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets instructions
     *
     * @return string
     */
    public function getInstructions()
    {
        return $this->container['instructions'];
    }

    /**
     * Sets instructions
     *
     * @param string $instructions Customer-facing text that explains how to use the template. For example, you can use this property to explain the available attributes of this template, and how they can be modified when a user uses this template to create a new campaign.
     *
     * @return $this
     */
    public function setInstructions($instructions)
    {
        $this->container['instructions'] = $instructions;

        return $this;
    }

    /**
     * Gets campaignAttributes
     *
     * @return object|null
     */
    public function getCampaignAttributes()
    {
        return $this->container['campaignAttributes'];
    }

    /**
     * Sets campaignAttributes
     *
     * @param object|null $campaignAttributes The campaign attributes that campaigns created from this template will have by default.
     *
     * @return $this
     */
    public function setCampaignAttributes($campaignAttributes)
    {
        $this->container['campaignAttributes'] = $campaignAttributes;

        return $this;
    }

    /**
     * Gets couponAttributes
     *
     * @return object|null
     */
    public function getCouponAttributes()
    {
        return $this->container['couponAttributes'];
    }

    /**
     * Sets couponAttributes
     *
     * @param object|null $couponAttributes The campaign attributes that coupons created from this template will have by default.
     *
     * @return $this
     */
    public function setCouponAttributes($couponAttributes)
    {
        $this->container['couponAttributes'] = $couponAttributes;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state Only Campaign Templates in 'available' state may be used to create Campaigns.
     *
     * @return $this
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'state', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags A list of tags for the campaign template.
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets features
     *
     * @return string[]|null
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param string[]|null $features A list of features for the campaign template.
     *
     * @return $this
     */
    public function setFeatures($features)
    {
        $allowedValues = $this->getFeaturesAllowableValues();
        if (!is_null($features) && array_diff($features, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'features', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['features'] = $features;

        return $this;
    }

    /**
     * Gets couponSettings
     *
     * @return \TalonOne\Client\Model\CodeGeneratorSettings|null
     */
    public function getCouponSettings()
    {
        return $this->container['couponSettings'];
    }

    /**
     * Sets couponSettings
     *
     * @param \TalonOne\Client\Model\CodeGeneratorSettings|null $couponSettings couponSettings
     *
     * @return $this
     */
    public function setCouponSettings($couponSettings)
    {
        $this->container['couponSettings'] = $couponSettings;

        return $this;
    }

    /**
     * Gets referralSettings
     *
     * @return \TalonOne\Client\Model\CodeGeneratorSettings|null
     */
    public function getReferralSettings()
    {
        return $this->container['referralSettings'];
    }

    /**
     * Sets referralSettings
     *
     * @param \TalonOne\Client\Model\CodeGeneratorSettings|null $referralSettings referralSettings
     *
     * @return $this
     */
    public function setReferralSettings($referralSettings)
    {
        $this->container['referralSettings'] = $referralSettings;

        return $this;
    }

    /**
     * Gets limits
     *
     * @return \TalonOne\Client\Model\TemplateLimitConfig[]|null
     */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
     * Sets limits
     *
     * @param \TalonOne\Client\Model\TemplateLimitConfig[]|null $limits The set of limits that will operate for this campaign template.
     *
     * @return $this
     */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;

        return $this;
    }

    /**
     * Gets templateParams
     *
     * @return \TalonOne\Client\Model\CampaignTemplateParams[]|null
     */
    public function getTemplateParams()
    {
        return $this->container['templateParams'];
    }

    /**
     * Sets templateParams
     *
     * @param \TalonOne\Client\Model\CampaignTemplateParams[]|null $templateParams Fields which can be used to replace values in a rule.
     *
     * @return $this
     */
    public function setTemplateParams($templateParams)
    {
        $this->container['templateParams'] = $templateParams;

        return $this;
    }

    /**
     * Gets campaignCollections
     *
     * @return \TalonOne\Client\Model\CampaignTemplateCollection[]|null
     */
    public function getCampaignCollections()
    {
        return $this->container['campaignCollections'];
    }

    /**
     * Sets campaignCollections
     *
     * @param \TalonOne\Client\Model\CampaignTemplateCollection[]|null $campaignCollections The campaign collections from the blueprint campaign for the template.
     *
     * @return $this
     */
    public function setCampaignCollections($campaignCollections)
    {
        $this->container['campaignCollections'] = $campaignCollections;

        return $this;
    }

    /**
     * Gets defaultCampaignGroupId
     *
     * @return int|null
     */
    public function getDefaultCampaignGroupId()
    {
        return $this->container['defaultCampaignGroupId'];
    }

    /**
     * Sets defaultCampaignGroupId
     *
     * @param int|null $defaultCampaignGroupId The default campaign group ID.
     *
     * @return $this
     */
    public function setDefaultCampaignGroupId($defaultCampaignGroupId)
    {
        $this->container['defaultCampaignGroupId'] = $defaultCampaignGroupId;

        return $this;
    }

    /**
     * Gets campaignType
     *
     * @return string
     */
    public function getCampaignType()
    {
        return $this->container['campaignType'];
    }

    /**
     * Sets campaignType
     *
     * @param string $campaignType The campaign type. Possible type values:   - `cartItem`: Type of campaign that can apply effects only to cart items.   - `advanced`: Type of campaign that can apply effects to customer sessions and cart items.
     *
     * @return $this
     */
    public function setCampaignType($campaignType)
    {
        $allowedValues = $this->getCampaignTypeAllowableValues();
        if (!in_array($campaignType, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'campaignType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['campaignType'] = $campaignType;

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


