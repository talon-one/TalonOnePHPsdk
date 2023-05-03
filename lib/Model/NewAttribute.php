<?php
/**
 * NewAttribute
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
 * NewAttribute Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NewAttribute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewAttribute';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'entity' => 'string',
        'eventType' => 'string',
        'name' => 'string',
        'title' => 'string',
        'type' => 'string',
        'description' => 'string',
        'suggestions' => 'string[]',
        'hasAllowedList' => 'bool',
        'restrictedBySuggestions' => 'bool',
        'editable' => 'bool',
        'subscribedApplicationsIds' => 'int[]',
        'subscribedCatalogsIds' => 'int[]',
        'allowedSubscriptions' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'entity' => null,
        'eventType' => null,
        'name' => null,
        'title' => null,
        'type' => null,
        'description' => null,
        'suggestions' => null,
        'hasAllowedList' => null,
        'restrictedBySuggestions' => null,
        'editable' => null,
        'subscribedApplicationsIds' => null,
        'subscribedCatalogsIds' => null,
        'allowedSubscriptions' => null
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
        'entity' => 'entity',
        'eventType' => 'eventType',
        'name' => 'name',
        'title' => 'title',
        'type' => 'type',
        'description' => 'description',
        'suggestions' => 'suggestions',
        'hasAllowedList' => 'hasAllowedList',
        'restrictedBySuggestions' => 'restrictedBySuggestions',
        'editable' => 'editable',
        'subscribedApplicationsIds' => 'subscribedApplicationsIds',
        'subscribedCatalogsIds' => 'subscribedCatalogsIds',
        'allowedSubscriptions' => 'allowedSubscriptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'entity' => 'setEntity',
        'eventType' => 'setEventType',
        'name' => 'setName',
        'title' => 'setTitle',
        'type' => 'setType',
        'description' => 'setDescription',
        'suggestions' => 'setSuggestions',
        'hasAllowedList' => 'setHasAllowedList',
        'restrictedBySuggestions' => 'setRestrictedBySuggestions',
        'editable' => 'setEditable',
        'subscribedApplicationsIds' => 'setSubscribedApplicationsIds',
        'subscribedCatalogsIds' => 'setSubscribedCatalogsIds',
        'allowedSubscriptions' => 'setAllowedSubscriptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'entity' => 'getEntity',
        'eventType' => 'getEventType',
        'name' => 'getName',
        'title' => 'getTitle',
        'type' => 'getType',
        'description' => 'getDescription',
        'suggestions' => 'getSuggestions',
        'hasAllowedList' => 'getHasAllowedList',
        'restrictedBySuggestions' => 'getRestrictedBySuggestions',
        'editable' => 'getEditable',
        'subscribedApplicationsIds' => 'getSubscribedApplicationsIds',
        'subscribedCatalogsIds' => 'getSubscribedCatalogsIds',
        'allowedSubscriptions' => 'getAllowedSubscriptions'
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

    const ENTITY_ACCOUNT = 'Account';
    const ENTITY_APPLICATION = 'Application';
    const ENTITY_CAMPAIGN = 'Campaign';
    const ENTITY_CUSTOMER_PROFILE = 'CustomerProfile';
    const ENTITY_CUSTOMER_SESSION = 'CustomerSession';
    const ENTITY_CART_ITEM = 'CartItem';
    const ENTITY_COUPON = 'Coupon';
    const ENTITY_EVENT = 'Event';
    const ENTITY_GIVEAWAY = 'Giveaway';
    const ENTITY_REFERRAL = 'Referral';
    const TYPE_STRING = 'string';
    const TYPE_NUMBER = 'number';
    const TYPE_BOOLEAN = 'boolean';
    const TYPE_TIME = 'time';
    const TYPE_LIST_STRING = '(list string)';
    const TYPE_LIST_NUMBER = '(list number)';
    const TYPE_LIST_TIME = '(list time)';
    const TYPE_LOCATION = 'location';
    const TYPE_LIST_LOCATION = '(list location)';
    const ALLOWED_SUBSCRIPTIONS_APPLICATION = 'application';
    const ALLOWED_SUBSCRIPTIONS_CATALOG = 'catalog';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEntityAllowableValues()
    {
        return [
            self::ENTITY_ACCOUNT,
            self::ENTITY_APPLICATION,
            self::ENTITY_CAMPAIGN,
            self::ENTITY_CUSTOMER_PROFILE,
            self::ENTITY_CUSTOMER_SESSION,
            self::ENTITY_CART_ITEM,
            self::ENTITY_COUPON,
            self::ENTITY_EVENT,
            self::ENTITY_GIVEAWAY,
            self::ENTITY_REFERRAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_STRING,
            self::TYPE_NUMBER,
            self::TYPE_BOOLEAN,
            self::TYPE_TIME,
            self::TYPE_LIST_STRING,
            self::TYPE_LIST_NUMBER,
            self::TYPE_LIST_TIME,
            self::TYPE_LOCATION,
            self::TYPE_LIST_LOCATION,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAllowedSubscriptionsAllowableValues()
    {
        return [
            self::ALLOWED_SUBSCRIPTIONS_APPLICATION,
            self::ALLOWED_SUBSCRIPTIONS_CATALOG,
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
        $this->container['entity'] = isset($data['entity']) ? $data['entity'] : null;
        $this->container['eventType'] = isset($data['eventType']) ? $data['eventType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['suggestions'] = isset($data['suggestions']) ? $data['suggestions'] : null;
        $this->container['hasAllowedList'] = isset($data['hasAllowedList']) ? $data['hasAllowedList'] : false;
        $this->container['restrictedBySuggestions'] = isset($data['restrictedBySuggestions']) ? $data['restrictedBySuggestions'] : false;
        $this->container['editable'] = isset($data['editable']) ? $data['editable'] : null;
        $this->container['subscribedApplicationsIds'] = isset($data['subscribedApplicationsIds']) ? $data['subscribedApplicationsIds'] : null;
        $this->container['subscribedCatalogsIds'] = isset($data['subscribedCatalogsIds']) ? $data['subscribedCatalogsIds'] : null;
        $this->container['allowedSubscriptions'] = isset($data['allowedSubscriptions']) ? $data['allowedSubscriptions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['entity'] === null) {
            $invalidProperties[] = "'entity' can't be null";
        }
        $allowedValues = $this->getEntityAllowableValues();
        if (!is_null($this->container['entity']) && !in_array($this->container['entity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'entity', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (!preg_match("/^[A-Za-z]\\w*$/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[A-Za-z]\\w*$/.";
        }

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if (!preg_match("/^[A-Za-z][A-Za-z0-9_.!~*'() -]*$/", $this->container['title'])) {
            $invalidProperties[] = "invalid value for 'title', must be conform to the pattern /^[A-Za-z][A-Za-z0-9_.!~*'() -]*$/.";
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

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['suggestions'] === null) {
            $invalidProperties[] = "'suggestions' can't be null";
        }
        if ($this->container['editable'] === null) {
            $invalidProperties[] = "'editable' can't be null";
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
     * Gets entity
     *
     * @return string
     */
    public function getEntity()
    {
        return $this->container['entity'];
    }

    /**
     * Sets entity
     *
     * @param string $entity The name of the entity that can have this attribute. When creating or updating the entities of a given type, you can include an `attributes` object with keys corresponding to the `name` of the custom attributes for that type.
     *
     * @return $this
     */
    public function setEntity($entity)
    {
        $allowedValues = $this->getEntityAllowableValues();
        if (!in_array($entity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'entity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['entity'] = $entity;

        return $this;
    }

    /**
     * Gets eventType
     *
     * @return string|null
     */
    public function getEventType()
    {
        return $this->container['eventType'];
    }

    /**
     * Sets eventType
     *
     * @param string|null $eventType eventType
     *
     * @return $this
     */
    public function setEventType($eventType)
    {
        $this->container['eventType'] = $eventType;

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
     * @param string $name The attribute name that will be used in API requests and Talang. E.g. if `name == \"region\"` then you would set the region attribute by including an `attributes.region` property in your request payload.
     *
     * @return $this
     */
    public function setName($name)
    {

        if ((!preg_match("/^[A-Za-z]\\w*$/", $name))) {
            throw new \InvalidArgumentException("invalid value for $name when calling NewAttribute., must conform to the pattern /^[A-Za-z]\\w*$/.");
        }

        $this->container['name'] = $name;

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
     * @param string $title The human-readable name for the attribute that will be shown in the Campaign Manager. Like `name`, the combination of entity and title must also be unique.
     *
     * @return $this
     */
    public function setTitle($title)
    {

        if ((!preg_match("/^[A-Za-z][A-Za-z0-9_.!~*'() -]*$/", $title))) {
            throw new \InvalidArgumentException("invalid value for $title when calling NewAttribute., must conform to the pattern /^[A-Za-z][A-Za-z0-9_.!~*'() -]*$/.");
        }

        $this->container['title'] = $title;

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
     * @param string $type The data type of the attribute, a `time` attribute must be sent as a string that conforms to the [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) timestamp format.
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
        $this->container['type'] = $type;

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
     * @param string $description A description of this attribute.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets suggestions
     *
     * @return string[]
     */
    public function getSuggestions()
    {
        return $this->container['suggestions'];
    }

    /**
     * Sets suggestions
     *
     * @param string[] $suggestions A list of suggestions for the attribute.
     *
     * @return $this
     */
    public function setSuggestions($suggestions)
    {
        $this->container['suggestions'] = $suggestions;

        return $this;
    }

    /**
     * Gets hasAllowedList
     *
     * @return bool|null
     */
    public function getHasAllowedList()
    {
        return $this->container['hasAllowedList'];
    }

    /**
     * Sets hasAllowedList
     *
     * @param bool|null $hasAllowedList Whether or not this attribute has an allowed list of values associated with it.
     *
     * @return $this
     */
    public function setHasAllowedList($hasAllowedList)
    {
        $this->container['hasAllowedList'] = $hasAllowedList;

        return $this;
    }

    /**
     * Gets restrictedBySuggestions
     *
     * @return bool|null
     */
    public function getRestrictedBySuggestions()
    {
        return $this->container['restrictedBySuggestions'];
    }

    /**
     * Sets restrictedBySuggestions
     *
     * @param bool|null $restrictedBySuggestions Whether or not this attribute's value is restricted by suggestions (`suggestions` property) or by an allowed list of value (`hasAllowedList` property).
     *
     * @return $this
     */
    public function setRestrictedBySuggestions($restrictedBySuggestions)
    {
        $this->container['restrictedBySuggestions'] = $restrictedBySuggestions;

        return $this;
    }

    /**
     * Gets editable
     *
     * @return bool
     */
    public function getEditable()
    {
        return $this->container['editable'];
    }

    /**
     * Sets editable
     *
     * @param bool $editable Whether or not this attribute can be edited.
     *
     * @return $this
     */
    public function setEditable($editable)
    {
        $this->container['editable'] = $editable;

        return $this;
    }

    /**
     * Gets subscribedApplicationsIds
     *
     * @return int[]|null
     */
    public function getSubscribedApplicationsIds()
    {
        return $this->container['subscribedApplicationsIds'];
    }

    /**
     * Sets subscribedApplicationsIds
     *
     * @param int[]|null $subscribedApplicationsIds A list of the IDs of the applications where this attribute is available.
     *
     * @return $this
     */
    public function setSubscribedApplicationsIds($subscribedApplicationsIds)
    {
        $this->container['subscribedApplicationsIds'] = $subscribedApplicationsIds;

        return $this;
    }

    /**
     * Gets subscribedCatalogsIds
     *
     * @return int[]|null
     */
    public function getSubscribedCatalogsIds()
    {
        return $this->container['subscribedCatalogsIds'];
    }

    /**
     * Sets subscribedCatalogsIds
     *
     * @param int[]|null $subscribedCatalogsIds A list of the IDs of the catalogs where this attribute is available.
     *
     * @return $this
     */
    public function setSubscribedCatalogsIds($subscribedCatalogsIds)
    {
        $this->container['subscribedCatalogsIds'] = $subscribedCatalogsIds;

        return $this;
    }

    /**
     * Gets allowedSubscriptions
     *
     * @return string[]|null
     */
    public function getAllowedSubscriptions()
    {
        return $this->container['allowedSubscriptions'];
    }

    /**
     * Sets allowedSubscriptions
     *
     * @param string[]|null $allowedSubscriptions A list of allowed subscription types for this attribute.  **Note:** This only applies to attributes associated with the `CartItem` entity.
     *
     * @return $this
     */
    public function setAllowedSubscriptions($allowedSubscriptions)
    {
        $allowedValues = $this->getAllowedSubscriptionsAllowableValues();
        if (!is_null($allowedSubscriptions) && array_diff($allowedSubscriptions, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'allowedSubscriptions', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['allowedSubscriptions'] = $allowedSubscriptions;

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


