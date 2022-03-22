<?php
/**
 * LoyaltyCard
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
 * Use the Talon.One API to integrate with your application and to manage applications and campaigns:  - Use the operations in the [Integration API section](#integration-api) are used to integrate with our platform - Use the operation in the [Management API section](#management-api) to manage applications and campaigns.  ## Determining the base URL of the endpoints  The API is available at the same hostname as your Campaign Manager deployment. For example, if you are reading this page at `https://mycompany.talon.one/docs/api/`, the URL for the [updateCustomerSession](https://docs.talon.one/integration-api/#operation/updateCustomerSessionV2) endpoint is `https://mycompany.talon.one/v2/customer_sessions/{Id}`
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
 * LoyaltyCard Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LoyaltyCard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoyaltyCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'created' => '\DateTime',
        'modified' => '\DateTime',
        'programID' => 'int',
        'currentBalance' => 'float',
        'pendingBalance' => 'float',
        'expiredBalance' => 'float',
        'spentBalance' => 'float',
        'tentativeCurrentBalance' => 'float',
        'currentTier' => '\TalonOne\Client\Model\Tier',
        'pointsToNextTier' => 'float',
        'projection' => '\TalonOne\Client\Model\LoyaltyProjection',
        'status' => 'string',
        'identifier' => 'string',
        'usersPerCardLimit' => 'int',
        'profiles' => '\TalonOne\Client\Model\LoyaltyCardProfileRegistration[]'
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
        'programID' => null,
        'currentBalance' => null,
        'pendingBalance' => null,
        'expiredBalance' => null,
        'spentBalance' => null,
        'tentativeCurrentBalance' => null,
        'currentTier' => null,
        'pointsToNextTier' => null,
        'projection' => null,
        'status' => null,
        'identifier' => null,
        'usersPerCardLimit' => null,
        'profiles' => null
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
        'programID' => 'programID',
        'currentBalance' => 'currentBalance',
        'pendingBalance' => 'pendingBalance',
        'expiredBalance' => 'expiredBalance',
        'spentBalance' => 'spentBalance',
        'tentativeCurrentBalance' => 'tentativeCurrentBalance',
        'currentTier' => 'currentTier',
        'pointsToNextTier' => 'pointsToNextTier',
        'projection' => 'projection',
        'status' => 'status',
        'identifier' => 'identifier',
        'usersPerCardLimit' => 'usersPerCardLimit',
        'profiles' => 'profiles'
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
        'programID' => 'setProgramID',
        'currentBalance' => 'setCurrentBalance',
        'pendingBalance' => 'setPendingBalance',
        'expiredBalance' => 'setExpiredBalance',
        'spentBalance' => 'setSpentBalance',
        'tentativeCurrentBalance' => 'setTentativeCurrentBalance',
        'currentTier' => 'setCurrentTier',
        'pointsToNextTier' => 'setPointsToNextTier',
        'projection' => 'setProjection',
        'status' => 'setStatus',
        'identifier' => 'setIdentifier',
        'usersPerCardLimit' => 'setUsersPerCardLimit',
        'profiles' => 'setProfiles'
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
        'programID' => 'getProgramID',
        'currentBalance' => 'getCurrentBalance',
        'pendingBalance' => 'getPendingBalance',
        'expiredBalance' => 'getExpiredBalance',
        'spentBalance' => 'getSpentBalance',
        'tentativeCurrentBalance' => 'getTentativeCurrentBalance',
        'currentTier' => 'getCurrentTier',
        'pointsToNextTier' => 'getPointsToNextTier',
        'projection' => 'getProjection',
        'status' => 'getStatus',
        'identifier' => 'getIdentifier',
        'usersPerCardLimit' => 'getUsersPerCardLimit',
        'profiles' => 'getProfiles'
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
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['programID'] = isset($data['programID']) ? $data['programID'] : null;
        $this->container['currentBalance'] = isset($data['currentBalance']) ? $data['currentBalance'] : null;
        $this->container['pendingBalance'] = isset($data['pendingBalance']) ? $data['pendingBalance'] : null;
        $this->container['expiredBalance'] = isset($data['expiredBalance']) ? $data['expiredBalance'] : null;
        $this->container['spentBalance'] = isset($data['spentBalance']) ? $data['spentBalance'] : null;
        $this->container['tentativeCurrentBalance'] = isset($data['tentativeCurrentBalance']) ? $data['tentativeCurrentBalance'] : null;
        $this->container['currentTier'] = isset($data['currentTier']) ? $data['currentTier'] : null;
        $this->container['pointsToNextTier'] = isset($data['pointsToNextTier']) ? $data['pointsToNextTier'] : null;
        $this->container['projection'] = isset($data['projection']) ? $data['projection'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['usersPerCardLimit'] = isset($data['usersPerCardLimit']) ? $data['usersPerCardLimit'] : null;
        $this->container['profiles'] = isset($data['profiles']) ? $data['profiles'] : null;
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
        if ($this->container['programID'] === null) {
            $invalidProperties[] = "'programID' can't be null";
        }
        if ($this->container['currentBalance'] === null) {
            $invalidProperties[] = "'currentBalance' can't be null";
        }
        if ($this->container['pendingBalance'] === null) {
            $invalidProperties[] = "'pendingBalance' can't be null";
        }
        if ($this->container['expiredBalance'] === null) {
            $invalidProperties[] = "'expiredBalance' can't be null";
        }
        if ($this->container['spentBalance'] === null) {
            $invalidProperties[] = "'spentBalance' can't be null";
        }
        if ($this->container['tentativeCurrentBalance'] === null) {
            $invalidProperties[] = "'tentativeCurrentBalance' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['identifier'] === null) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        if ($this->container['usersPerCardLimit'] === null) {
            $invalidProperties[] = "'usersPerCardLimit' can't be null";
        }
        if (($this->container['usersPerCardLimit'] < 0)) {
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
     * Gets programID
     *
     * @return int
     */
    public function getProgramID()
    {
        return $this->container['programID'];
    }

    /**
     * Sets programID
     *
     * @param int $programID The ID of the loyalty program that owns this entity.
     *
     * @return $this
     */
    public function setProgramID($programID)
    {
        $this->container['programID'] = $programID;

        return $this;
    }

    /**
     * Gets currentBalance
     *
     * @return float
     */
    public function getCurrentBalance()
    {
        return $this->container['currentBalance'];
    }

    /**
     * Sets currentBalance
     *
     * @param float $currentBalance Sum of currently active points
     *
     * @return $this
     */
    public function setCurrentBalance($currentBalance)
    {
        $this->container['currentBalance'] = $currentBalance;

        return $this;
    }

    /**
     * Gets pendingBalance
     *
     * @return float
     */
    public function getPendingBalance()
    {
        return $this->container['pendingBalance'];
    }

    /**
     * Sets pendingBalance
     *
     * @param float $pendingBalance Sum of pending points
     *
     * @return $this
     */
    public function setPendingBalance($pendingBalance)
    {
        $this->container['pendingBalance'] = $pendingBalance;

        return $this;
    }

    /**
     * Gets expiredBalance
     *
     * @return float
     */
    public function getExpiredBalance()
    {
        return $this->container['expiredBalance'];
    }

    /**
     * Sets expiredBalance
     *
     * @param float $expiredBalance Sum of expired points
     *
     * @return $this
     */
    public function setExpiredBalance($expiredBalance)
    {
        $this->container['expiredBalance'] = $expiredBalance;

        return $this;
    }

    /**
     * Gets spentBalance
     *
     * @return float
     */
    public function getSpentBalance()
    {
        return $this->container['spentBalance'];
    }

    /**
     * Sets spentBalance
     *
     * @param float $spentBalance Sum of spent points
     *
     * @return $this
     */
    public function setSpentBalance($spentBalance)
    {
        $this->container['spentBalance'] = $spentBalance;

        return $this;
    }

    /**
     * Gets tentativeCurrentBalance
     *
     * @return float
     */
    public function getTentativeCurrentBalance()
    {
        return $this->container['tentativeCurrentBalance'];
    }

    /**
     * Sets tentativeCurrentBalance
     *
     * @param float $tentativeCurrentBalance Sum of currently active points, including points added and deducted in open sessions
     *
     * @return $this
     */
    public function setTentativeCurrentBalance($tentativeCurrentBalance)
    {
        $this->container['tentativeCurrentBalance'] = $tentativeCurrentBalance;

        return $this;
    }

    /**
     * Gets currentTier
     *
     * @return \TalonOne\Client\Model\Tier|null
     */
    public function getCurrentTier()
    {
        return $this->container['currentTier'];
    }

    /**
     * Sets currentTier
     *
     * @param \TalonOne\Client\Model\Tier|null $currentTier currentTier
     *
     * @return $this
     */
    public function setCurrentTier($currentTier)
    {
        $this->container['currentTier'] = $currentTier;

        return $this;
    }

    /**
     * Gets pointsToNextTier
     *
     * @return float|null
     */
    public function getPointsToNextTier()
    {
        return $this->container['pointsToNextTier'];
    }

    /**
     * Sets pointsToNextTier
     *
     * @param float|null $pointsToNextTier Points required to move up a tier.
     *
     * @return $this
     */
    public function setPointsToNextTier($pointsToNextTier)
    {
        $this->container['pointsToNextTier'] = $pointsToNextTier;

        return $this;
    }

    /**
     * Gets projection
     *
     * @return \TalonOne\Client\Model\LoyaltyProjection|null
     */
    public function getProjection()
    {
        return $this->container['projection'];
    }

    /**
     * Sets projection
     *
     * @param \TalonOne\Client\Model\LoyaltyProjection|null $projection projection
     *
     * @return $this
     */
    public function setProjection($projection)
    {
        $this->container['projection'] = $projection;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Status of the loyalty card. Can be one of: ['active', 'disabled']
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets identifier
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     *
     * @param string $identifier Identifier of the loyalty card.
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets usersPerCardLimit
     *
     * @return int
     */
    public function getUsersPerCardLimit()
    {
        return $this->container['usersPerCardLimit'];
    }

    /**
     * Sets usersPerCardLimit
     *
     * @param int $usersPerCardLimit The max amount of user profiles a card can be shared with. 0 means unlimited.
     *
     * @return $this
     */
    public function setUsersPerCardLimit($usersPerCardLimit)
    {

        if (($usersPerCardLimit < 0)) {
            throw new \InvalidArgumentException('invalid value for $usersPerCardLimit when calling LoyaltyCard., must be bigger than or equal to 0.');
        }

        $this->container['usersPerCardLimit'] = $usersPerCardLimit;

        return $this;
    }

    /**
     * Gets profiles
     *
     * @return \TalonOne\Client\Model\LoyaltyCardProfileRegistration[]|null
     */
    public function getProfiles()
    {
        return $this->container['profiles'];
    }

    /**
     * Sets profiles
     *
     * @param \TalonOne\Client\Model\LoyaltyCardProfileRegistration[]|null $profiles Integration IDs of the customers associated with the card.
     *
     * @return $this
     */
    public function setProfiles($profiles)
    {
        $this->container['profiles'] = $profiles;

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

