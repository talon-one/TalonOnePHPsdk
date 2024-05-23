<?php
/**
 * CustomerSessionV2
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
 * CustomerSessionV2 Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CustomerSessionV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CustomerSessionV2';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'created' => '\DateTime',
        'integrationId' => 'string',
        'applicationId' => 'int',
        'profileId' => 'string',
        'storeIntegrationId' => 'string',
        'evaluableCampaignIds' => 'int[]',
        'couponCodes' => 'string[]',
        'referralCode' => 'string',
        'loyaltyCards' => 'string[]',
        'state' => 'string',
        'cartItems' => '\TalonOne\Client\Model\CartItem[]',
        'additionalCosts' => 'map[string,\TalonOne\Client\Model\AdditionalCost]',
        'identifiers' => 'string[]',
        'attributes' => 'object',
        'firstSession' => 'bool',
        'total' => 'float',
        'cartItemTotal' => 'float',
        'additionalCostTotal' => 'float',
        'updated' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created' => 'date-time',
        'integrationId' => 'string',
        'applicationId' => null,
        'profileId' => null,
        'storeIntegrationId' => null,
        'evaluableCampaignIds' => null,
        'couponCodes' => null,
        'referralCode' => null,
        'loyaltyCards' => null,
        'state' => null,
        'cartItems' => null,
        'additionalCosts' => null,
        'identifiers' => null,
        'attributes' => null,
        'firstSession' => null,
        'total' => null,
        'cartItemTotal' => null,
        'additionalCostTotal' => null,
        'updated' => 'date-time'
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
        'integrationId' => 'integrationId',
        'applicationId' => 'applicationId',
        'profileId' => 'profileId',
        'storeIntegrationId' => 'storeIntegrationId',
        'evaluableCampaignIds' => 'evaluableCampaignIds',
        'couponCodes' => 'couponCodes',
        'referralCode' => 'referralCode',
        'loyaltyCards' => 'loyaltyCards',
        'state' => 'state',
        'cartItems' => 'cartItems',
        'additionalCosts' => 'additionalCosts',
        'identifiers' => 'identifiers',
        'attributes' => 'attributes',
        'firstSession' => 'firstSession',
        'total' => 'total',
        'cartItemTotal' => 'cartItemTotal',
        'additionalCostTotal' => 'additionalCostTotal',
        'updated' => 'updated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created' => 'setCreated',
        'integrationId' => 'setIntegrationId',
        'applicationId' => 'setApplicationId',
        'profileId' => 'setProfileId',
        'storeIntegrationId' => 'setStoreIntegrationId',
        'evaluableCampaignIds' => 'setEvaluableCampaignIds',
        'couponCodes' => 'setCouponCodes',
        'referralCode' => 'setReferralCode',
        'loyaltyCards' => 'setLoyaltyCards',
        'state' => 'setState',
        'cartItems' => 'setCartItems',
        'additionalCosts' => 'setAdditionalCosts',
        'identifiers' => 'setIdentifiers',
        'attributes' => 'setAttributes',
        'firstSession' => 'setFirstSession',
        'total' => 'setTotal',
        'cartItemTotal' => 'setCartItemTotal',
        'additionalCostTotal' => 'setAdditionalCostTotal',
        'updated' => 'setUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created' => 'getCreated',
        'integrationId' => 'getIntegrationId',
        'applicationId' => 'getApplicationId',
        'profileId' => 'getProfileId',
        'storeIntegrationId' => 'getStoreIntegrationId',
        'evaluableCampaignIds' => 'getEvaluableCampaignIds',
        'couponCodes' => 'getCouponCodes',
        'referralCode' => 'getReferralCode',
        'loyaltyCards' => 'getLoyaltyCards',
        'state' => 'getState',
        'cartItems' => 'getCartItems',
        'additionalCosts' => 'getAdditionalCosts',
        'identifiers' => 'getIdentifiers',
        'attributes' => 'getAttributes',
        'firstSession' => 'getFirstSession',
        'total' => 'getTotal',
        'cartItemTotal' => 'getCartItemTotal',
        'additionalCostTotal' => 'getAdditionalCostTotal',
        'updated' => 'getUpdated'
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

    const STATE_OPEN = 'open';
    const STATE_CLOSED = 'closed';
    const STATE_PARTIALLY_RETURNED = 'partially_returned';
    const STATE_CANCELLED = 'cancelled';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_OPEN,
            self::STATE_CLOSED,
            self::STATE_PARTIALLY_RETURNED,
            self::STATE_CANCELLED,
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
        $this->container['integrationId'] = isset($data['integrationId']) ? $data['integrationId'] : null;
        $this->container['applicationId'] = isset($data['applicationId']) ? $data['applicationId'] : null;
        $this->container['profileId'] = isset($data['profileId']) ? $data['profileId'] : null;
        $this->container['storeIntegrationId'] = isset($data['storeIntegrationId']) ? $data['storeIntegrationId'] : null;
        $this->container['evaluableCampaignIds'] = isset($data['evaluableCampaignIds']) ? $data['evaluableCampaignIds'] : null;
        $this->container['couponCodes'] = isset($data['couponCodes']) ? $data['couponCodes'] : null;
        $this->container['referralCode'] = isset($data['referralCode']) ? $data['referralCode'] : null;
        $this->container['loyaltyCards'] = isset($data['loyaltyCards']) ? $data['loyaltyCards'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : 'open';
        $this->container['cartItems'] = isset($data['cartItems']) ? $data['cartItems'] : null;
        $this->container['additionalCosts'] = isset($data['additionalCosts']) ? $data['additionalCosts'] : null;
        $this->container['identifiers'] = isset($data['identifiers']) ? $data['identifiers'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['firstSession'] = isset($data['firstSession']) ? $data['firstSession'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['cartItemTotal'] = isset($data['cartItemTotal']) ? $data['cartItemTotal'] : null;
        $this->container['additionalCostTotal'] = isset($data['additionalCostTotal']) ? $data['additionalCostTotal'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
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
        if ($this->container['integrationId'] === null) {
            $invalidProperties[] = "'integrationId' can't be null";
        }
        if ((mb_strlen($this->container['integrationId']) > 1000)) {
            $invalidProperties[] = "invalid value for 'integrationId', the character length must be smaller than or equal to 1000.";
        }

        if ($this->container['applicationId'] === null) {
            $invalidProperties[] = "'applicationId' can't be null";
        }
        if ($this->container['profileId'] === null) {
            $invalidProperties[] = "'profileId' can't be null";
        }
        if (!is_null($this->container['storeIntegrationId']) && (mb_strlen($this->container['storeIntegrationId']) > 1000)) {
            $invalidProperties[] = "invalid value for 'storeIntegrationId', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['storeIntegrationId']) && (mb_strlen($this->container['storeIntegrationId']) < 1)) {
            $invalidProperties[] = "invalid value for 'storeIntegrationId', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['referralCode']) && (mb_strlen($this->container['referralCode']) > 100)) {
            $invalidProperties[] = "invalid value for 'referralCode', the character length must be smaller than or equal to 100.";
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

        if ($this->container['cartItems'] === null) {
            $invalidProperties[] = "'cartItems' can't be null";
        }
        if ($this->container['attributes'] === null) {
            $invalidProperties[] = "'attributes' can't be null";
        }
        if ($this->container['firstSession'] === null) {
            $invalidProperties[] = "'firstSession' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['cartItemTotal'] === null) {
            $invalidProperties[] = "'cartItemTotal' can't be null";
        }
        if ($this->container['additionalCostTotal'] === null) {
            $invalidProperties[] = "'additionalCostTotal' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
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
     * @param int $id Internal ID of this entity.
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
     * @param \DateTime $created The time this entity was created. The time this entity was created.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets integrationId
     *
     * @return string
     */
    public function getIntegrationId()
    {
        return $this->container['integrationId'];
    }

    /**
     * Sets integrationId
     *
     * @param string $integrationId The integration ID set by your integration layer.
     *
     * @return $this
     */
    public function setIntegrationId($integrationId)
    {
        if ((mb_strlen($integrationId) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $integrationId when calling CustomerSessionV2., must be smaller than or equal to 1000.');
        }

        $this->container['integrationId'] = $integrationId;

        return $this;
    }

    /**
     * Gets applicationId
     *
     * @return int
     */
    public function getApplicationId()
    {
        return $this->container['applicationId'];
    }

    /**
     * Sets applicationId
     *
     * @param int $applicationId The ID of the application that owns this entity.
     *
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->container['applicationId'] = $applicationId;

        return $this;
    }

    /**
     * Gets profileId
     *
     * @return string
     */
    public function getProfileId()
    {
        return $this->container['profileId'];
    }

    /**
     * Sets profileId
     *
     * @param string $profileId ID of the customer profile set by your integration layer.  **Note:** If the customer does not yet have a known `profileId`, we recommend you use a guest `profileId`.
     *
     * @return $this
     */
    public function setProfileId($profileId)
    {
        $this->container['profileId'] = $profileId;

        return $this;
    }

    /**
     * Gets storeIntegrationId
     *
     * @return string|null
     */
    public function getStoreIntegrationId()
    {
        return $this->container['storeIntegrationId'];
    }

    /**
     * Sets storeIntegrationId
     *
     * @param string|null $storeIntegrationId The integration ID of the store. You choose this ID when you create a store.
     *
     * @return $this
     */
    public function setStoreIntegrationId($storeIntegrationId)
    {
        if (!is_null($storeIntegrationId) && (mb_strlen($storeIntegrationId) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $storeIntegrationId when calling CustomerSessionV2., must be smaller than or equal to 1000.');
        }
        if (!is_null($storeIntegrationId) && (mb_strlen($storeIntegrationId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $storeIntegrationId when calling CustomerSessionV2., must be bigger than or equal to 1.');
        }

        $this->container['storeIntegrationId'] = $storeIntegrationId;

        return $this;
    }

    /**
     * Gets evaluableCampaignIds
     *
     * @return int[]|null
     */
    public function getEvaluableCampaignIds()
    {
        return $this->container['evaluableCampaignIds'];
    }

    /**
     * Sets evaluableCampaignIds
     *
     * @param int[]|null $evaluableCampaignIds When using the `dry` query parameter, use this property to list the campaign to be evaluated by the Rule Engine.  These campaigns will be evaluated, even if they are disabled, allowing you to test specific campaigns before activating them.
     *
     * @return $this
     */
    public function setEvaluableCampaignIds($evaluableCampaignIds)
    {
        $this->container['evaluableCampaignIds'] = $evaluableCampaignIds;

        return $this;
    }

    /**
     * Gets couponCodes
     *
     * @return string[]|null
     */
    public function getCouponCodes()
    {
        return $this->container['couponCodes'];
    }

    /**
     * Sets couponCodes
     *
     * @param string[]|null $couponCodes Any coupon codes entered.  **Important**: If you [create a coupon budget](https://docs.talon.one/docs/product/campaigns/settings/managing-campaign-budgets/#budget-types) for your campaign, ensure the session contains a coupon code by the time you close it.
     *
     * @return $this
     */
    public function setCouponCodes($couponCodes)
    {
        $this->container['couponCodes'] = $couponCodes;

        return $this;
    }

    /**
     * Gets referralCode
     *
     * @return string|null
     */
    public function getReferralCode()
    {
        return $this->container['referralCode'];
    }

    /**
     * Sets referralCode
     *
     * @param string|null $referralCode Any referral code entered.  **Important**: If you [create a referral budget](https://docs.talon.one/docs/product/campaigns/settings/managing-campaign-budgets/#budget-types) for your campaign, ensure the session contains a referral code by the time you close it.
     *
     * @return $this
     */
    public function setReferralCode($referralCode)
    {
        if (!is_null($referralCode) && (mb_strlen($referralCode) > 100)) {
            throw new \InvalidArgumentException('invalid length for $referralCode when calling CustomerSessionV2., must be smaller than or equal to 100.');
        }

        $this->container['referralCode'] = $referralCode;

        return $this;
    }

    /**
     * Gets loyaltyCards
     *
     * @return string[]|null
     */
    public function getLoyaltyCards()
    {
        return $this->container['loyaltyCards'];
    }

    /**
     * Sets loyaltyCards
     *
     * @param string[]|null $loyaltyCards Identifier of a loyalty card.
     *
     * @return $this
     */
    public function setLoyaltyCards($loyaltyCards)
    {
        $this->container['loyaltyCards'] = $loyaltyCards;

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
     * @param string $state Indicates the current state of the session. Sessions can be created as `open` or `closed`. The state transitions are:  1. `open` → `closed` 2. `open` → `cancelled` 3. Either:    - `closed` → `cancelled` (**only** via [Update customer session](https://docs.talon.one/integration-api#tag/Customer-sessions/operation/updateCustomerSessionV2)) or    - `closed` → `partially_returned` (**only** via [Return cart items](https://docs.talon.one/integration-api#tag/Customer-sessions/operation/returnCartItems))    - `closed` → `open` (**only** via [Reopen customer session](https://docs.talon.one/integration-api#tag/Customer-sessions/operation/reopenCustomerSession)) 4. `partially_returned` → `cancelled`  For more information, see [Customer session states](https://docs.talon.one/docs/dev/concepts/entities/customer-sessions).
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
     * Gets cartItems
     *
     * @return \TalonOne\Client\Model\CartItem[]
     */
    public function getCartItems()
    {
        return $this->container['cartItems'];
    }

    /**
     * Sets cartItems
     *
     * @param \TalonOne\Client\Model\CartItem[] $cartItems The items to add to this session. **Do not exceed 1000 items** and ensure the sum of all cart item's `quantity` **does not exceed 10.000** per request.
     *
     * @return $this
     */
    public function setCartItems($cartItems)
    {
        $this->container['cartItems'] = $cartItems;

        return $this;
    }

    /**
     * Gets additionalCosts
     *
     * @return map[string,\TalonOne\Client\Model\AdditionalCost]|null
     */
    public function getAdditionalCosts()
    {
        return $this->container['additionalCosts'];
    }

    /**
     * Sets additionalCosts
     *
     * @param map[string,\TalonOne\Client\Model\AdditionalCost]|null $additionalCosts Use this property to set a value for the additional costs of this session, such as a shipping cost.  They must be created in the Campaign Manager before you set them with this property. See [Managing additional costs](https://docs.talon.one/docs/product/account/dev-tools/managing-additional-costs).
     *
     * @return $this
     */
    public function setAdditionalCosts($additionalCosts)
    {
        $this->container['additionalCosts'] = $additionalCosts;

        return $this;
    }

    /**
     * Gets identifiers
     *
     * @return string[]|null
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers
     *
     * @param string[]|null $identifiers Session custom identifiers that you can set limits on or use inside your rules.  For example, you can use IP addresses as identifiers to potentially identify devices and limit discounts abuse in case of customers creating multiple accounts. See the [tutorial](https://docs.talon.one/docs/dev/tutorials/using-identifiers).  **Important**: Ensure the session contains an identifier by the time you close it if: - You [create a unique identifier budget](https://docs.talon.one/docs/product/campaigns/settings/managing-campaign-budgets/#budget-types) for your campaign. - Your campaign has [coupons](https://docs.talon.one/docs/product/campaigns/coupons/coupon-page-overview).
     *
     * @return $this
     */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return object
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param object $attributes Use this property to set a value for the attributes of your choice. Attributes represent any information to attach to your session, like the shipping city.  You can use [built-in attributes](https://docs.talon.one/docs/dev/concepts/attributes#built-in-attributes) or [custom ones](https://docs.talon.one/docs/dev/concepts/attributes#custom-attributes). Custom attributes must be created in the Campaign Manager before you set them with this property.
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets firstSession
     *
     * @return bool
     */
    public function getFirstSession()
    {
        return $this->container['firstSession'];
    }

    /**
     * Sets firstSession
     *
     * @param bool $firstSession Indicates whether this is the first session for the customer's profile. Will always be true for anonymous sessions.
     *
     * @return $this
     */
    public function setFirstSession($firstSession)
    {
        $this->container['firstSession'] = $firstSession;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float $total The total value of cart items and additional costs in the session, before any discounts are applied.
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets cartItemTotal
     *
     * @return float
     */
    public function getCartItemTotal()
    {
        return $this->container['cartItemTotal'];
    }

    /**
     * Sets cartItemTotal
     *
     * @param float $cartItemTotal The total value of cart items, before any discounts are applied.
     *
     * @return $this
     */
    public function setCartItemTotal($cartItemTotal)
    {
        $this->container['cartItemTotal'] = $cartItemTotal;

        return $this;
    }

    /**
     * Gets additionalCostTotal
     *
     * @return float
     */
    public function getAdditionalCostTotal()
    {
        return $this->container['additionalCostTotal'];
    }

    /**
     * Sets additionalCostTotal
     *
     * @param float $additionalCostTotal The total value of additional costs, before any discounts are applied.
     *
     * @return $this
     */
    public function setAdditionalCostTotal($additionalCostTotal)
    {
        $this->container['additionalCostTotal'] = $additionalCostTotal;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param \DateTime $updated Timestamp of the most recent event received on this session.
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

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


