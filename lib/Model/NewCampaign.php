<?php
/**
 * NewCampaign
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
 * NewCampaign Class Doc Comment
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NewCampaign implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewCampaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'description' => 'string',
        'startTime' => '\DateTime',
        'endTime' => '\DateTime',
        'attributes' => 'object',
        'state' => 'string',
        'activeRulesetId' => 'int',
        'tags' => 'string[]',
        'features' => 'string[]',
        'couponSettings' => '\TalonOne\Client\Model\CodeGeneratorSettings',
        'referralSettings' => '\TalonOne\Client\Model\CodeGeneratorSettings',
        'limits' => '\TalonOne\Client\Model\LimitConfig[]',
        'campaignGroups' => 'int[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'startTime' => 'date-time',
        'endTime' => 'date-time',
        'attributes' => null,
        'state' => null,
        'activeRulesetId' => null,
        'tags' => null,
        'features' => null,
        'couponSettings' => null,
        'referralSettings' => null,
        'limits' => null,
        'campaignGroups' => null
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
        'startTime' => 'startTime',
        'endTime' => 'endTime',
        'attributes' => 'attributes',
        'state' => 'state',
        'activeRulesetId' => 'activeRulesetId',
        'tags' => 'tags',
        'features' => 'features',
        'couponSettings' => 'couponSettings',
        'referralSettings' => 'referralSettings',
        'limits' => 'limits',
        'campaignGroups' => 'campaignGroups'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'startTime' => 'setStartTime',
        'endTime' => 'setEndTime',
        'attributes' => 'setAttributes',
        'state' => 'setState',
        'activeRulesetId' => 'setActiveRulesetId',
        'tags' => 'setTags',
        'features' => 'setFeatures',
        'couponSettings' => 'setCouponSettings',
        'referralSettings' => 'setReferralSettings',
        'limits' => 'setLimits',
        'campaignGroups' => 'setCampaignGroups'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'startTime' => 'getStartTime',
        'endTime' => 'getEndTime',
        'attributes' => 'getAttributes',
        'state' => 'getState',
        'activeRulesetId' => 'getActiveRulesetId',
        'tags' => 'getTags',
        'features' => 'getFeatures',
        'couponSettings' => 'getCouponSettings',
        'referralSettings' => 'getReferralSettings',
        'limits' => 'getLimits',
        'campaignGroups' => 'getCampaignGroups'
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

    const STATE_ENABLED = 'enabled';
    const STATE_DISABLED = 'disabled';
    const STATE_ARCHIVED = 'archived';
    const FEATURES_COUPONS = 'coupons';
    const FEATURES_REFERRALS = 'referrals';
    const FEATURES_LOYALTY = 'loyalty';
    const FEATURES_GIVEAWAYS = 'giveaways';
    const FEATURES_STRIKETHROUGH = 'strikethrough';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ENABLED,
            self::STATE_DISABLED,
            self::STATE_ARCHIVED,
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : 'enabled';
        $this->container['activeRulesetId'] = isset($data['activeRulesetId']) ? $data['activeRulesetId'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['couponSettings'] = isset($data['couponSettings']) ? $data['couponSettings'] : null;
        $this->container['referralSettings'] = isset($data['referralSettings']) ? $data['referralSettings'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['campaignGroups'] = isset($data['campaignGroups']) ? $data['campaignGroups'] : null;
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

        if ($this->container['tags'] === null) {
            $invalidProperties[] = "'tags' can't be null";
        }
        if ($this->container['features'] === null) {
            $invalidProperties[] = "'features' can't be null";
        }
        if ($this->container['limits'] === null) {
            $invalidProperties[] = "'limits' can't be null";
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
     * @param string $name A user-facing name for this campaign.
     *
     * @return $this
     */
    public function setName($name)
    {

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling NewCampaign., must be bigger than or equal to 1.');
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
     * @param string|null $description A detailed description of the campaign.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets startTime
     *
     * @return \DateTime|null
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param \DateTime|null $startTime Timestamp when the campaign will become active.
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
     * @return \DateTime|null
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param \DateTime|null $endTime Timestamp the campaign will become inactive.
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

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
     * @param object|null $attributes Arbitrary properties associated with this campaign.
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

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
     * @param string $state A disabled or archived campaign is not evaluated for rules or coupons.
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
     * Gets activeRulesetId
     *
     * @return int|null
     */
    public function getActiveRulesetId()
    {
        return $this->container['activeRulesetId'];
    }

    /**
     * Sets activeRulesetId
     *
     * @param int|null $activeRulesetId [ID of Ruleset](https://docs.talon.one/management-api#operation/getRulesets) this campaign applies on customer session evaluation.
     *
     * @return $this
     */
    public function setActiveRulesetId($activeRulesetId)
    {
        $this->container['activeRulesetId'] = $activeRulesetId;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[] $tags A list of tags for the campaign.
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
     * @return string[]
     */
    public function getFeatures()
    {
        return $this->container['features'];
    }

    /**
     * Sets features
     *
     * @param string[] $features The features enabled in this campaign.
     *
     * @return $this
     */
    public function setFeatures($features)
    {
        $allowedValues = $this->getFeaturesAllowableValues();
        if (array_diff($features, $allowedValues)) {
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
     * @return \TalonOne\Client\Model\LimitConfig[]
     */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
     * Sets limits
     *
     * @param \TalonOne\Client\Model\LimitConfig[] $limits The set of [budget limits](https://docs.talon.one/docs/product/campaigns/settings/managing-campaign-budgets) for this campaign.
     *
     * @return $this
     */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;

        return $this;
    }

    /**
     * Gets campaignGroups
     *
     * @return int[]|null
     */
    public function getCampaignGroups()
    {
        return $this->container['campaignGroups'];
    }

    /**
     * Sets campaignGroups
     *
     * @param int[]|null $campaignGroups The IDs of the [campaign groups](https://docs.talon.one/docs/product/account/managing-campaign-groups) this campaign belongs to.
     *
     * @return $this
     */
    public function setCampaignGroups($campaignGroups)
    {
        $this->container['campaignGroups'] = $campaignGroups;

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


