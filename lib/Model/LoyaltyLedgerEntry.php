<?php
/**
 * LoyaltyLedgerEntry
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
 * LoyaltyLedgerEntry Class Doc Comment
 *
 * @category Class
 * @description A single row of the ledger, describing one addition or deduction.
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LoyaltyLedgerEntry implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoyaltyLedgerEntry';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created' => '\DateTime',
        'programID' => 'int',
        'customerProfileID' => 'string',
        'cardID' => 'int',
        'customerSessionID' => 'string',
        'eventID' => 'int',
        'type' => 'string',
        'amount' => 'float',
        'startDate' => '\DateTime',
        'expiryDate' => '\DateTime',
        'name' => 'string',
        'subLedgerID' => 'string',
        'userID' => 'int',
        'archived' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'created' => 'date-time',
        'programID' => null,
        'customerProfileID' => null,
        'cardID' => null,
        'customerSessionID' => null,
        'eventID' => null,
        'type' => null,
        'amount' => null,
        'startDate' => 'date-time',
        'expiryDate' => 'date-time',
        'name' => null,
        'subLedgerID' => null,
        'userID' => null,
        'archived' => null
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
        'created' => 'created',
        'programID' => 'programID',
        'customerProfileID' => 'customerProfileID',
        'cardID' => 'cardID',
        'customerSessionID' => 'customerSessionID',
        'eventID' => 'eventID',
        'type' => 'type',
        'amount' => 'amount',
        'startDate' => 'startDate',
        'expiryDate' => 'expiryDate',
        'name' => 'name',
        'subLedgerID' => 'subLedgerID',
        'userID' => 'userID',
        'archived' => 'archived'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'programID' => 'setProgramID',
        'customerProfileID' => 'setCustomerProfileID',
        'cardID' => 'setCardID',
        'customerSessionID' => 'setCustomerSessionID',
        'eventID' => 'setEventID',
        'type' => 'setType',
        'amount' => 'setAmount',
        'startDate' => 'setStartDate',
        'expiryDate' => 'setExpiryDate',
        'name' => 'setName',
        'subLedgerID' => 'setSubLedgerID',
        'userID' => 'setUserID',
        'archived' => 'setArchived'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'programID' => 'getProgramID',
        'customerProfileID' => 'getCustomerProfileID',
        'cardID' => 'getCardID',
        'customerSessionID' => 'getCustomerSessionID',
        'eventID' => 'getEventID',
        'type' => 'getType',
        'amount' => 'getAmount',
        'startDate' => 'getStartDate',
        'expiryDate' => 'getExpiryDate',
        'name' => 'getName',
        'subLedgerID' => 'getSubLedgerID',
        'userID' => 'getUserID',
        'archived' => 'getArchived'
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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['programID'] = isset($data['programID']) ? $data['programID'] : null;
        $this->container['customerProfileID'] = isset($data['customerProfileID']) ? $data['customerProfileID'] : null;
        $this->container['cardID'] = isset($data['cardID']) ? $data['cardID'] : null;
        $this->container['customerSessionID'] = isset($data['customerSessionID']) ? $data['customerSessionID'] : null;
        $this->container['eventID'] = isset($data['eventID']) ? $data['eventID'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['subLedgerID'] = isset($data['subLedgerID']) ? $data['subLedgerID'] : null;
        $this->container['userID'] = isset($data['userID']) ? $data['userID'] : null;
        $this->container['archived'] = isset($data['archived']) ? $data['archived'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['programID'] === null) {
            $invalidProperties[] = "'programID' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['subLedgerID'] === null) {
            $invalidProperties[] = "'subLedgerID' can't be null";
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
     * @param \DateTime $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

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
     * @param int $programID programID
     *
     * @return $this
     */
    public function setProgramID($programID)
    {
        $this->container['programID'] = $programID;

        return $this;
    }

    /**
     * Gets customerProfileID
     *
     * @return string|null
     */
    public function getCustomerProfileID()
    {
        return $this->container['customerProfileID'];
    }

    /**
     * Sets customerProfileID
     *
     * @param string|null $customerProfileID customerProfileID
     *
     * @return $this
     */
    public function setCustomerProfileID($customerProfileID)
    {
        $this->container['customerProfileID'] = $customerProfileID;

        return $this;
    }

    /**
     * Gets cardID
     *
     * @return int|null
     */
    public function getCardID()
    {
        return $this->container['cardID'];
    }

    /**
     * Sets cardID
     *
     * @param int|null $cardID cardID
     *
     * @return $this
     */
    public function setCardID($cardID)
    {
        $this->container['cardID'] = $cardID;

        return $this;
    }

    /**
     * Gets customerSessionID
     *
     * @return string|null
     */
    public function getCustomerSessionID()
    {
        return $this->container['customerSessionID'];
    }

    /**
     * Sets customerSessionID
     *
     * @param string|null $customerSessionID customerSessionID
     *
     * @return $this
     */
    public function setCustomerSessionID($customerSessionID)
    {
        $this->container['customerSessionID'] = $customerSessionID;

        return $this;
    }

    /**
     * Gets eventID
     *
     * @return int|null
     */
    public function getEventID()
    {
        return $this->container['eventID'];
    }

    /**
     * Sets eventID
     *
     * @param int|null $eventID eventID
     *
     * @return $this
     */
    public function setEventID($eventID)
    {
        $this->container['eventID'] = $eventID;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of the ledger transaction. Possible values are: - `addition` - `subtraction` - `expire` - `expiring` (for expiring points ledgers)
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime|null $startDate startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets expiryDate
     *
     * @return \DateTime|null
     */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
     * Sets expiryDate
     *
     * @param \DateTime|null $expiryDate expiryDate
     *
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;

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
     * @param string $name A name referencing the condition or effect that added this entry, or the specific name provided in an API call.
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets subLedgerID
     *
     * @return string
     */
    public function getSubLedgerID()
    {
        return $this->container['subLedgerID'];
    }

    /**
     * Sets subLedgerID
     *
     * @param string $subLedgerID This specifies if we are adding loyalty points to the main ledger or a subledger.
     *
     * @return $this
     */
    public function setSubLedgerID($subLedgerID)
    {
        $this->container['subLedgerID'] = $subLedgerID;

        return $this;
    }

    /**
     * Gets userID
     *
     * @return int|null
     */
    public function getUserID()
    {
        return $this->container['userID'];
    }

    /**
     * Sets userID
     *
     * @param int|null $userID This is the ID of the user who created this entry, if the addition or subtraction was done manually.
     *
     * @return $this
     */
    public function setUserID($userID)
    {
        $this->container['userID'] = $userID;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool|null
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool|null $archived Indicates if the entry belongs to the archived session.
     *
     * @return $this
     */
    public function setArchived($archived)
    {
        $this->container['archived'] = $archived;

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


