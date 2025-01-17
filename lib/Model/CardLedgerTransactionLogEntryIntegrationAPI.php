<?php
/**
 * CardLedgerTransactionLogEntryIntegrationAPI
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
 * CardLedgerTransactionLogEntryIntegrationAPI Class Doc Comment
 *
 * @category Class
 * @description Log entry for a given loyalty card transaction.
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class CardLedgerTransactionLogEntryIntegrationAPI implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CardLedgerTransactionLogEntryIntegrationAPI';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created' => '\DateTime',
        'programId' => 'int',
        'cardIdentifier' => 'string',
        'customerSessionId' => 'string',
        'type' => 'string',
        'name' => 'string',
        'startDate' => 'string',
        'expiryDate' => 'string',
        'subledgerId' => 'string',
        'amount' => 'float',
        'id' => 'int',
        'rulesetId' => 'int',
        'ruleName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'created' => 'date-time',
        'programId' => null,
        'cardIdentifier' => null,
        'customerSessionId' => null,
        'type' => null,
        'name' => null,
        'startDate' => null,
        'expiryDate' => null,
        'subledgerId' => null,
        'amount' => null,
        'id' => null,
        'rulesetId' => null,
        'ruleName' => null
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
        'programId' => 'programId',
        'cardIdentifier' => 'cardIdentifier',
        'customerSessionId' => 'customerSessionId',
        'type' => 'type',
        'name' => 'name',
        'startDate' => 'startDate',
        'expiryDate' => 'expiryDate',
        'subledgerId' => 'subledgerId',
        'amount' => 'amount',
        'id' => 'id',
        'rulesetId' => 'rulesetId',
        'ruleName' => 'ruleName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created' => 'setCreated',
        'programId' => 'setProgramId',
        'cardIdentifier' => 'setCardIdentifier',
        'customerSessionId' => 'setCustomerSessionId',
        'type' => 'setType',
        'name' => 'setName',
        'startDate' => 'setStartDate',
        'expiryDate' => 'setExpiryDate',
        'subledgerId' => 'setSubledgerId',
        'amount' => 'setAmount',
        'id' => 'setId',
        'rulesetId' => 'setRulesetId',
        'ruleName' => 'setRuleName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created' => 'getCreated',
        'programId' => 'getProgramId',
        'cardIdentifier' => 'getCardIdentifier',
        'customerSessionId' => 'getCustomerSessionId',
        'type' => 'getType',
        'name' => 'getName',
        'startDate' => 'getStartDate',
        'expiryDate' => 'getExpiryDate',
        'subledgerId' => 'getSubledgerId',
        'amount' => 'getAmount',
        'id' => 'getId',
        'rulesetId' => 'getRulesetId',
        'ruleName' => 'getRuleName'
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

    const TYPE_ADDITION = 'addition';
    const TYPE_SUBTRACTION = 'subtraction';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ADDITION,
            self::TYPE_SUBTRACTION,
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
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['programId'] = isset($data['programId']) ? $data['programId'] : null;
        $this->container['cardIdentifier'] = isset($data['cardIdentifier']) ? $data['cardIdentifier'] : null;
        $this->container['customerSessionId'] = isset($data['customerSessionId']) ? $data['customerSessionId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['subledgerId'] = isset($data['subledgerId']) ? $data['subledgerId'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['rulesetId'] = isset($data['rulesetId']) ? $data['rulesetId'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
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
        if ($this->container['programId'] === null) {
            $invalidProperties[] = "'programId' can't be null";
        }
        if ($this->container['cardIdentifier'] === null) {
            $invalidProperties[] = "'cardIdentifier' can't be null";
        }
        if ((mb_strlen($this->container['cardIdentifier']) > 108)) {
            $invalidProperties[] = "invalid value for 'cardIdentifier', the character length must be smaller than or equal to 108.";
        }

        if (!preg_match("/^[A-Za-z0-9_-]*$/", $this->container['cardIdentifier'])) {
            $invalidProperties[] = "invalid value for 'cardIdentifier', must be conform to the pattern /^[A-Za-z0-9_-]*$/.";
        }

        if (!is_null($this->container['customerSessionId']) && (mb_strlen($this->container['customerSessionId']) > 255)) {
            $invalidProperties[] = "invalid value for 'customerSessionId', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ((mb_strlen($this->container['type']) > 255)) {
            $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 255)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
        }

        if ($this->container['startDate'] === null) {
            $invalidProperties[] = "'startDate' can't be null";
        }
        if ((mb_strlen($this->container['startDate']) > 64)) {
            $invalidProperties[] = "invalid value for 'startDate', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['expiryDate'] === null) {
            $invalidProperties[] = "'expiryDate' can't be null";
        }
        if ($this->container['subledgerId'] === null) {
            $invalidProperties[] = "'subledgerId' can't be null";
        }
        if ((mb_strlen($this->container['subledgerId']) > 64)) {
            $invalidProperties[] = "invalid value for 'subledgerId', the character length must be smaller than or equal to 64.";
        }

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * @param \DateTime $created Date and time the loyalty card transaction occurred.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets programId
     *
     * @return int
     */
    public function getProgramId()
    {
        return $this->container['programId'];
    }

    /**
     * Sets programId
     *
     * @param int $programId ID of the loyalty program.
     *
     * @return $this
     */
    public function setProgramId($programId)
    {
        $this->container['programId'] = $programId;

        return $this;
    }

    /**
     * Gets cardIdentifier
     *
     * @return string
     */
    public function getCardIdentifier()
    {
        return $this->container['cardIdentifier'];
    }

    /**
     * Sets cardIdentifier
     *
     * @param string $cardIdentifier The alphanumeric identifier of the loyalty card.
     *
     * @return $this
     */
    public function setCardIdentifier($cardIdentifier)
    {
        if ((mb_strlen($cardIdentifier) > 108)) {
            throw new \InvalidArgumentException('invalid length for $cardIdentifier when calling CardLedgerTransactionLogEntryIntegrationAPI., must be smaller than or equal to 108.');
        }
        if ((!preg_match("/^[A-Za-z0-9_-]*$/", $cardIdentifier))) {
            throw new \InvalidArgumentException("invalid value for $cardIdentifier when calling CardLedgerTransactionLogEntryIntegrationAPI., must conform to the pattern /^[A-Za-z0-9_-]*$/.");
        }

        $this->container['cardIdentifier'] = $cardIdentifier;

        return $this;
    }

    /**
     * Gets customerSessionId
     *
     * @return string|null
     */
    public function getCustomerSessionId()
    {
        return $this->container['customerSessionId'];
    }

    /**
     * Sets customerSessionId
     *
     * @param string|null $customerSessionId ID of the customer session where the transaction occurred.
     *
     * @return $this
     */
    public function setCustomerSessionId($customerSessionId)
    {
        if (!is_null($customerSessionId) && (mb_strlen($customerSessionId) > 255)) {
            throw new \InvalidArgumentException('invalid length for $customerSessionId when calling CardLedgerTransactionLogEntryIntegrationAPI., must be smaller than or equal to 255.');
        }

        $this->container['customerSessionId'] = $customerSessionId;

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
     * @param string $type Type of transaction. Possible values:   - `addition`: Signifies added points.   - `subtraction`: Signifies deducted points.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        if ((mb_strlen($type) > 255)) {
            throw new \InvalidArgumentException('invalid length for $type when calling CardLedgerTransactionLogEntryIntegrationAPI., must be smaller than or equal to 255.');
        }

        $this->container['type'] = $type;

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
     * @param string $name Name or reason of the loyalty ledger transaction.
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling CardLedgerTransactionLogEntryIntegrationAPI., must be smaller than or equal to 255.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param string $startDate When points become active. Possible values:   - `immediate`: Points are active immediately.   - a timestamp value: Points become active at a given date and time.
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        if ((mb_strlen($startDate) > 64)) {
            throw new \InvalidArgumentException('invalid length for $startDate when calling CardLedgerTransactionLogEntryIntegrationAPI., must be smaller than or equal to 64.');
        }

        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets expiryDate
     *
     * @return string
     */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
     * Sets expiryDate
     *
     * @param string $expiryDate Date when points expire. Possible values are:   - `unlimited`: Points have no expiration date.   - `timestamp value`: Points expire on the given date.
     *
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;

        return $this;
    }

    /**
     * Gets subledgerId
     *
     * @return string
     */
    public function getSubledgerId()
    {
        return $this->container['subledgerId'];
    }

    /**
     * Sets subledgerId
     *
     * @param string $subledgerId ID of the subledger.
     *
     * @return $this
     */
    public function setSubledgerId($subledgerId)
    {
        if ((mb_strlen($subledgerId) > 64)) {
            throw new \InvalidArgumentException('invalid length for $subledgerId when calling CardLedgerTransactionLogEntryIntegrationAPI., must be smaller than or equal to 64.');
        }

        $this->container['subledgerId'] = $subledgerId;

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
     * @param float $amount Amount of loyalty points added or deducted in the transaction.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
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
     * @param int $id ID of the loyalty ledger transaction.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets rulesetId
     *
     * @return int|null
     */
    public function getRulesetId()
    {
        return $this->container['rulesetId'];
    }

    /**
     * Sets rulesetId
     *
     * @param int|null $rulesetId The ID of the ruleset containing the rule that triggered this effect.
     *
     * @return $this
     */
    public function setRulesetId($rulesetId)
    {
        $this->container['rulesetId'] = $rulesetId;

        return $this;
    }

    /**
     * Gets ruleName
     *
     * @return string|null
     */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
     * Sets ruleName
     *
     * @param string|null $ruleName The name of the rule that triggered this effect.
     *
     * @return $this
     */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;

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


