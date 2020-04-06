<?php
/**
 * AccountAnalytics
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
 * OpenAPI Generator version: 4.2.3
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
 * AccountAnalytics Class Doc Comment
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class AccountAnalytics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'AccountAnalytics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'applications' => 'int',
        'activeCampaigns' => 'int',
        'campaigns' => 'int',
        'coupons' => 'int',
        'activeCoupons' => 'int',
        'expiredCoupons' => 'int',
        'customAttributes' => 'int',
        'referralCodes' => 'int',
        'activeReferralCodes' => 'int',
        'expiredReferralCodes' => 'int',
        'users' => 'int',
        'roles' => 'int',
        'webhooks' => 'int',
        'loyaltyPrograms' => 'int',
        'activeRules' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'applications' => null,
        'activeCampaigns' => null,
        'campaigns' => null,
        'coupons' => null,
        'activeCoupons' => null,
        'expiredCoupons' => null,
        'customAttributes' => null,
        'referralCodes' => null,
        'activeReferralCodes' => null,
        'expiredReferralCodes' => null,
        'users' => null,
        'roles' => null,
        'webhooks' => null,
        'loyaltyPrograms' => null,
        'activeRules' => null
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
        'applications' => 'applications',
        'activeCampaigns' => 'activeCampaigns',
        'campaigns' => 'campaigns',
        'coupons' => 'coupons',
        'activeCoupons' => 'activeCoupons',
        'expiredCoupons' => 'expiredCoupons',
        'customAttributes' => 'customAttributes',
        'referralCodes' => 'referralCodes',
        'activeReferralCodes' => 'activeReferralCodes',
        'expiredReferralCodes' => 'expiredReferralCodes',
        'users' => 'users',
        'roles' => 'roles',
        'webhooks' => 'webhooks',
        'loyaltyPrograms' => 'loyaltyPrograms',
        'activeRules' => 'activeRules'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'applications' => 'setApplications',
        'activeCampaigns' => 'setActiveCampaigns',
        'campaigns' => 'setCampaigns',
        'coupons' => 'setCoupons',
        'activeCoupons' => 'setActiveCoupons',
        'expiredCoupons' => 'setExpiredCoupons',
        'customAttributes' => 'setCustomAttributes',
        'referralCodes' => 'setReferralCodes',
        'activeReferralCodes' => 'setActiveReferralCodes',
        'expiredReferralCodes' => 'setExpiredReferralCodes',
        'users' => 'setUsers',
        'roles' => 'setRoles',
        'webhooks' => 'setWebhooks',
        'loyaltyPrograms' => 'setLoyaltyPrograms',
        'activeRules' => 'setActiveRules'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'applications' => 'getApplications',
        'activeCampaigns' => 'getActiveCampaigns',
        'campaigns' => 'getCampaigns',
        'coupons' => 'getCoupons',
        'activeCoupons' => 'getActiveCoupons',
        'expiredCoupons' => 'getExpiredCoupons',
        'customAttributes' => 'getCustomAttributes',
        'referralCodes' => 'getReferralCodes',
        'activeReferralCodes' => 'getActiveReferralCodes',
        'expiredReferralCodes' => 'getExpiredReferralCodes',
        'users' => 'getUsers',
        'roles' => 'getRoles',
        'webhooks' => 'getWebhooks',
        'loyaltyPrograms' => 'getLoyaltyPrograms',
        'activeRules' => 'getActiveRules'
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
        $this->container['applications'] = isset($data['applications']) ? $data['applications'] : null;
        $this->container['activeCampaigns'] = isset($data['activeCampaigns']) ? $data['activeCampaigns'] : null;
        $this->container['campaigns'] = isset($data['campaigns']) ? $data['campaigns'] : null;
        $this->container['coupons'] = isset($data['coupons']) ? $data['coupons'] : null;
        $this->container['activeCoupons'] = isset($data['activeCoupons']) ? $data['activeCoupons'] : null;
        $this->container['expiredCoupons'] = isset($data['expiredCoupons']) ? $data['expiredCoupons'] : null;
        $this->container['customAttributes'] = isset($data['customAttributes']) ? $data['customAttributes'] : null;
        $this->container['referralCodes'] = isset($data['referralCodes']) ? $data['referralCodes'] : null;
        $this->container['activeReferralCodes'] = isset($data['activeReferralCodes']) ? $data['activeReferralCodes'] : null;
        $this->container['expiredReferralCodes'] = isset($data['expiredReferralCodes']) ? $data['expiredReferralCodes'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['roles'] = isset($data['roles']) ? $data['roles'] : null;
        $this->container['webhooks'] = isset($data['webhooks']) ? $data['webhooks'] : null;
        $this->container['loyaltyPrograms'] = isset($data['loyaltyPrograms']) ? $data['loyaltyPrograms'] : null;
        $this->container['activeRules'] = isset($data['activeRules']) ? $data['activeRules'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['applications'] === null) {
            $invalidProperties[] = "'applications' can't be null";
        }
        if ($this->container['activeCampaigns'] === null) {
            $invalidProperties[] = "'activeCampaigns' can't be null";
        }
        if ($this->container['campaigns'] === null) {
            $invalidProperties[] = "'campaigns' can't be null";
        }
        if ($this->container['coupons'] === null) {
            $invalidProperties[] = "'coupons' can't be null";
        }
        if ($this->container['activeCoupons'] === null) {
            $invalidProperties[] = "'activeCoupons' can't be null";
        }
        if ($this->container['expiredCoupons'] === null) {
            $invalidProperties[] = "'expiredCoupons' can't be null";
        }
        if ($this->container['customAttributes'] === null) {
            $invalidProperties[] = "'customAttributes' can't be null";
        }
        if ($this->container['referralCodes'] === null) {
            $invalidProperties[] = "'referralCodes' can't be null";
        }
        if ($this->container['activeReferralCodes'] === null) {
            $invalidProperties[] = "'activeReferralCodes' can't be null";
        }
        if ($this->container['expiredReferralCodes'] === null) {
            $invalidProperties[] = "'expiredReferralCodes' can't be null";
        }
        if ($this->container['users'] === null) {
            $invalidProperties[] = "'users' can't be null";
        }
        if ($this->container['roles'] === null) {
            $invalidProperties[] = "'roles' can't be null";
        }
        if ($this->container['webhooks'] === null) {
            $invalidProperties[] = "'webhooks' can't be null";
        }
        if ($this->container['loyaltyPrograms'] === null) {
            $invalidProperties[] = "'loyaltyPrograms' can't be null";
        }
        if ($this->container['activeRules'] === null) {
            $invalidProperties[] = "'activeRules' can't be null";
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
     * Gets applications
     *
     * @return int
     */
    public function getApplications()
    {
        return $this->container['applications'];
    }

    /**
     * Sets applications
     *
     * @param int $applications Total Number of Applications inside the account
     *
     * @return $this
     */
    public function setApplications($applications)
    {
        $this->container['applications'] = $applications;

        return $this;
    }

    /**
     * Gets activeCampaigns
     *
     * @return int
     */
    public function getActiveCampaigns()
    {
        return $this->container['activeCampaigns'];
    }

    /**
     * Sets activeCampaigns
     *
     * @param int $activeCampaigns Total Number of Active Applications inside the account
     *
     * @return $this
     */
    public function setActiveCampaigns($activeCampaigns)
    {
        $this->container['activeCampaigns'] = $activeCampaigns;

        return $this;
    }

    /**
     * Gets campaigns
     *
     * @return int
     */
    public function getCampaigns()
    {
        return $this->container['campaigns'];
    }

    /**
     * Sets campaigns
     *
     * @param int $campaigns Total Number of campaigns inside the account
     *
     * @return $this
     */
    public function setCampaigns($campaigns)
    {
        $this->container['campaigns'] = $campaigns;

        return $this;
    }

    /**
     * Gets coupons
     *
     * @return int
     */
    public function getCoupons()
    {
        return $this->container['coupons'];
    }

    /**
     * Sets coupons
     *
     * @param int $coupons Total Number of coupons inside the account
     *
     * @return $this
     */
    public function setCoupons($coupons)
    {
        $this->container['coupons'] = $coupons;

        return $this;
    }

    /**
     * Gets activeCoupons
     *
     * @return int
     */
    public function getActiveCoupons()
    {
        return $this->container['activeCoupons'];
    }

    /**
     * Sets activeCoupons
     *
     * @param int $activeCoupons Total Number of active coupons inside the account
     *
     * @return $this
     */
    public function setActiveCoupons($activeCoupons)
    {
        $this->container['activeCoupons'] = $activeCoupons;

        return $this;
    }

    /**
     * Gets expiredCoupons
     *
     * @return int
     */
    public function getExpiredCoupons()
    {
        return $this->container['expiredCoupons'];
    }

    /**
     * Sets expiredCoupons
     *
     * @param int $expiredCoupons Total Number of expired coupons inside the account
     *
     * @return $this
     */
    public function setExpiredCoupons($expiredCoupons)
    {
        $this->container['expiredCoupons'] = $expiredCoupons;

        return $this;
    }

    /**
     * Gets customAttributes
     *
     * @return int
     */
    public function getCustomAttributes()
    {
        return $this->container['customAttributes'];
    }

    /**
     * Sets customAttributes
     *
     * @param int $customAttributes Total Number of custom attributes inside the account
     *
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->container['customAttributes'] = $customAttributes;

        return $this;
    }

    /**
     * Gets referralCodes
     *
     * @return int
     */
    public function getReferralCodes()
    {
        return $this->container['referralCodes'];
    }

    /**
     * Sets referralCodes
     *
     * @param int $referralCodes Total Number of referral codes inside the account
     *
     * @return $this
     */
    public function setReferralCodes($referralCodes)
    {
        $this->container['referralCodes'] = $referralCodes;

        return $this;
    }

    /**
     * Gets activeReferralCodes
     *
     * @return int
     */
    public function getActiveReferralCodes()
    {
        return $this->container['activeReferralCodes'];
    }

    /**
     * Sets activeReferralCodes
     *
     * @param int $activeReferralCodes Total Number of active referral codes inside the account
     *
     * @return $this
     */
    public function setActiveReferralCodes($activeReferralCodes)
    {
        $this->container['activeReferralCodes'] = $activeReferralCodes;

        return $this;
    }

    /**
     * Gets expiredReferralCodes
     *
     * @return int
     */
    public function getExpiredReferralCodes()
    {
        return $this->container['expiredReferralCodes'];
    }

    /**
     * Sets expiredReferralCodes
     *
     * @param int $expiredReferralCodes Total Number of expired referral codes inside the account
     *
     * @return $this
     */
    public function setExpiredReferralCodes($expiredReferralCodes)
    {
        $this->container['expiredReferralCodes'] = $expiredReferralCodes;

        return $this;
    }

    /**
     * Gets users
     *
     * @return int
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     *
     * @param int $users Total Number of users inside the account
     *
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return int
     */
    public function getRoles()
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param int $roles Total Number of roles inside the account
     *
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets webhooks
     *
     * @return int
     */
    public function getWebhooks()
    {
        return $this->container['webhooks'];
    }

    /**
     * Sets webhooks
     *
     * @param int $webhooks Total Number of webhooks inside the account
     *
     * @return $this
     */
    public function setWebhooks($webhooks)
    {
        $this->container['webhooks'] = $webhooks;

        return $this;
    }

    /**
     * Gets loyaltyPrograms
     *
     * @return int
     */
    public function getLoyaltyPrograms()
    {
        return $this->container['loyaltyPrograms'];
    }

    /**
     * Sets loyaltyPrograms
     *
     * @param int $loyaltyPrograms Total Number of loyalty programs inside the account
     *
     * @return $this
     */
    public function setLoyaltyPrograms($loyaltyPrograms)
    {
        $this->container['loyaltyPrograms'] = $loyaltyPrograms;

        return $this;
    }

    /**
     * Gets activeRules
     *
     * @return int
     */
    public function getActiveRules()
    {
        return $this->container['activeRules'];
    }

    /**
     * Sets activeRules
     *
     * @param int $activeRules Total Number of active rules in the account
     *
     * @return $this
     */
    public function setActiveRules($activeRules)
    {
        $this->container['activeRules'] = $activeRules;

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


