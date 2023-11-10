<?php
/**
 * LoyaltyProgramTransaction
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
 * LoyaltyProgramTransaction Class Doc Comment
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LoyaltyProgramTransaction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LoyaltyProgramTransaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'programId' => 'int',
        'created' => '\DateTime',
        'type' => 'string',
        'amount' => 'float',
        'name' => 'string',
        'startDate' => 'string',
        'expiryDate' => 'string',
        'customerProfileId' => 'string',
        'cardIdentifier' => 'string',
        'subledgerId' => 'string',
        'customerSessionId' => 'string',
        'importId' => 'int',
        'userId' => 'int',
        'userEmail' => 'string',
        'rulesetId' => 'int',
        'ruleName' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id' => null,
        'programId' => null,
        'created' => 'date-time',
        'type' => null,
        'amount' => null,
        'name' => null,
        'startDate' => null,
        'expiryDate' => null,
        'customerProfileId' => null,
        'cardIdentifier' => null,
        'subledgerId' => null,
        'customerSessionId' => null,
        'importId' => null,
        'userId' => null,
        'userEmail' => null,
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
        'id' => 'id',
        'programId' => 'programId',
        'created' => 'created',
        'type' => 'type',
        'amount' => 'amount',
        'name' => 'name',
        'startDate' => 'startDate',
        'expiryDate' => 'expiryDate',
        'customerProfileId' => 'customerProfileId',
        'cardIdentifier' => 'cardIdentifier',
        'subledgerId' => 'subledgerId',
        'customerSessionId' => 'customerSessionId',
        'importId' => 'importId',
        'userId' => 'userId',
        'userEmail' => 'userEmail',
        'rulesetId' => 'rulesetId',
        'ruleName' => 'ruleName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'programId' => 'setProgramId',
        'created' => 'setCreated',
        'type' => 'setType',
        'amount' => 'setAmount',
        'name' => 'setName',
        'startDate' => 'setStartDate',
        'expiryDate' => 'setExpiryDate',
        'customerProfileId' => 'setCustomerProfileId',
        'cardIdentifier' => 'setCardIdentifier',
        'subledgerId' => 'setSubledgerId',
        'customerSessionId' => 'setCustomerSessionId',
        'importId' => 'setImportId',
        'userId' => 'setUserId',
        'userEmail' => 'setUserEmail',
        'rulesetId' => 'setRulesetId',
        'ruleName' => 'setRuleName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'programId' => 'getProgramId',
        'created' => 'getCreated',
        'type' => 'getType',
        'amount' => 'getAmount',
        'name' => 'getName',
        'startDate' => 'getStartDate',
        'expiryDate' => 'getExpiryDate',
        'customerProfileId' => 'getCustomerProfileId',
        'cardIdentifier' => 'getCardIdentifier',
        'subledgerId' => 'getSubledgerId',
        'customerSessionId' => 'getCustomerSessionId',
        'importId' => 'getImportId',
        'userId' => 'getUserId',
        'userEmail' => 'getUserEmail',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['programId'] = isset($data['programId']) ? $data['programId'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['customerProfileId'] = isset($data['customerProfileId']) ? $data['customerProfileId'] : null;
        $this->container['cardIdentifier'] = isset($data['cardIdentifier']) ? $data['cardIdentifier'] : null;
        $this->container['subledgerId'] = isset($data['subledgerId']) ? $data['subledgerId'] : null;
        $this->container['customerSessionId'] = isset($data['customerSessionId']) ? $data['customerSessionId'] : null;
        $this->container['importId'] = isset($data['importId']) ? $data['importId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userEmail'] = isset($data['userEmail']) ? $data['userEmail'] : null;
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['programId'] === null) {
            $invalidProperties[] = "'programId' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
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

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
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
        if (!is_null($this->container['customerProfileId']) && (mb_strlen($this->container['customerProfileId']) > 255)) {
            $invalidProperties[] = "invalid value for 'customerProfileId', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['cardIdentifier']) && (mb_strlen($this->container['cardIdentifier']) > 108)) {
            $invalidProperties[] = "invalid value for 'cardIdentifier', the character length must be smaller than or equal to 108.";
        }

        if ($this->container['subledgerId'] === null) {
            $invalidProperties[] = "'subledgerId' can't be null";
        }
        if ((mb_strlen($this->container['subledgerId']) > 64)) {
            $invalidProperties[] = "invalid value for 'subledgerId', the character length must be smaller than or equal to 64.";
        }

        if (!is_null($this->container['customerSessionId']) && (mb_strlen($this->container['customerSessionId']) > 255)) {
            $invalidProperties[] = "invalid value for 'customerSessionId', the character length must be smaller than or equal to 255.";
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
     * @param \DateTime $created Date and time the loyalty transaction occurred.
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

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
            throw new \InvalidArgumentException('invalid length for $type when calling LoyaltyProgramTransaction., must be smaller than or equal to 255.');
        }

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
     * @param string $name Name or reason for the loyalty ledger transaction.
     *
     * @return $this
     */
    public function setName($name)
    {
        if ((mb_strlen($name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $name when calling LoyaltyProgramTransaction., must be smaller than or equal to 255.');
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
     * @param string $startDate When points become active. Possible values:   - `immediate`: Points are immediately active.   - a timestamp value: Points become active at a given date and time.
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        if ((mb_strlen($startDate) > 64)) {
            throw new \InvalidArgumentException('invalid length for $startDate when calling LoyaltyProgramTransaction., must be smaller than or equal to 64.');
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
     * @param string $expiryDate When points expire. Possible values:   - `unlimited`: Points have no expiration date.   - a timestamp value: Points expire at a given date and time.
     *
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;

        return $this;
    }

    /**
     * Gets customerProfileId
     *
     * @return string|null
     */
    public function getCustomerProfileId()
    {
        return $this->container['customerProfileId'];
    }

    /**
     * Sets customerProfileId
     *
     * @param string|null $customerProfileId Customer profile integration ID used in the loyalty program.
     *
     * @return $this
     */
    public function setCustomerProfileId($customerProfileId)
    {
        if (!is_null($customerProfileId) && (mb_strlen($customerProfileId) > 255)) {
            throw new \InvalidArgumentException('invalid length for $customerProfileId when calling LoyaltyProgramTransaction., must be smaller than or equal to 255.');
        }

        $this->container['customerProfileId'] = $customerProfileId;

        return $this;
    }

    /**
     * Gets cardIdentifier
     *
     * @return string|null
     */
    public function getCardIdentifier()
    {
        return $this->container['cardIdentifier'];
    }

    /**
     * Sets cardIdentifier
     *
     * @param string|null $cardIdentifier The alphanumeric identifier of the loyalty card.
     *
     * @return $this
     */
    public function setCardIdentifier($cardIdentifier)
    {
        if (!is_null($cardIdentifier) && (mb_strlen($cardIdentifier) > 108)) {
            throw new \InvalidArgumentException('invalid length for $cardIdentifier when calling LoyaltyProgramTransaction., must be smaller than or equal to 108.');
        }

        $this->container['cardIdentifier'] = $cardIdentifier;

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
            throw new \InvalidArgumentException('invalid length for $subledgerId when calling LoyaltyProgramTransaction., must be smaller than or equal to 64.');
        }

        $this->container['subledgerId'] = $subledgerId;

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
            throw new \InvalidArgumentException('invalid length for $customerSessionId when calling LoyaltyProgramTransaction., must be smaller than or equal to 255.');
        }

        $this->container['customerSessionId'] = $customerSessionId;

        return $this;
    }

    /**
     * Gets importId
     *
     * @return int|null
     */
    public function getImportId()
    {
        return $this->container['importId'];
    }

    /**
     * Sets importId
     *
     * @param int|null $importId ID of the import where the transaction occurred.
     *
     * @return $this
     */
    public function setImportId($importId)
    {
        $this->container['importId'] = $importId;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return int|null
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param int|null $userId ID of the user who manually added or deducted points. Applies only to manual transactions.
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets userEmail
     *
     * @return string|null
     */
    public function getUserEmail()
    {
        return $this->container['userEmail'];
    }

    /**
     * Sets userEmail
     *
     * @param string|null $userEmail The email of the Campaign Manager account that manually added or deducted points. Applies only to manual transactions.
     *
     * @return $this
     */
    public function setUserEmail($userEmail)
    {
        $this->container['userEmail'] = $userEmail;

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
     * @param int|null $rulesetId ID of the ruleset containing the rule that triggered the effect. Applies only for transactions that resulted from a customer session.
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
     * @param string|null $ruleName Name of the rule that triggered the effect. Applies only for transactions that resulted from a customer session.
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


