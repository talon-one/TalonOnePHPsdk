<?php
/**
 * Campaign
 *
 * PHP version 5
 *
 * @category Class
 * @package  OpenAPI\Client
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
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * Campaign Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Campaign implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Campaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'created' => '\DateTime',
        'application_id' => 'int',
        'user_id' => 'int',
        'name' => 'string',
        'description' => 'string',
        'start_time' => '\DateTime',
        'end_time' => '\DateTime',
        'attributes' => 'object',
        'state' => 'string',
        'active_ruleset_id' => 'int',
        'tags' => 'string[]',
        'features' => 'string[]',
        'coupon_settings' => '\OpenAPI\Client\Model\CodeGeneratorSettings',
        'referral_settings' => '\OpenAPI\Client\Model\CodeGeneratorSettings',
        'limits' => '\OpenAPI\Client\Model\LimitConfig[]',
        'coupon_redemption_count' => 'int',
        'referral_redemption_count' => 'int',
        'discount_count' => 'int',
        'discount_effect_count' => 'int',
        'coupon_creation_count' => 'int',
        'last_activity' => '\DateTime',
        'updated' => '\DateTime',
        'created_by' => 'string',
        'updated_by' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created' => 'date-time',
        'application_id' => null,
        'user_id' => null,
        'name' => null,
        'description' => null,
        'start_time' => 'date-time',
        'end_time' => 'date-time',
        'attributes' => null,
        'state' => null,
        'active_ruleset_id' => null,
        'tags' => null,
        'features' => null,
        'coupon_settings' => null,
        'referral_settings' => null,
        'limits' => null,
        'coupon_redemption_count' => null,
        'referral_redemption_count' => null,
        'discount_count' => null,
        'discount_effect_count' => null,
        'coupon_creation_count' => null,
        'last_activity' => 'date-time',
        'updated' => 'date-time',
        'created_by' => null,
        'updated_by' => null
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
        'application_id' => 'applicationId',
        'user_id' => 'userId',
        'name' => 'name',
        'description' => 'description',
        'start_time' => 'startTime',
        'end_time' => 'endTime',
        'attributes' => 'attributes',
        'state' => 'state',
        'active_ruleset_id' => 'activeRulesetId',
        'tags' => 'tags',
        'features' => 'features',
        'coupon_settings' => 'couponSettings',
        'referral_settings' => 'referralSettings',
        'limits' => 'limits',
        'coupon_redemption_count' => 'couponRedemptionCount',
        'referral_redemption_count' => 'referralRedemptionCount',
        'discount_count' => 'discountCount',
        'discount_effect_count' => 'discountEffectCount',
        'coupon_creation_count' => 'couponCreationCount',
        'last_activity' => 'lastActivity',
        'updated' => 'updated',
        'created_by' => 'createdBy',
        'updated_by' => 'updatedBy'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created' => 'setCreated',
        'application_id' => 'setApplicationId',
        'user_id' => 'setUserId',
        'name' => 'setName',
        'description' => 'setDescription',
        'start_time' => 'setStartTime',
        'end_time' => 'setEndTime',
        'attributes' => 'setAttributes',
        'state' => 'setState',
        'active_ruleset_id' => 'setActiveRulesetId',
        'tags' => 'setTags',
        'features' => 'setFeatures',
        'coupon_settings' => 'setCouponSettings',
        'referral_settings' => 'setReferralSettings',
        'limits' => 'setLimits',
        'coupon_redemption_count' => 'setCouponRedemptionCount',
        'referral_redemption_count' => 'setReferralRedemptionCount',
        'discount_count' => 'setDiscountCount',
        'discount_effect_count' => 'setDiscountEffectCount',
        'coupon_creation_count' => 'setCouponCreationCount',
        'last_activity' => 'setLastActivity',
        'updated' => 'setUpdated',
        'created_by' => 'setCreatedBy',
        'updated_by' => 'setUpdatedBy'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created' => 'getCreated',
        'application_id' => 'getApplicationId',
        'user_id' => 'getUserId',
        'name' => 'getName',
        'description' => 'getDescription',
        'start_time' => 'getStartTime',
        'end_time' => 'getEndTime',
        'attributes' => 'getAttributes',
        'state' => 'getState',
        'active_ruleset_id' => 'getActiveRulesetId',
        'tags' => 'getTags',
        'features' => 'getFeatures',
        'coupon_settings' => 'getCouponSettings',
        'referral_settings' => 'getReferralSettings',
        'limits' => 'getLimits',
        'coupon_redemption_count' => 'getCouponRedemptionCount',
        'referral_redemption_count' => 'getReferralRedemptionCount',
        'discount_count' => 'getDiscountCount',
        'discount_effect_count' => 'getDiscountEffectCount',
        'coupon_creation_count' => 'getCouponCreationCount',
        'last_activity' => 'getLastActivity',
        'updated' => 'getUpdated',
        'created_by' => 'getCreatedBy',
        'updated_by' => 'getUpdatedBy'
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
        $this->container['application_id'] = isset($data['application_id']) ? $data['application_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['end_time'] = isset($data['end_time']) ? $data['end_time'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : 'enabled';
        $this->container['active_ruleset_id'] = isset($data['active_ruleset_id']) ? $data['active_ruleset_id'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['features'] = isset($data['features']) ? $data['features'] : null;
        $this->container['coupon_settings'] = isset($data['coupon_settings']) ? $data['coupon_settings'] : null;
        $this->container['referral_settings'] = isset($data['referral_settings']) ? $data['referral_settings'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['coupon_redemption_count'] = isset($data['coupon_redemption_count']) ? $data['coupon_redemption_count'] : null;
        $this->container['referral_redemption_count'] = isset($data['referral_redemption_count']) ? $data['referral_redemption_count'] : null;
        $this->container['discount_count'] = isset($data['discount_count']) ? $data['discount_count'] : null;
        $this->container['discount_effect_count'] = isset($data['discount_effect_count']) ? $data['discount_effect_count'] : null;
        $this->container['coupon_creation_count'] = isset($data['coupon_creation_count']) ? $data['coupon_creation_count'] : null;
        $this->container['last_activity'] = isset($data['last_activity']) ? $data['last_activity'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['created_by'] = isset($data['created_by']) ? $data['created_by'] : null;
        $this->container['updated_by'] = isset($data['updated_by']) ? $data['updated_by'] : null;
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
        if ($this->container['application_id'] === null) {
            $invalidProperties[] = "'application_id' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalidProperties[] = "'user_id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
     * Gets application_id
     *
     * @return int
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     *
     * @param int $application_id The ID of the application that owns this entity.
     *
     * @return $this
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id The ID of the account that owns this entity.
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

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
     * @param string $name A friendly name for this campaign.
     *
     * @return $this
     */
    public function setName($name)
    {

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling Campaign., must be bigger than or equal to 1.');
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
     * @param string $description A detailed description of the campaign.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets start_time
     *
     * @return \DateTime|null
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     *
     * @param \DateTime|null $start_time Datetime when the campaign will become active.
     *
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

        return $this;
    }

    /**
     * Gets end_time
     *
     * @return \DateTime|null
     */
    public function getEndTime()
    {
        return $this->container['end_time'];
    }

    /**
     * Sets end_time
     *
     * @param \DateTime|null $end_time Datetime when the campaign will become in-active.
     *
     * @return $this
     */
    public function setEndTime($end_time)
    {
        $this->container['end_time'] = $end_time;

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
     * Gets active_ruleset_id
     *
     * @return int|null
     */
    public function getActiveRulesetId()
    {
        return $this->container['active_ruleset_id'];
    }

    /**
     * Sets active_ruleset_id
     *
     * @param int|null $active_ruleset_id ID of Ruleset this campaign applies on customer session evaluation.
     *
     * @return $this
     */
    public function setActiveRulesetId($active_ruleset_id)
    {
        $this->container['active_ruleset_id'] = $active_ruleset_id;

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
     * @param string[] $features A list of features for the campaign.
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
     * Gets coupon_settings
     *
     * @return \OpenAPI\Client\Model\CodeGeneratorSettings|null
     */
    public function getCouponSettings()
    {
        return $this->container['coupon_settings'];
    }

    /**
     * Sets coupon_settings
     *
     * @param \OpenAPI\Client\Model\CodeGeneratorSettings|null $coupon_settings coupon_settings
     *
     * @return $this
     */
    public function setCouponSettings($coupon_settings)
    {
        $this->container['coupon_settings'] = $coupon_settings;

        return $this;
    }

    /**
     * Gets referral_settings
     *
     * @return \OpenAPI\Client\Model\CodeGeneratorSettings|null
     */
    public function getReferralSettings()
    {
        return $this->container['referral_settings'];
    }

    /**
     * Sets referral_settings
     *
     * @param \OpenAPI\Client\Model\CodeGeneratorSettings|null $referral_settings referral_settings
     *
     * @return $this
     */
    public function setReferralSettings($referral_settings)
    {
        $this->container['referral_settings'] = $referral_settings;

        return $this;
    }

    /**
     * Gets limits
     *
     * @return \OpenAPI\Client\Model\LimitConfig[]
     */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
     * Sets limits
     *
     * @param \OpenAPI\Client\Model\LimitConfig[] $limits The set of limits that will operate for this campaign
     *
     * @return $this
     */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;

        return $this;
    }

    /**
     * Gets coupon_redemption_count
     *
     * @return int|null
     */
    public function getCouponRedemptionCount()
    {
        return $this->container['coupon_redemption_count'];
    }

    /**
     * Sets coupon_redemption_count
     *
     * @param int|null $coupon_redemption_count Number of coupons redeemed in the campaign.
     *
     * @return $this
     */
    public function setCouponRedemptionCount($coupon_redemption_count)
    {
        $this->container['coupon_redemption_count'] = $coupon_redemption_count;

        return $this;
    }

    /**
     * Gets referral_redemption_count
     *
     * @return int|null
     */
    public function getReferralRedemptionCount()
    {
        return $this->container['referral_redemption_count'];
    }

    /**
     * Sets referral_redemption_count
     *
     * @param int|null $referral_redemption_count Number of referral codes redeemed in the campaign.
     *
     * @return $this
     */
    public function setReferralRedemptionCount($referral_redemption_count)
    {
        $this->container['referral_redemption_count'] = $referral_redemption_count;

        return $this;
    }

    /**
     * Gets discount_count
     *
     * @return int|null
     */
    public function getDiscountCount()
    {
        return $this->container['discount_count'];
    }

    /**
     * Sets discount_count
     *
     * @param int|null $discount_count Total amount of discounts redeemed in the campaign.
     *
     * @return $this
     */
    public function setDiscountCount($discount_count)
    {
        $this->container['discount_count'] = $discount_count;

        return $this;
    }

    /**
     * Gets discount_effect_count
     *
     * @return int|null
     */
    public function getDiscountEffectCount()
    {
        return $this->container['discount_effect_count'];
    }

    /**
     * Sets discount_effect_count
     *
     * @param int|null $discount_effect_count Total number of times discounts were redeemed in this campaign.
     *
     * @return $this
     */
    public function setDiscountEffectCount($discount_effect_count)
    {
        $this->container['discount_effect_count'] = $discount_effect_count;

        return $this;
    }

    /**
     * Gets coupon_creation_count
     *
     * @return int|null
     */
    public function getCouponCreationCount()
    {
        return $this->container['coupon_creation_count'];
    }

    /**
     * Sets coupon_creation_count
     *
     * @param int|null $coupon_creation_count Total number of coupons created by rules in this campaign.
     *
     * @return $this
     */
    public function setCouponCreationCount($coupon_creation_count)
    {
        $this->container['coupon_creation_count'] = $coupon_creation_count;

        return $this;
    }

    /**
     * Gets last_activity
     *
     * @return \DateTime|null
     */
    public function getLastActivity()
    {
        return $this->container['last_activity'];
    }

    /**
     * Sets last_activity
     *
     * @param \DateTime|null $last_activity Timestamp of the most recent event received by this campaign.
     *
     * @return $this
     */
    public function setLastActivity($last_activity)
    {
        $this->container['last_activity'] = $last_activity;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime|null
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime|null $updated Timestamp of the most recent update to the campaign or any of its elements.
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets created_by
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['created_by'];
    }

    /**
     * Sets created_by
     *
     * @param string|null $created_by Name of the user who created this campaign if available.
     *
     * @return $this
     */
    public function setCreatedBy($created_by)
    {
        $this->container['created_by'] = $created_by;

        return $this;
    }

    /**
     * Gets updated_by
     *
     * @return string|null
     */
    public function getUpdatedBy()
    {
        return $this->container['updated_by'];
    }

    /**
     * Sets updated_by
     *
     * @param string|null $updated_by Name of the user who last updated this campaign if available.
     *
     * @return $this
     */
    public function setUpdatedBy($updated_by)
    {
        $this->container['updated_by'] = $updated_by;

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


