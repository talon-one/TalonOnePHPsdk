<?php
/**
 * LoyaltyProgram
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
 * LoyaltyProgram Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LoyaltyProgram implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoyaltyProgram';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'created' => '\DateTime',
        'title' => 'string',
        'description' => 'string',
        'subscribedApplications' => 'int[]',
        'defaultValidity' => 'string',
        'defaultPending' => 'string',
        'allowSubledger' => 'bool',
        'usersPerCardLimit' => 'int',
        'sandbox' => 'bool',
        'accountID' => 'int',
        'name' => 'string',
        'tiers' => '\TalonOne\Client\Model\LoyaltyTier[]',
        'timezone' => 'string',
        'cardBased' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'created' => 'date-time',
        'title' => null,
        'description' => null,
        'subscribedApplications' => null,
        'defaultValidity' => null,
        'defaultPending' => null,
        'allowSubledger' => null,
        'usersPerCardLimit' => null,
        'sandbox' => null,
        'accountID' => null,
        'name' => null,
        'tiers' => null,
        'timezone' => null,
        'cardBased' => null
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
        'title' => 'title',
        'description' => 'description',
        'subscribedApplications' => 'subscribedApplications',
        'defaultValidity' => 'defaultValidity',
        'defaultPending' => 'defaultPending',
        'allowSubledger' => 'allowSubledger',
        'usersPerCardLimit' => 'usersPerCardLimit',
        'sandbox' => 'sandbox',
        'accountID' => 'accountID',
        'name' => 'name',
        'tiers' => 'tiers',
        'timezone' => 'timezone',
        'cardBased' => 'cardBased'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'created' => 'setCreated',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'subscribedApplications' => 'setSubscribedApplications',
        'defaultValidity' => 'setDefaultValidity',
        'defaultPending' => 'setDefaultPending',
        'allowSubledger' => 'setAllowSubledger',
        'usersPerCardLimit' => 'setUsersPerCardLimit',
        'sandbox' => 'setSandbox',
        'accountID' => 'setAccountID',
        'name' => 'setName',
        'tiers' => 'setTiers',
        'timezone' => 'setTimezone',
        'cardBased' => 'setCardBased'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'created' => 'getCreated',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'subscribedApplications' => 'getSubscribedApplications',
        'defaultValidity' => 'getDefaultValidity',
        'defaultPending' => 'getDefaultPending',
        'allowSubledger' => 'getAllowSubledger',
        'usersPerCardLimit' => 'getUsersPerCardLimit',
        'sandbox' => 'getSandbox',
        'accountID' => 'getAccountID',
        'name' => 'getName',
        'tiers' => 'getTiers',
        'timezone' => 'getTimezone',
        'cardBased' => 'getCardBased'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['subscribedApplications'] = isset($data['subscribedApplications']) ? $data['subscribedApplications'] : null;
        $this->container['defaultValidity'] = isset($data['defaultValidity']) ? $data['defaultValidity'] : null;
        $this->container['defaultPending'] = isset($data['defaultPending']) ? $data['defaultPending'] : null;
        $this->container['allowSubledger'] = isset($data['allowSubledger']) ? $data['allowSubledger'] : null;
        $this->container['usersPerCardLimit'] = isset($data['usersPerCardLimit']) ? $data['usersPerCardLimit'] : null;
        $this->container['sandbox'] = isset($data['sandbox']) ? $data['sandbox'] : null;
        $this->container['accountID'] = isset($data['accountID']) ? $data['accountID'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['tiers'] = isset($data['tiers']) ? $data['tiers'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['cardBased'] = isset($data['cardBased']) ? $data['cardBased'] : false;
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
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['subscribedApplications'] === null) {
            $invalidProperties[] = "'subscribedApplications' can't be null";
        }
        if ($this->container['defaultValidity'] === null) {
            $invalidProperties[] = "'defaultValidity' can't be null";
        }
        if ($this->container['defaultPending'] === null) {
            $invalidProperties[] = "'defaultPending' can't be null";
        }
        if ($this->container['allowSubledger'] === null) {
            $invalidProperties[] = "'allowSubledger' can't be null";
        }
        if (!is_null($this->container['usersPerCardLimit']) && ($this->container['usersPerCardLimit'] < 0)) {
            $invalidProperties[] = "invalid value for 'usersPerCardLimit', must be bigger than or equal to 0.";
        }

        if ($this->container['sandbox'] === null) {
            $invalidProperties[] = "'sandbox' can't be null";
        }
        if ($this->container['accountID'] === null) {
            $invalidProperties[] = "'accountID' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['timezone'] === null) {
            $invalidProperties[] = "'timezone' can't be null";
        }
        if ((mb_strlen($this->container['timezone']) < 1)) {
            $invalidProperties[] = "invalid value for 'timezone', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['cardBased'] === null) {
            $invalidProperties[] = "'cardBased' can't be null";
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
     * @param int $id The ID of loyalty program. Internal ID of this entity.
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
     * @param \DateTime $created The time this entity was created.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title The display title for the Loyalty Program.
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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
     * @param string $description Description of our Loyalty Program.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets subscribedApplications
     *
     * @return int[]
     */
    public function getSubscribedApplications()
    {
        return $this->container['subscribedApplications'];
    }

    /**
     * Sets subscribedApplications
     *
     * @param int[] $subscribedApplications A list containing the IDs of all applications that are subscribed to this Loyalty Program.
     *
     * @return $this
     */
    public function setSubscribedApplications($subscribedApplications)
    {
        $this->container['subscribedApplications'] = $subscribedApplications;

        return $this;
    }

    /**
     * Gets defaultValidity
     *
     * @return string
     */
    public function getDefaultValidity()
    {
        return $this->container['defaultValidity'];
    }

    /**
     * Sets defaultValidity
     *
     * @param string $defaultValidity The default duration after which new loyalty points should expire. Can be 'unlimited' or a specific time. The time format is a number followed by one letter indicating the time unit, like '30s', '40m', '1h', '5D', '7W', or 10M'. These rounding suffixes are also supported: - '_D' for rounding down. Can be used as a suffix after 'D', and signifies the start of the day. - '_U' for rounding up. Can be used as a suffix after 'D', 'W', and 'M', and signifies the end of the day, week, and month.
     *
     * @return $this
     */
    public function setDefaultValidity($defaultValidity)
    {
        $this->container['defaultValidity'] = $defaultValidity;

        return $this;
    }

    /**
     * Gets defaultPending
     *
     * @return string
     */
    public function getDefaultPending()
    {
        return $this->container['defaultPending'];
    }

    /**
     * Sets defaultPending
     *
     * @param string $defaultPending The default duration of the pending time after which points should be valid. Can be 'immediate' or a specific time. The time format is a number followed by one letter indicating the time unit, like '30s', '40m', '1h', '5D', '7W', or 10M'. These rounding suffixes are also supported: - '_D' for rounding down. Can be used as a suffix after 'D', and signifies the start of the day. - '_U' for rounding up. Can be used as a suffix after 'D', 'W', and 'M', and signifies the end of the day, week, and month.
     *
     * @return $this
     */
    public function setDefaultPending($defaultPending)
    {
        $this->container['defaultPending'] = $defaultPending;

        return $this;
    }

    /**
     * Gets allowSubledger
     *
     * @return bool
     */
    public function getAllowSubledger()
    {
        return $this->container['allowSubledger'];
    }

    /**
     * Sets allowSubledger
     *
     * @param bool $allowSubledger Indicates if this program supports subledgers inside the program.
     *
     * @return $this
     */
    public function setAllowSubledger($allowSubledger)
    {
        $this->container['allowSubledger'] = $allowSubledger;

        return $this;
    }

    /**
     * Gets usersPerCardLimit
     *
     * @return int|null
     */
    public function getUsersPerCardLimit()
    {
        return $this->container['usersPerCardLimit'];
    }

    /**
     * Sets usersPerCardLimit
     *
     * @param int|null $usersPerCardLimit The max amount of user profiles with whom a card can be shared. This can be set to 0 for no limit. This property is only used when `cardBased` is `true`.
     *
     * @return $this
     */
    public function setUsersPerCardLimit($usersPerCardLimit)
    {

        if (!is_null($usersPerCardLimit) && ($usersPerCardLimit < 0)) {
            throw new \InvalidArgumentException('invalid value for $usersPerCardLimit when calling LoyaltyProgram., must be bigger than or equal to 0.');
        }

        $this->container['usersPerCardLimit'] = $usersPerCardLimit;

        return $this;
    }

    /**
     * Gets sandbox
     *
     * @return bool
     */
    public function getSandbox()
    {
        return $this->container['sandbox'];
    }

    /**
     * Sets sandbox
     *
     * @param bool $sandbox Indicates if this program is a live or sandbox program. Programs of a given type can only be connected to Applications of the same type.
     *
     * @return $this
     */
    public function setSandbox($sandbox)
    {
        $this->container['sandbox'] = $sandbox;

        return $this;
    }

    /**
     * Gets accountID
     *
     * @return int
     */
    public function getAccountID()
    {
        return $this->container['accountID'];
    }

    /**
     * Sets accountID
     *
     * @param int $accountID The ID of the Talon.One account that owns this program.
     *
     * @return $this
     */
    public function setAccountID($accountID)
    {
        $this->container['accountID'] = $accountID;

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
     * @param string $name The internal name for the Loyalty Program. This is an immutable value.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets tiers
     *
     * @return \TalonOne\Client\Model\LoyaltyTier[]|null
     */
    public function getTiers()
    {
        return $this->container['tiers'];
    }

    /**
     * Sets tiers
     *
     * @param \TalonOne\Client\Model\LoyaltyTier[]|null $tiers The tiers in this loyalty program.
     *
     * @return $this
     */
    public function setTiers($tiers)
    {
        $this->container['tiers'] = $tiers;

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
            throw new \InvalidArgumentException('invalid length for $timezone when calling LoyaltyProgram., must be bigger than or equal to 1.');
        }

        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets cardBased
     *
     * @return bool
     */
    public function getCardBased()
    {
        return $this->container['cardBased'];
    }

    /**
     * Sets cardBased
     *
     * @param bool $cardBased Defines the type of loyalty program: - `true`: the program is a card-based. - `false`: the program is profile-based.
     *
     * @return $this
     */
    public function setCardBased($cardBased)
    {
        $this->container['cardBased'] = $cardBased;

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


