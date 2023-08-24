<?php
/**
 * UpdateLoyaltyProgram
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
 * UpdateLoyaltyProgram Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UpdateLoyaltyProgram implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateLoyaltyProgram';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'title' => 'string',
        'description' => 'string',
        'subscribedApplications' => 'int[]',
        'defaultValidity' => 'string',
        'defaultPending' => 'string',
        'allowSubledger' => 'bool',
        'usersPerCardLimit' => 'int',
        'sandbox' => 'bool',
        'tiers' => '\TalonOne\Client\Model\NewLoyaltyTier[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'title' => null,
        'description' => null,
        'subscribedApplications' => null,
        'defaultValidity' => null,
        'defaultPending' => null,
        'allowSubledger' => null,
        'usersPerCardLimit' => null,
        'sandbox' => null,
        'tiers' => null
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
        'title' => 'title',
        'description' => 'description',
        'subscribedApplications' => 'subscribedApplications',
        'defaultValidity' => 'defaultValidity',
        'defaultPending' => 'defaultPending',
        'allowSubledger' => 'allowSubledger',
        'usersPerCardLimit' => 'usersPerCardLimit',
        'sandbox' => 'sandbox',
        'tiers' => 'tiers'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'title' => 'setTitle',
        'description' => 'setDescription',
        'subscribedApplications' => 'setSubscribedApplications',
        'defaultValidity' => 'setDefaultValidity',
        'defaultPending' => 'setDefaultPending',
        'allowSubledger' => 'setAllowSubledger',
        'usersPerCardLimit' => 'setUsersPerCardLimit',
        'sandbox' => 'setSandbox',
        'tiers' => 'setTiers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'title' => 'getTitle',
        'description' => 'getDescription',
        'subscribedApplications' => 'getSubscribedApplications',
        'defaultValidity' => 'getDefaultValidity',
        'defaultPending' => 'getDefaultPending',
        'allowSubledger' => 'getAllowSubledger',
        'usersPerCardLimit' => 'getUsersPerCardLimit',
        'sandbox' => 'getSandbox',
        'tiers' => 'getTiers'
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
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['subscribedApplications'] = isset($data['subscribedApplications']) ? $data['subscribedApplications'] : null;
        $this->container['defaultValidity'] = isset($data['defaultValidity']) ? $data['defaultValidity'] : null;
        $this->container['defaultPending'] = isset($data['defaultPending']) ? $data['defaultPending'] : null;
        $this->container['allowSubledger'] = isset($data['allowSubledger']) ? $data['allowSubledger'] : null;
        $this->container['usersPerCardLimit'] = isset($data['usersPerCardLimit']) ? $data['usersPerCardLimit'] : null;
        $this->container['sandbox'] = isset($data['sandbox']) ? $data['sandbox'] : null;
        $this->container['tiers'] = isset($data['tiers']) ? $data['tiers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['usersPerCardLimit']) && ($this->container['usersPerCardLimit'] < 0)) {
            $invalidProperties[] = "invalid value for 'usersPerCardLimit', must be bigger than or equal to 0.";
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
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The display title for the Loyalty Program.
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
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of our Loyalty Program.
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
     * @return int[]|null
     */
    public function getSubscribedApplications()
    {
        return $this->container['subscribedApplications'];
    }

    /**
     * Sets subscribedApplications
     *
     * @param int[]|null $subscribedApplications A list containing the IDs of all applications that are subscribed to this Loyalty Program.
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
     * @return string|null
     */
    public function getDefaultValidity()
    {
        return $this->container['defaultValidity'];
    }

    /**
     * Sets defaultValidity
     *
     * @param string|null $defaultValidity The default duration after which new loyalty points should expire. Can be 'unlimited' or a specific time. The time format is a number followed by one letter indicating the time unit, like '30s', '40m', '1h', '5D', '7W', or 10M'. These rounding suffixes are also supported: - '_D' for rounding down. Can be used as a suffix after 'D', and signifies the start of the day. - '_U' for rounding up. Can be used as a suffix after 'D', 'W', and 'M', and signifies the end of the day, week, and month.
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
     * @return string|null
     */
    public function getDefaultPending()
    {
        return $this->container['defaultPending'];
    }

    /**
     * Sets defaultPending
     *
     * @param string|null $defaultPending The default duration of the pending time after which points should be valid. Can be 'immediate' or a specific time. The time format is a number followed by one letter indicating the time unit, like '30s', '40m', '1h', '5D', '7W', or 10M'. These rounding suffixes are also supported: - '_D' for rounding down. Can be used as a suffix after 'D', and signifies the start of the day. - '_U' for rounding up. Can be used as a suffix after 'D', 'W', and 'M', and signifies the end of the day, week, and month.
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
     * @return bool|null
     */
    public function getAllowSubledger()
    {
        return $this->container['allowSubledger'];
    }

    /**
     * Sets allowSubledger
     *
     * @param bool|null $allowSubledger Indicates if this program supports subledgers inside the program.
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
            throw new \InvalidArgumentException('invalid value for $usersPerCardLimit when calling UpdateLoyaltyProgram., must be bigger than or equal to 0.');
        }

        $this->container['usersPerCardLimit'] = $usersPerCardLimit;

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
     * @param bool|null $sandbox Indicates if this program is a live or sandbox program. Programs of a given type can only be connected to Applications of the same type.
     *
     * @return $this
     */
    public function setSandbox($sandbox)
    {
        $this->container['sandbox'] = $sandbox;

        return $this;
    }

    /**
     * Gets tiers
     *
     * @return \TalonOne\Client\Model\NewLoyaltyTier[]|null
     */
    public function getTiers()
    {
        return $this->container['tiers'];
    }

    /**
     * Sets tiers
     *
     * @param \TalonOne\Client\Model\NewLoyaltyTier[]|null $tiers The tiers in this loyalty program.
     *
     * @return $this
     */
    public function setTiers($tiers)
    {
        $this->container['tiers'] = $tiers;

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


