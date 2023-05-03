<?php
/**
 * CampaignAnalytics
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
 * CampaignAnalytics Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CampaignAnalytics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CampaignAnalytics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'date' => '\DateTime',
        'campaignRevenue' => 'float',
        'totalCampaignRevenue' => 'float',
        'campaignRefund' => 'float',
        'totalCampaignRefund' => 'float',
        'campaignDiscountCosts' => 'float',
        'totalCampaignDiscountCosts' => 'float',
        'campaignRefundedDiscounts' => 'float',
        'totalCampaignRefundedDiscounts' => 'float',
        'campaignFreeItems' => 'int',
        'totalCampaignFreeItems' => 'int',
        'couponRedemptions' => 'int',
        'totalCouponRedemptions' => 'int',
        'couponRolledbackRedemptions' => 'int',
        'totalCouponRolledbackRedemptions' => 'int',
        'referralRedemptions' => 'int',
        'totalReferralRedemptions' => 'int',
        'couponsCreated' => 'int',
        'totalCouponsCreated' => 'int',
        'referralsCreated' => 'int',
        'totalReferralsCreated' => 'int',
        'addedLoyaltyPoints' => 'float',
        'totalAddedLoyaltyPoints' => 'float',
        'deductedLoyaltyPoints' => 'float',
        'totalDeductedLoyaltyPoints' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'date' => 'date-time',
        'campaignRevenue' => null,
        'totalCampaignRevenue' => null,
        'campaignRefund' => null,
        'totalCampaignRefund' => null,
        'campaignDiscountCosts' => null,
        'totalCampaignDiscountCosts' => null,
        'campaignRefundedDiscounts' => null,
        'totalCampaignRefundedDiscounts' => null,
        'campaignFreeItems' => null,
        'totalCampaignFreeItems' => null,
        'couponRedemptions' => null,
        'totalCouponRedemptions' => null,
        'couponRolledbackRedemptions' => null,
        'totalCouponRolledbackRedemptions' => null,
        'referralRedemptions' => null,
        'totalReferralRedemptions' => null,
        'couponsCreated' => null,
        'totalCouponsCreated' => null,
        'referralsCreated' => null,
        'totalReferralsCreated' => null,
        'addedLoyaltyPoints' => null,
        'totalAddedLoyaltyPoints' => null,
        'deductedLoyaltyPoints' => null,
        'totalDeductedLoyaltyPoints' => null
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
        'date' => 'date',
        'campaignRevenue' => 'campaignRevenue',
        'totalCampaignRevenue' => 'totalCampaignRevenue',
        'campaignRefund' => 'campaignRefund',
        'totalCampaignRefund' => 'totalCampaignRefund',
        'campaignDiscountCosts' => 'campaignDiscountCosts',
        'totalCampaignDiscountCosts' => 'totalCampaignDiscountCosts',
        'campaignRefundedDiscounts' => 'campaignRefundedDiscounts',
        'totalCampaignRefundedDiscounts' => 'totalCampaignRefundedDiscounts',
        'campaignFreeItems' => 'campaignFreeItems',
        'totalCampaignFreeItems' => 'totalCampaignFreeItems',
        'couponRedemptions' => 'couponRedemptions',
        'totalCouponRedemptions' => 'totalCouponRedemptions',
        'couponRolledbackRedemptions' => 'couponRolledbackRedemptions',
        'totalCouponRolledbackRedemptions' => 'totalCouponRolledbackRedemptions',
        'referralRedemptions' => 'referralRedemptions',
        'totalReferralRedemptions' => 'totalReferralRedemptions',
        'couponsCreated' => 'couponsCreated',
        'totalCouponsCreated' => 'totalCouponsCreated',
        'referralsCreated' => 'referralsCreated',
        'totalReferralsCreated' => 'totalReferralsCreated',
        'addedLoyaltyPoints' => 'addedLoyaltyPoints',
        'totalAddedLoyaltyPoints' => 'totalAddedLoyaltyPoints',
        'deductedLoyaltyPoints' => 'deductedLoyaltyPoints',
        'totalDeductedLoyaltyPoints' => 'totalDeductedLoyaltyPoints'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date' => 'setDate',
        'campaignRevenue' => 'setCampaignRevenue',
        'totalCampaignRevenue' => 'setTotalCampaignRevenue',
        'campaignRefund' => 'setCampaignRefund',
        'totalCampaignRefund' => 'setTotalCampaignRefund',
        'campaignDiscountCosts' => 'setCampaignDiscountCosts',
        'totalCampaignDiscountCosts' => 'setTotalCampaignDiscountCosts',
        'campaignRefundedDiscounts' => 'setCampaignRefundedDiscounts',
        'totalCampaignRefundedDiscounts' => 'setTotalCampaignRefundedDiscounts',
        'campaignFreeItems' => 'setCampaignFreeItems',
        'totalCampaignFreeItems' => 'setTotalCampaignFreeItems',
        'couponRedemptions' => 'setCouponRedemptions',
        'totalCouponRedemptions' => 'setTotalCouponRedemptions',
        'couponRolledbackRedemptions' => 'setCouponRolledbackRedemptions',
        'totalCouponRolledbackRedemptions' => 'setTotalCouponRolledbackRedemptions',
        'referralRedemptions' => 'setReferralRedemptions',
        'totalReferralRedemptions' => 'setTotalReferralRedemptions',
        'couponsCreated' => 'setCouponsCreated',
        'totalCouponsCreated' => 'setTotalCouponsCreated',
        'referralsCreated' => 'setReferralsCreated',
        'totalReferralsCreated' => 'setTotalReferralsCreated',
        'addedLoyaltyPoints' => 'setAddedLoyaltyPoints',
        'totalAddedLoyaltyPoints' => 'setTotalAddedLoyaltyPoints',
        'deductedLoyaltyPoints' => 'setDeductedLoyaltyPoints',
        'totalDeductedLoyaltyPoints' => 'setTotalDeductedLoyaltyPoints'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date' => 'getDate',
        'campaignRevenue' => 'getCampaignRevenue',
        'totalCampaignRevenue' => 'getTotalCampaignRevenue',
        'campaignRefund' => 'getCampaignRefund',
        'totalCampaignRefund' => 'getTotalCampaignRefund',
        'campaignDiscountCosts' => 'getCampaignDiscountCosts',
        'totalCampaignDiscountCosts' => 'getTotalCampaignDiscountCosts',
        'campaignRefundedDiscounts' => 'getCampaignRefundedDiscounts',
        'totalCampaignRefundedDiscounts' => 'getTotalCampaignRefundedDiscounts',
        'campaignFreeItems' => 'getCampaignFreeItems',
        'totalCampaignFreeItems' => 'getTotalCampaignFreeItems',
        'couponRedemptions' => 'getCouponRedemptions',
        'totalCouponRedemptions' => 'getTotalCouponRedemptions',
        'couponRolledbackRedemptions' => 'getCouponRolledbackRedemptions',
        'totalCouponRolledbackRedemptions' => 'getTotalCouponRolledbackRedemptions',
        'referralRedemptions' => 'getReferralRedemptions',
        'totalReferralRedemptions' => 'getTotalReferralRedemptions',
        'couponsCreated' => 'getCouponsCreated',
        'totalCouponsCreated' => 'getTotalCouponsCreated',
        'referralsCreated' => 'getReferralsCreated',
        'totalReferralsCreated' => 'getTotalReferralsCreated',
        'addedLoyaltyPoints' => 'getAddedLoyaltyPoints',
        'totalAddedLoyaltyPoints' => 'getTotalAddedLoyaltyPoints',
        'deductedLoyaltyPoints' => 'getDeductedLoyaltyPoints',
        'totalDeductedLoyaltyPoints' => 'getTotalDeductedLoyaltyPoints'
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
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['campaignRevenue'] = isset($data['campaignRevenue']) ? $data['campaignRevenue'] : null;
        $this->container['totalCampaignRevenue'] = isset($data['totalCampaignRevenue']) ? $data['totalCampaignRevenue'] : null;
        $this->container['campaignRefund'] = isset($data['campaignRefund']) ? $data['campaignRefund'] : null;
        $this->container['totalCampaignRefund'] = isset($data['totalCampaignRefund']) ? $data['totalCampaignRefund'] : null;
        $this->container['campaignDiscountCosts'] = isset($data['campaignDiscountCosts']) ? $data['campaignDiscountCosts'] : null;
        $this->container['totalCampaignDiscountCosts'] = isset($data['totalCampaignDiscountCosts']) ? $data['totalCampaignDiscountCosts'] : null;
        $this->container['campaignRefundedDiscounts'] = isset($data['campaignRefundedDiscounts']) ? $data['campaignRefundedDiscounts'] : null;
        $this->container['totalCampaignRefundedDiscounts'] = isset($data['totalCampaignRefundedDiscounts']) ? $data['totalCampaignRefundedDiscounts'] : null;
        $this->container['campaignFreeItems'] = isset($data['campaignFreeItems']) ? $data['campaignFreeItems'] : null;
        $this->container['totalCampaignFreeItems'] = isset($data['totalCampaignFreeItems']) ? $data['totalCampaignFreeItems'] : null;
        $this->container['couponRedemptions'] = isset($data['couponRedemptions']) ? $data['couponRedemptions'] : null;
        $this->container['totalCouponRedemptions'] = isset($data['totalCouponRedemptions']) ? $data['totalCouponRedemptions'] : null;
        $this->container['couponRolledbackRedemptions'] = isset($data['couponRolledbackRedemptions']) ? $data['couponRolledbackRedemptions'] : null;
        $this->container['totalCouponRolledbackRedemptions'] = isset($data['totalCouponRolledbackRedemptions']) ? $data['totalCouponRolledbackRedemptions'] : null;
        $this->container['referralRedemptions'] = isset($data['referralRedemptions']) ? $data['referralRedemptions'] : null;
        $this->container['totalReferralRedemptions'] = isset($data['totalReferralRedemptions']) ? $data['totalReferralRedemptions'] : null;
        $this->container['couponsCreated'] = isset($data['couponsCreated']) ? $data['couponsCreated'] : null;
        $this->container['totalCouponsCreated'] = isset($data['totalCouponsCreated']) ? $data['totalCouponsCreated'] : null;
        $this->container['referralsCreated'] = isset($data['referralsCreated']) ? $data['referralsCreated'] : null;
        $this->container['totalReferralsCreated'] = isset($data['totalReferralsCreated']) ? $data['totalReferralsCreated'] : null;
        $this->container['addedLoyaltyPoints'] = isset($data['addedLoyaltyPoints']) ? $data['addedLoyaltyPoints'] : null;
        $this->container['totalAddedLoyaltyPoints'] = isset($data['totalAddedLoyaltyPoints']) ? $data['totalAddedLoyaltyPoints'] : null;
        $this->container['deductedLoyaltyPoints'] = isset($data['deductedLoyaltyPoints']) ? $data['deductedLoyaltyPoints'] : null;
        $this->container['totalDeductedLoyaltyPoints'] = isset($data['totalDeductedLoyaltyPoints']) ? $data['totalDeductedLoyaltyPoints'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['campaignRevenue'] === null) {
            $invalidProperties[] = "'campaignRevenue' can't be null";
        }
        if ($this->container['totalCampaignRevenue'] === null) {
            $invalidProperties[] = "'totalCampaignRevenue' can't be null";
        }
        if ($this->container['campaignRefund'] === null) {
            $invalidProperties[] = "'campaignRefund' can't be null";
        }
        if ($this->container['totalCampaignRefund'] === null) {
            $invalidProperties[] = "'totalCampaignRefund' can't be null";
        }
        if ($this->container['campaignDiscountCosts'] === null) {
            $invalidProperties[] = "'campaignDiscountCosts' can't be null";
        }
        if ($this->container['totalCampaignDiscountCosts'] === null) {
            $invalidProperties[] = "'totalCampaignDiscountCosts' can't be null";
        }
        if ($this->container['campaignRefundedDiscounts'] === null) {
            $invalidProperties[] = "'campaignRefundedDiscounts' can't be null";
        }
        if ($this->container['totalCampaignRefundedDiscounts'] === null) {
            $invalidProperties[] = "'totalCampaignRefundedDiscounts' can't be null";
        }
        if ($this->container['campaignFreeItems'] === null) {
            $invalidProperties[] = "'campaignFreeItems' can't be null";
        }
        if ($this->container['totalCampaignFreeItems'] === null) {
            $invalidProperties[] = "'totalCampaignFreeItems' can't be null";
        }
        if ($this->container['couponRedemptions'] === null) {
            $invalidProperties[] = "'couponRedemptions' can't be null";
        }
        if ($this->container['totalCouponRedemptions'] === null) {
            $invalidProperties[] = "'totalCouponRedemptions' can't be null";
        }
        if ($this->container['couponRolledbackRedemptions'] === null) {
            $invalidProperties[] = "'couponRolledbackRedemptions' can't be null";
        }
        if ($this->container['totalCouponRolledbackRedemptions'] === null) {
            $invalidProperties[] = "'totalCouponRolledbackRedemptions' can't be null";
        }
        if ($this->container['referralRedemptions'] === null) {
            $invalidProperties[] = "'referralRedemptions' can't be null";
        }
        if ($this->container['totalReferralRedemptions'] === null) {
            $invalidProperties[] = "'totalReferralRedemptions' can't be null";
        }
        if ($this->container['couponsCreated'] === null) {
            $invalidProperties[] = "'couponsCreated' can't be null";
        }
        if ($this->container['totalCouponsCreated'] === null) {
            $invalidProperties[] = "'totalCouponsCreated' can't be null";
        }
        if ($this->container['referralsCreated'] === null) {
            $invalidProperties[] = "'referralsCreated' can't be null";
        }
        if ($this->container['totalReferralsCreated'] === null) {
            $invalidProperties[] = "'totalReferralsCreated' can't be null";
        }
        if ($this->container['addedLoyaltyPoints'] === null) {
            $invalidProperties[] = "'addedLoyaltyPoints' can't be null";
        }
        if ($this->container['totalAddedLoyaltyPoints'] === null) {
            $invalidProperties[] = "'totalAddedLoyaltyPoints' can't be null";
        }
        if ($this->container['deductedLoyaltyPoints'] === null) {
            $invalidProperties[] = "'deductedLoyaltyPoints' can't be null";
        }
        if ($this->container['totalDeductedLoyaltyPoints'] === null) {
            $invalidProperties[] = "'totalDeductedLoyaltyPoints' can't be null";
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
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets campaignRevenue
     *
     * @return float
     */
    public function getCampaignRevenue()
    {
        return $this->container['campaignRevenue'];
    }

    /**
     * Sets campaignRevenue
     *
     * @param float $campaignRevenue Amount of revenue in this campaign (for coupon or discount sessions).
     *
     * @return $this
     */
    public function setCampaignRevenue($campaignRevenue)
    {
        $this->container['campaignRevenue'] = $campaignRevenue;

        return $this;
    }

    /**
     * Gets totalCampaignRevenue
     *
     * @return float
     */
    public function getTotalCampaignRevenue()
    {
        return $this->container['totalCampaignRevenue'];
    }

    /**
     * Sets totalCampaignRevenue
     *
     * @param float $totalCampaignRevenue Amount of revenue in this campaign since it began (for coupon or discount sessions).
     *
     * @return $this
     */
    public function setTotalCampaignRevenue($totalCampaignRevenue)
    {
        $this->container['totalCampaignRevenue'] = $totalCampaignRevenue;

        return $this;
    }

    /**
     * Gets campaignRefund
     *
     * @return float
     */
    public function getCampaignRefund()
    {
        return $this->container['campaignRefund'];
    }

    /**
     * Sets campaignRefund
     *
     * @param float $campaignRefund Amount of refunds in this campaign (for coupon or discount sessions).
     *
     * @return $this
     */
    public function setCampaignRefund($campaignRefund)
    {
        $this->container['campaignRefund'] = $campaignRefund;

        return $this;
    }

    /**
     * Gets totalCampaignRefund
     *
     * @return float
     */
    public function getTotalCampaignRefund()
    {
        return $this->container['totalCampaignRefund'];
    }

    /**
     * Sets totalCampaignRefund
     *
     * @param float $totalCampaignRefund Amount of refunds in this campaign since it began (for coupon or discount sessions).
     *
     * @return $this
     */
    public function setTotalCampaignRefund($totalCampaignRefund)
    {
        $this->container['totalCampaignRefund'] = $totalCampaignRefund;

        return $this;
    }

    /**
     * Gets campaignDiscountCosts
     *
     * @return float
     */
    public function getCampaignDiscountCosts()
    {
        return $this->container['campaignDiscountCosts'];
    }

    /**
     * Sets campaignDiscountCosts
     *
     * @param float $campaignDiscountCosts Amount of cost caused by discounts given in the campaign.
     *
     * @return $this
     */
    public function setCampaignDiscountCosts($campaignDiscountCosts)
    {
        $this->container['campaignDiscountCosts'] = $campaignDiscountCosts;

        return $this;
    }

    /**
     * Gets totalCampaignDiscountCosts
     *
     * @return float
     */
    public function getTotalCampaignDiscountCosts()
    {
        return $this->container['totalCampaignDiscountCosts'];
    }

    /**
     * Sets totalCampaignDiscountCosts
     *
     * @param float $totalCampaignDiscountCosts Amount of cost caused by discounts given in the campaign since it began.
     *
     * @return $this
     */
    public function setTotalCampaignDiscountCosts($totalCampaignDiscountCosts)
    {
        $this->container['totalCampaignDiscountCosts'] = $totalCampaignDiscountCosts;

        return $this;
    }

    /**
     * Gets campaignRefundedDiscounts
     *
     * @return float
     */
    public function getCampaignRefundedDiscounts()
    {
        return $this->container['campaignRefundedDiscounts'];
    }

    /**
     * Sets campaignRefundedDiscounts
     *
     * @param float $campaignRefundedDiscounts Amount of discounts rolledback due to refund in the campaign.
     *
     * @return $this
     */
    public function setCampaignRefundedDiscounts($campaignRefundedDiscounts)
    {
        $this->container['campaignRefundedDiscounts'] = $campaignRefundedDiscounts;

        return $this;
    }

    /**
     * Gets totalCampaignRefundedDiscounts
     *
     * @return float
     */
    public function getTotalCampaignRefundedDiscounts()
    {
        return $this->container['totalCampaignRefundedDiscounts'];
    }

    /**
     * Sets totalCampaignRefundedDiscounts
     *
     * @param float $totalCampaignRefundedDiscounts Amount of discounts rolledback due to refund in the campaign since it began.
     *
     * @return $this
     */
    public function setTotalCampaignRefundedDiscounts($totalCampaignRefundedDiscounts)
    {
        $this->container['totalCampaignRefundedDiscounts'] = $totalCampaignRefundedDiscounts;

        return $this;
    }

    /**
     * Gets campaignFreeItems
     *
     * @return int
     */
    public function getCampaignFreeItems()
    {
        return $this->container['campaignFreeItems'];
    }

    /**
     * Sets campaignFreeItems
     *
     * @param int $campaignFreeItems Amount of free items given in the campaign.
     *
     * @return $this
     */
    public function setCampaignFreeItems($campaignFreeItems)
    {
        $this->container['campaignFreeItems'] = $campaignFreeItems;

        return $this;
    }

    /**
     * Gets totalCampaignFreeItems
     *
     * @return int
     */
    public function getTotalCampaignFreeItems()
    {
        return $this->container['totalCampaignFreeItems'];
    }

    /**
     * Sets totalCampaignFreeItems
     *
     * @param int $totalCampaignFreeItems Amount of free items given in the campaign since it began.
     *
     * @return $this
     */
    public function setTotalCampaignFreeItems($totalCampaignFreeItems)
    {
        $this->container['totalCampaignFreeItems'] = $totalCampaignFreeItems;

        return $this;
    }

    /**
     * Gets couponRedemptions
     *
     * @return int
     */
    public function getCouponRedemptions()
    {
        return $this->container['couponRedemptions'];
    }

    /**
     * Sets couponRedemptions
     *
     * @param int $couponRedemptions Number of coupon redemptions in the campaign.
     *
     * @return $this
     */
    public function setCouponRedemptions($couponRedemptions)
    {
        $this->container['couponRedemptions'] = $couponRedemptions;

        return $this;
    }

    /**
     * Gets totalCouponRedemptions
     *
     * @return int
     */
    public function getTotalCouponRedemptions()
    {
        return $this->container['totalCouponRedemptions'];
    }

    /**
     * Sets totalCouponRedemptions
     *
     * @param int $totalCouponRedemptions Number of coupon redemptions in the campaign since it began.
     *
     * @return $this
     */
    public function setTotalCouponRedemptions($totalCouponRedemptions)
    {
        $this->container['totalCouponRedemptions'] = $totalCouponRedemptions;

        return $this;
    }

    /**
     * Gets couponRolledbackRedemptions
     *
     * @return int
     */
    public function getCouponRolledbackRedemptions()
    {
        return $this->container['couponRolledbackRedemptions'];
    }

    /**
     * Sets couponRolledbackRedemptions
     *
     * @param int $couponRolledbackRedemptions Number of coupon redemptions that have been rolled back (due to canceling closed session) in the campaign.
     *
     * @return $this
     */
    public function setCouponRolledbackRedemptions($couponRolledbackRedemptions)
    {
        $this->container['couponRolledbackRedemptions'] = $couponRolledbackRedemptions;

        return $this;
    }

    /**
     * Gets totalCouponRolledbackRedemptions
     *
     * @return int
     */
    public function getTotalCouponRolledbackRedemptions()
    {
        return $this->container['totalCouponRolledbackRedemptions'];
    }

    /**
     * Sets totalCouponRolledbackRedemptions
     *
     * @param int $totalCouponRolledbackRedemptions Number of coupon redemptions that have been rolled back (due to canceling closed session) in the campaign since it began.
     *
     * @return $this
     */
    public function setTotalCouponRolledbackRedemptions($totalCouponRolledbackRedemptions)
    {
        $this->container['totalCouponRolledbackRedemptions'] = $totalCouponRolledbackRedemptions;

        return $this;
    }

    /**
     * Gets referralRedemptions
     *
     * @return int
     */
    public function getReferralRedemptions()
    {
        return $this->container['referralRedemptions'];
    }

    /**
     * Sets referralRedemptions
     *
     * @param int $referralRedemptions Number of referral redemptions in the campaign.
     *
     * @return $this
     */
    public function setReferralRedemptions($referralRedemptions)
    {
        $this->container['referralRedemptions'] = $referralRedemptions;

        return $this;
    }

    /**
     * Gets totalReferralRedemptions
     *
     * @return int
     */
    public function getTotalReferralRedemptions()
    {
        return $this->container['totalReferralRedemptions'];
    }

    /**
     * Sets totalReferralRedemptions
     *
     * @param int $totalReferralRedemptions Number of referral redemptions in the campaign since it began.
     *
     * @return $this
     */
    public function setTotalReferralRedemptions($totalReferralRedemptions)
    {
        $this->container['totalReferralRedemptions'] = $totalReferralRedemptions;

        return $this;
    }

    /**
     * Gets couponsCreated
     *
     * @return int
     */
    public function getCouponsCreated()
    {
        return $this->container['couponsCreated'];
    }

    /**
     * Sets couponsCreated
     *
     * @param int $couponsCreated Number of coupons created in the campaign by the rule engine.
     *
     * @return $this
     */
    public function setCouponsCreated($couponsCreated)
    {
        $this->container['couponsCreated'] = $couponsCreated;

        return $this;
    }

    /**
     * Gets totalCouponsCreated
     *
     * @return int
     */
    public function getTotalCouponsCreated()
    {
        return $this->container['totalCouponsCreated'];
    }

    /**
     * Sets totalCouponsCreated
     *
     * @param int $totalCouponsCreated Number of coupons created in the campaign by the rule engine since it began.
     *
     * @return $this
     */
    public function setTotalCouponsCreated($totalCouponsCreated)
    {
        $this->container['totalCouponsCreated'] = $totalCouponsCreated;

        return $this;
    }

    /**
     * Gets referralsCreated
     *
     * @return int
     */
    public function getReferralsCreated()
    {
        return $this->container['referralsCreated'];
    }

    /**
     * Sets referralsCreated
     *
     * @param int $referralsCreated Number of referrals created in the campaign by the rule engine.
     *
     * @return $this
     */
    public function setReferralsCreated($referralsCreated)
    {
        $this->container['referralsCreated'] = $referralsCreated;

        return $this;
    }

    /**
     * Gets totalReferralsCreated
     *
     * @return int
     */
    public function getTotalReferralsCreated()
    {
        return $this->container['totalReferralsCreated'];
    }

    /**
     * Sets totalReferralsCreated
     *
     * @param int $totalReferralsCreated Number of referrals created in the campaign by the rule engine since it began.
     *
     * @return $this
     */
    public function setTotalReferralsCreated($totalReferralsCreated)
    {
        $this->container['totalReferralsCreated'] = $totalReferralsCreated;

        return $this;
    }

    /**
     * Gets addedLoyaltyPoints
     *
     * @return float
     */
    public function getAddedLoyaltyPoints()
    {
        return $this->container['addedLoyaltyPoints'];
    }

    /**
     * Sets addedLoyaltyPoints
     *
     * @param float $addedLoyaltyPoints Number of added loyalty points in the campaign in a specific interval.
     *
     * @return $this
     */
    public function setAddedLoyaltyPoints($addedLoyaltyPoints)
    {
        $this->container['addedLoyaltyPoints'] = $addedLoyaltyPoints;

        return $this;
    }

    /**
     * Gets totalAddedLoyaltyPoints
     *
     * @return float
     */
    public function getTotalAddedLoyaltyPoints()
    {
        return $this->container['totalAddedLoyaltyPoints'];
    }

    /**
     * Sets totalAddedLoyaltyPoints
     *
     * @param float $totalAddedLoyaltyPoints Number of added loyalty points in the campaign since it began.
     *
     * @return $this
     */
    public function setTotalAddedLoyaltyPoints($totalAddedLoyaltyPoints)
    {
        $this->container['totalAddedLoyaltyPoints'] = $totalAddedLoyaltyPoints;

        return $this;
    }

    /**
     * Gets deductedLoyaltyPoints
     *
     * @return float
     */
    public function getDeductedLoyaltyPoints()
    {
        return $this->container['deductedLoyaltyPoints'];
    }

    /**
     * Sets deductedLoyaltyPoints
     *
     * @param float $deductedLoyaltyPoints Number of deducted loyalty points in the campaign in a specific interval.
     *
     * @return $this
     */
    public function setDeductedLoyaltyPoints($deductedLoyaltyPoints)
    {
        $this->container['deductedLoyaltyPoints'] = $deductedLoyaltyPoints;

        return $this;
    }

    /**
     * Gets totalDeductedLoyaltyPoints
     *
     * @return float
     */
    public function getTotalDeductedLoyaltyPoints()
    {
        return $this->container['totalDeductedLoyaltyPoints'];
    }

    /**
     * Sets totalDeductedLoyaltyPoints
     *
     * @param float $totalDeductedLoyaltyPoints Number of deducted loyalty points in the campaign since it began.
     *
     * @return $this
     */
    public function setTotalDeductedLoyaltyPoints($totalDeductedLoyaltyPoints)
    {
        $this->container['totalDeductedLoyaltyPoints'] = $totalDeductedLoyaltyPoints;

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


