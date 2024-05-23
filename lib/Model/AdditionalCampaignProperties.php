<?php
/**
 * AdditionalCampaignProperties
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
 * AdditionalCampaignProperties Class Doc Comment
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AdditionalCampaignProperties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AdditionalCampaignProperties';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'budgets' => '\TalonOne\Client\Model\CampaignBudget[]',
        'couponRedemptionCount' => 'int',
        'referralRedemptionCount' => 'int',
        'discountCount' => 'float',
        'discountEffectCount' => 'int',
        'couponCreationCount' => 'int',
        'customEffectCount' => 'int',
        'referralCreationCount' => 'int',
        'addFreeItemEffectCount' => 'int',
        'awardedGiveawaysCount' => 'int',
        'createdLoyaltyPointsCount' => 'float',
        'createdLoyaltyPointsEffectCount' => 'int',
        'redeemedLoyaltyPointsCount' => 'float',
        'redeemedLoyaltyPointsEffectCount' => 'int',
        'callApiEffectCount' => 'int',
        'reservecouponEffectCount' => 'int',
        'lastActivity' => '\DateTime',
        'updated' => '\DateTime',
        'createdBy' => 'string',
        'updatedBy' => 'string',
        'templateId' => 'int',
        'frontendState' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'budgets' => null,
        'couponRedemptionCount' => null,
        'referralRedemptionCount' => null,
        'discountCount' => null,
        'discountEffectCount' => null,
        'couponCreationCount' => null,
        'customEffectCount' => null,
        'referralCreationCount' => null,
        'addFreeItemEffectCount' => null,
        'awardedGiveawaysCount' => null,
        'createdLoyaltyPointsCount' => null,
        'createdLoyaltyPointsEffectCount' => null,
        'redeemedLoyaltyPointsCount' => null,
        'redeemedLoyaltyPointsEffectCount' => null,
        'callApiEffectCount' => null,
        'reservecouponEffectCount' => null,
        'lastActivity' => 'date-time',
        'updated' => 'date-time',
        'createdBy' => null,
        'updatedBy' => null,
        'templateId' => null,
        'frontendState' => null
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
        'budgets' => 'budgets',
        'couponRedemptionCount' => 'couponRedemptionCount',
        'referralRedemptionCount' => 'referralRedemptionCount',
        'discountCount' => 'discountCount',
        'discountEffectCount' => 'discountEffectCount',
        'couponCreationCount' => 'couponCreationCount',
        'customEffectCount' => 'customEffectCount',
        'referralCreationCount' => 'referralCreationCount',
        'addFreeItemEffectCount' => 'addFreeItemEffectCount',
        'awardedGiveawaysCount' => 'awardedGiveawaysCount',
        'createdLoyaltyPointsCount' => 'createdLoyaltyPointsCount',
        'createdLoyaltyPointsEffectCount' => 'createdLoyaltyPointsEffectCount',
        'redeemedLoyaltyPointsCount' => 'redeemedLoyaltyPointsCount',
        'redeemedLoyaltyPointsEffectCount' => 'redeemedLoyaltyPointsEffectCount',
        'callApiEffectCount' => 'callApiEffectCount',
        'reservecouponEffectCount' => 'reservecouponEffectCount',
        'lastActivity' => 'lastActivity',
        'updated' => 'updated',
        'createdBy' => 'createdBy',
        'updatedBy' => 'updatedBy',
        'templateId' => 'templateId',
        'frontendState' => 'frontendState'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'budgets' => 'setBudgets',
        'couponRedemptionCount' => 'setCouponRedemptionCount',
        'referralRedemptionCount' => 'setReferralRedemptionCount',
        'discountCount' => 'setDiscountCount',
        'discountEffectCount' => 'setDiscountEffectCount',
        'couponCreationCount' => 'setCouponCreationCount',
        'customEffectCount' => 'setCustomEffectCount',
        'referralCreationCount' => 'setReferralCreationCount',
        'addFreeItemEffectCount' => 'setAddFreeItemEffectCount',
        'awardedGiveawaysCount' => 'setAwardedGiveawaysCount',
        'createdLoyaltyPointsCount' => 'setCreatedLoyaltyPointsCount',
        'createdLoyaltyPointsEffectCount' => 'setCreatedLoyaltyPointsEffectCount',
        'redeemedLoyaltyPointsCount' => 'setRedeemedLoyaltyPointsCount',
        'redeemedLoyaltyPointsEffectCount' => 'setRedeemedLoyaltyPointsEffectCount',
        'callApiEffectCount' => 'setCallApiEffectCount',
        'reservecouponEffectCount' => 'setReservecouponEffectCount',
        'lastActivity' => 'setLastActivity',
        'updated' => 'setUpdated',
        'createdBy' => 'setCreatedBy',
        'updatedBy' => 'setUpdatedBy',
        'templateId' => 'setTemplateId',
        'frontendState' => 'setFrontendState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'budgets' => 'getBudgets',
        'couponRedemptionCount' => 'getCouponRedemptionCount',
        'referralRedemptionCount' => 'getReferralRedemptionCount',
        'discountCount' => 'getDiscountCount',
        'discountEffectCount' => 'getDiscountEffectCount',
        'couponCreationCount' => 'getCouponCreationCount',
        'customEffectCount' => 'getCustomEffectCount',
        'referralCreationCount' => 'getReferralCreationCount',
        'addFreeItemEffectCount' => 'getAddFreeItemEffectCount',
        'awardedGiveawaysCount' => 'getAwardedGiveawaysCount',
        'createdLoyaltyPointsCount' => 'getCreatedLoyaltyPointsCount',
        'createdLoyaltyPointsEffectCount' => 'getCreatedLoyaltyPointsEffectCount',
        'redeemedLoyaltyPointsCount' => 'getRedeemedLoyaltyPointsCount',
        'redeemedLoyaltyPointsEffectCount' => 'getRedeemedLoyaltyPointsEffectCount',
        'callApiEffectCount' => 'getCallApiEffectCount',
        'reservecouponEffectCount' => 'getReservecouponEffectCount',
        'lastActivity' => 'getLastActivity',
        'updated' => 'getUpdated',
        'createdBy' => 'getCreatedBy',
        'updatedBy' => 'getUpdatedBy',
        'templateId' => 'getTemplateId',
        'frontendState' => 'getFrontendState'
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

    const FRONTEND_STATE_EXPIRED = 'expired';
    const FRONTEND_STATE_SCHEDULED = 'scheduled';
    const FRONTEND_STATE_RUNNING = 'running';
    const FRONTEND_STATE_DRAFT = 'draft';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFrontendStateAllowableValues()
    {
        return [
            self::FRONTEND_STATE_EXPIRED,
            self::FRONTEND_STATE_SCHEDULED,
            self::FRONTEND_STATE_RUNNING,
            self::FRONTEND_STATE_DRAFT,
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
        $this->container['budgets'] = isset($data['budgets']) ? $data['budgets'] : null;
        $this->container['couponRedemptionCount'] = isset($data['couponRedemptionCount']) ? $data['couponRedemptionCount'] : null;
        $this->container['referralRedemptionCount'] = isset($data['referralRedemptionCount']) ? $data['referralRedemptionCount'] : null;
        $this->container['discountCount'] = isset($data['discountCount']) ? $data['discountCount'] : null;
        $this->container['discountEffectCount'] = isset($data['discountEffectCount']) ? $data['discountEffectCount'] : null;
        $this->container['couponCreationCount'] = isset($data['couponCreationCount']) ? $data['couponCreationCount'] : null;
        $this->container['customEffectCount'] = isset($data['customEffectCount']) ? $data['customEffectCount'] : null;
        $this->container['referralCreationCount'] = isset($data['referralCreationCount']) ? $data['referralCreationCount'] : null;
        $this->container['addFreeItemEffectCount'] = isset($data['addFreeItemEffectCount']) ? $data['addFreeItemEffectCount'] : null;
        $this->container['awardedGiveawaysCount'] = isset($data['awardedGiveawaysCount']) ? $data['awardedGiveawaysCount'] : null;
        $this->container['createdLoyaltyPointsCount'] = isset($data['createdLoyaltyPointsCount']) ? $data['createdLoyaltyPointsCount'] : null;
        $this->container['createdLoyaltyPointsEffectCount'] = isset($data['createdLoyaltyPointsEffectCount']) ? $data['createdLoyaltyPointsEffectCount'] : null;
        $this->container['redeemedLoyaltyPointsCount'] = isset($data['redeemedLoyaltyPointsCount']) ? $data['redeemedLoyaltyPointsCount'] : null;
        $this->container['redeemedLoyaltyPointsEffectCount'] = isset($data['redeemedLoyaltyPointsEffectCount']) ? $data['redeemedLoyaltyPointsEffectCount'] : null;
        $this->container['callApiEffectCount'] = isset($data['callApiEffectCount']) ? $data['callApiEffectCount'] : null;
        $this->container['reservecouponEffectCount'] = isset($data['reservecouponEffectCount']) ? $data['reservecouponEffectCount'] : null;
        $this->container['lastActivity'] = isset($data['lastActivity']) ? $data['lastActivity'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
        $this->container['updatedBy'] = isset($data['updatedBy']) ? $data['updatedBy'] : null;
        $this->container['templateId'] = isset($data['templateId']) ? $data['templateId'] : null;
        $this->container['frontendState'] = isset($data['frontendState']) ? $data['frontendState'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['budgets'] === null) {
            $invalidProperties[] = "'budgets' can't be null";
        }
        if ($this->container['frontendState'] === null) {
            $invalidProperties[] = "'frontendState' can't be null";
        }
        $allowedValues = $this->getFrontendStateAllowableValues();
        if (!is_null($this->container['frontendState']) && !in_array($this->container['frontendState'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'frontendState', must be one of '%s'",
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
     * Gets budgets
     *
     * @return \TalonOne\Client\Model\CampaignBudget[]
     */
    public function getBudgets()
    {
        return $this->container['budgets'];
    }

    /**
     * Sets budgets
     *
     * @param \TalonOne\Client\Model\CampaignBudget[] $budgets A list of all the budgets that are defined by this campaign and their usage.  **Note:** Budgets that are not defined do not appear in this list and their usage is not counted until they are defined.
     *
     * @return $this
     */
    public function setBudgets($budgets)
    {
        $this->container['budgets'] = $budgets;

        return $this;
    }

    /**
     * Gets couponRedemptionCount
     *
     * @return int|null
     */
    public function getCouponRedemptionCount()
    {
        return $this->container['couponRedemptionCount'];
    }

    /**
     * Sets couponRedemptionCount
     *
     * @param int|null $couponRedemptionCount This property is **deprecated**. The count should be available under *budgets* property. Number of coupons redeemed in the campaign.
     *
     * @return $this
     */
    public function setCouponRedemptionCount($couponRedemptionCount)
    {
        $this->container['couponRedemptionCount'] = $couponRedemptionCount;

        return $this;
    }

    /**
     * Gets referralRedemptionCount
     *
     * @return int|null
     */
    public function getReferralRedemptionCount()
    {
        return $this->container['referralRedemptionCount'];
    }

    /**
     * Sets referralRedemptionCount
     *
     * @param int|null $referralRedemptionCount This property is **deprecated**. The count should be available under *budgets* property. Number of referral codes redeemed in the campaign.
     *
     * @return $this
     */
    public function setReferralRedemptionCount($referralRedemptionCount)
    {
        $this->container['referralRedemptionCount'] = $referralRedemptionCount;

        return $this;
    }

    /**
     * Gets discountCount
     *
     * @return float|null
     */
    public function getDiscountCount()
    {
        return $this->container['discountCount'];
    }

    /**
     * Sets discountCount
     *
     * @param float|null $discountCount This property is **deprecated**. The count should be available under *budgets* property. Total amount of discounts redeemed in the campaign.
     *
     * @return $this
     */
    public function setDiscountCount($discountCount)
    {
        $this->container['discountCount'] = $discountCount;

        return $this;
    }

    /**
     * Gets discountEffectCount
     *
     * @return int|null
     */
    public function getDiscountEffectCount()
    {
        return $this->container['discountEffectCount'];
    }

    /**
     * Sets discountEffectCount
     *
     * @param int|null $discountEffectCount This property is **deprecated**. The count should be available under *budgets* property. Total number of times discounts were redeemed in this campaign.
     *
     * @return $this
     */
    public function setDiscountEffectCount($discountEffectCount)
    {
        $this->container['discountEffectCount'] = $discountEffectCount;

        return $this;
    }

    /**
     * Gets couponCreationCount
     *
     * @return int|null
     */
    public function getCouponCreationCount()
    {
        return $this->container['couponCreationCount'];
    }

    /**
     * Sets couponCreationCount
     *
     * @param int|null $couponCreationCount This property is **deprecated**. The count should be available under *budgets* property. Total number of coupons created by rules in this campaign.
     *
     * @return $this
     */
    public function setCouponCreationCount($couponCreationCount)
    {
        $this->container['couponCreationCount'] = $couponCreationCount;

        return $this;
    }

    /**
     * Gets customEffectCount
     *
     * @return int|null
     */
    public function getCustomEffectCount()
    {
        return $this->container['customEffectCount'];
    }

    /**
     * Sets customEffectCount
     *
     * @param int|null $customEffectCount This property is **deprecated**. The count should be available under *budgets* property. Total number of custom effects triggered by rules in this campaign.
     *
     * @return $this
     */
    public function setCustomEffectCount($customEffectCount)
    {
        $this->container['customEffectCount'] = $customEffectCount;

        return $this;
    }

    /**
     * Gets referralCreationCount
     *
     * @return int|null
     */
    public function getReferralCreationCount()
    {
        return $this->container['referralCreationCount'];
    }

    /**
     * Sets referralCreationCount
     *
     * @param int|null $referralCreationCount This property is **deprecated**. The count should be available under *budgets* property. Total number of referrals created by rules in this campaign.
     *
     * @return $this
     */
    public function setReferralCreationCount($referralCreationCount)
    {
        $this->container['referralCreationCount'] = $referralCreationCount;

        return $this;
    }

    /**
     * Gets addFreeItemEffectCount
     *
     * @return int|null
     */
    public function getAddFreeItemEffectCount()
    {
        return $this->container['addFreeItemEffectCount'];
    }

    /**
     * Sets addFreeItemEffectCount
     *
     * @param int|null $addFreeItemEffectCount This property is **deprecated**. The count should be available under *budgets* property. Total number of times the [add free item effect](https://docs.talon.one/docs/dev/integration-api/api-effects#addfreeitem) can be triggered in this campaign.
     *
     * @return $this
     */
    public function setAddFreeItemEffectCount($addFreeItemEffectCount)
    {
        $this->container['addFreeItemEffectCount'] = $addFreeItemEffectCount;

        return $this;
    }

    /**
     * Gets awardedGiveawaysCount
     *
     * @return int|null
     */
    public function getAwardedGiveawaysCount()
    {
        return $this->container['awardedGiveawaysCount'];
    }

    /**
     * Sets awardedGiveawaysCount
     *
     * @param int|null $awardedGiveawaysCount This property is **deprecated**. The count should be available under *budgets* property. Total number of giveaways awarded by rules in this campaign.
     *
     * @return $this
     */
    public function setAwardedGiveawaysCount($awardedGiveawaysCount)
    {
        $this->container['awardedGiveawaysCount'] = $awardedGiveawaysCount;

        return $this;
    }

    /**
     * Gets createdLoyaltyPointsCount
     *
     * @return float|null
     */
    public function getCreatedLoyaltyPointsCount()
    {
        return $this->container['createdLoyaltyPointsCount'];
    }

    /**
     * Sets createdLoyaltyPointsCount
     *
     * @param float|null $createdLoyaltyPointsCount This property is **deprecated**. The count should be available under *budgets* property. Total number of loyalty points created by rules in this campaign.
     *
     * @return $this
     */
    public function setCreatedLoyaltyPointsCount($createdLoyaltyPointsCount)
    {
        $this->container['createdLoyaltyPointsCount'] = $createdLoyaltyPointsCount;

        return $this;
    }

    /**
     * Gets createdLoyaltyPointsEffectCount
     *
     * @return int|null
     */
    public function getCreatedLoyaltyPointsEffectCount()
    {
        return $this->container['createdLoyaltyPointsEffectCount'];
    }

    /**
     * Sets createdLoyaltyPointsEffectCount
     *
     * @param int|null $createdLoyaltyPointsEffectCount This property is **deprecated**. The count should be available under *budgets* property. Total number of loyalty point creation effects triggered by rules in this campaign.
     *
     * @return $this
     */
    public function setCreatedLoyaltyPointsEffectCount($createdLoyaltyPointsEffectCount)
    {
        $this->container['createdLoyaltyPointsEffectCount'] = $createdLoyaltyPointsEffectCount;

        return $this;
    }

    /**
     * Gets redeemedLoyaltyPointsCount
     *
     * @return float|null
     */
    public function getRedeemedLoyaltyPointsCount()
    {
        return $this->container['redeemedLoyaltyPointsCount'];
    }

    /**
     * Sets redeemedLoyaltyPointsCount
     *
     * @param float|null $redeemedLoyaltyPointsCount This property is **deprecated**. The count should be available under *budgets* property. Total number of loyalty points redeemed by rules in this campaign.
     *
     * @return $this
     */
    public function setRedeemedLoyaltyPointsCount($redeemedLoyaltyPointsCount)
    {
        $this->container['redeemedLoyaltyPointsCount'] = $redeemedLoyaltyPointsCount;

        return $this;
    }

    /**
     * Gets redeemedLoyaltyPointsEffectCount
     *
     * @return int|null
     */
    public function getRedeemedLoyaltyPointsEffectCount()
    {
        return $this->container['redeemedLoyaltyPointsEffectCount'];
    }

    /**
     * Sets redeemedLoyaltyPointsEffectCount
     *
     * @param int|null $redeemedLoyaltyPointsEffectCount This property is **deprecated**. The count should be available under *budgets* property. Total number of loyalty point redemption effects triggered by rules in this campaign.
     *
     * @return $this
     */
    public function setRedeemedLoyaltyPointsEffectCount($redeemedLoyaltyPointsEffectCount)
    {
        $this->container['redeemedLoyaltyPointsEffectCount'] = $redeemedLoyaltyPointsEffectCount;

        return $this;
    }

    /**
     * Gets callApiEffectCount
     *
     * @return int|null
     */
    public function getCallApiEffectCount()
    {
        return $this->container['callApiEffectCount'];
    }

    /**
     * Sets callApiEffectCount
     *
     * @param int|null $callApiEffectCount This property is **deprecated**. The count should be available under *budgets* property. Total number of webhooks triggered by rules in this campaign.
     *
     * @return $this
     */
    public function setCallApiEffectCount($callApiEffectCount)
    {
        $this->container['callApiEffectCount'] = $callApiEffectCount;

        return $this;
    }

    /**
     * Gets reservecouponEffectCount
     *
     * @return int|null
     */
    public function getReservecouponEffectCount()
    {
        return $this->container['reservecouponEffectCount'];
    }

    /**
     * Sets reservecouponEffectCount
     *
     * @param int|null $reservecouponEffectCount This property is **deprecated**. The count should be available under *budgets* property. Total number of reserve coupon effects triggered by rules in this campaign.
     *
     * @return $this
     */
    public function setReservecouponEffectCount($reservecouponEffectCount)
    {
        $this->container['reservecouponEffectCount'] = $reservecouponEffectCount;

        return $this;
    }

    /**
     * Gets lastActivity
     *
     * @return \DateTime|null
     */
    public function getLastActivity()
    {
        return $this->container['lastActivity'];
    }

    /**
     * Sets lastActivity
     *
     * @param \DateTime|null $lastActivity Timestamp of the most recent event received by this campaign.
     *
     * @return $this
     */
    public function setLastActivity($lastActivity)
    {
        $this->container['lastActivity'] = $lastActivity;

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
     * @param \DateTime|null $updated Timestamp of the most recent update to the campaign's property. Updates to external entities used in this campaign are **not** registered by this property, such as collection or coupon updates.
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

        return $this;
    }

    /**
     * Gets createdBy
     *
     * @return string|null
     */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
     * Sets createdBy
     *
     * @param string|null $createdBy Name of the user who created this campaign if available.
     *
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;

        return $this;
    }

    /**
     * Gets updatedBy
     *
     * @return string|null
     */
    public function getUpdatedBy()
    {
        return $this->container['updatedBy'];
    }

    /**
     * Sets updatedBy
     *
     * @param string|null $updatedBy Name of the user who last updated this campaign if available.
     *
     * @return $this
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->container['updatedBy'] = $updatedBy;

        return $this;
    }

    /**
     * Gets templateId
     *
     * @return int|null
     */
    public function getTemplateId()
    {
        return $this->container['templateId'];
    }

    /**
     * Sets templateId
     *
     * @param int|null $templateId The ID of the Campaign Template this Campaign was created from.
     *
     * @return $this
     */
    public function setTemplateId($templateId)
    {
        $this->container['templateId'] = $templateId;

        return $this;
    }

    /**
     * Gets frontendState
     *
     * @return string
     */
    public function getFrontendState()
    {
        return $this->container['frontendState'];
    }

    /**
     * Sets frontendState
     *
     * @param string $frontendState A campaign state described exactly as in the Campaign Manager.
     *
     * @return $this
     */
    public function setFrontendState($frontendState)
    {
        $allowedValues = $this->getFrontendStateAllowableValues();
        if (!in_array($frontendState, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'frontendState', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frontendState'] = $frontendState;

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


