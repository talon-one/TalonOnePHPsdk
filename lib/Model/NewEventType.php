<?php
/**
 * NewEventType
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
 * NewEventType Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class NewEventType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'NewEventType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'application_ids' => 'int[]',
        'title' => 'string',
        'name' => 'string',
        'description' => 'string',
        'mime_type' => 'string',
        'example_payload' => 'string',
        'schema' => 'object',
        'handler_language' => 'string',
        'handler' => 'string',
        'version' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'application_ids' => null,
        'title' => null,
        'name' => null,
        'description' => null,
        'mime_type' => null,
        'example_payload' => null,
        'schema' => null,
        'handler_language' => null,
        'handler' => null,
        'version' => null
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
        'application_ids' => 'applicationIds',
        'title' => 'title',
        'name' => 'name',
        'description' => 'description',
        'mime_type' => 'mimeType',
        'example_payload' => 'examplePayload',
        'schema' => 'schema',
        'handler_language' => 'handlerLanguage',
        'handler' => 'handler',
        'version' => 'version'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'application_ids' => 'setApplicationIds',
        'title' => 'setTitle',
        'name' => 'setName',
        'description' => 'setDescription',
        'mime_type' => 'setMimeType',
        'example_payload' => 'setExamplePayload',
        'schema' => 'setSchema',
        'handler_language' => 'setHandlerLanguage',
        'handler' => 'setHandler',
        'version' => 'setVersion'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'application_ids' => 'getApplicationIds',
        'title' => 'getTitle',
        'name' => 'getName',
        'description' => 'getDescription',
        'mime_type' => 'getMimeType',
        'example_payload' => 'getExamplePayload',
        'schema' => 'getSchema',
        'handler_language' => 'getHandlerLanguage',
        'handler' => 'getHandler',
        'version' => 'getVersion'
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

    const MIME_TYPE_APPLICATION_JSON = 'application/json';
    const MIME_TYPE_APPLICATION_X_WWW_FORM_URLENCODED = 'application/x-www-form-urlencoded';
    const MIME_TYPE_NONE = 'none';
    const HANDLER_LANGUAGE_TALANG = 'talang';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMimeTypeAllowableValues()
    {
        return [
            self::MIME_TYPE_APPLICATION_JSON,
            self::MIME_TYPE_APPLICATION_X_WWW_FORM_URLENCODED,
            self::MIME_TYPE_NONE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getHandlerLanguageAllowableValues()
    {
        return [
            self::HANDLER_LANGUAGE_TALANG,
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
        $this->container['application_ids'] = isset($data['application_ids']) ? $data['application_ids'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['mime_type'] = isset($data['mime_type']) ? $data['mime_type'] : null;
        $this->container['example_payload'] = isset($data['example_payload']) ? $data['example_payload'] : null;
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['handler_language'] = isset($data['handler_language']) ? $data['handler_language'] : null;
        $this->container['handler'] = isset($data['handler']) ? $data['handler'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['application_ids'] === null) {
            $invalidProperties[] = "'application_ids' can't be null";
        }
        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((mb_strlen($this->container['title']) < 1)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['mime_type'] === null) {
            $invalidProperties[] = "'mime_type' can't be null";
        }
        $allowedValues = $this->getMimeTypeAllowableValues();
        if (!is_null($this->container['mime_type']) && !in_array($this->container['mime_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mime_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getHandlerLanguageAllowableValues();
        if (!is_null($this->container['handler_language']) && !in_array($this->container['handler_language'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'handler_language', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['handler'] === null) {
            $invalidProperties[] = "'handler' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
     * Gets application_ids
     *
     * @return int[]
     */
    public function getApplicationIds()
    {
        return $this->container['application_ids'];
    }

    /**
     * Sets application_ids
     *
     * @param int[] $application_ids The IDs of the applications that are related to this entity.
     *
     * @return $this
     */
    public function setApplicationIds($application_ids)
    {
        $this->container['application_ids'] = $application_ids;

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
     * @param string $title The human-friendly display name for this event type. Use a short, past-tense, description of the event.
     *
     * @return $this
     */
    public function setTitle($title)
    {

        if ((mb_strlen($title) < 1)) {
            throw new \InvalidArgumentException('invalid length for $title when calling NewEventType., must be bigger than or equal to 1.');
        }

        $this->container['title'] = $title;

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
     * @param string $name The machine-friendly canonical name for this event type. This will be used in URLs, and cannot be changed after an event type has been created.
     *
     * @return $this
     */
    public function setName($name)
    {

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling NewEventType., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

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
     * @param string $description An explanation of when the event type is triggered. Write this with a campaign manager in mind. For example:  > The \"Payment Accepted\" event is triggered after successful processing of a payment by our payment gateway.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets mime_type
     *
     * @return string
     */
    public function getMimeType()
    {
        return $this->container['mime_type'];
    }

    /**
     * Sets mime_type
     *
     * @param string $mime_type This defines how the request payload will be parsed before your handler code is run.
     *
     * @return $this
     */
    public function setMimeType($mime_type)
    {
        $allowedValues = $this->getMimeTypeAllowableValues();
        if (!in_array($mime_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mime_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mime_type'] = $mime_type;

        return $this;
    }

    /**
     * Gets example_payload
     *
     * @return string|null
     */
    public function getExamplePayload()
    {
        return $this->container['example_payload'];
    }

    /**
     * Sets example_payload
     *
     * @param string|null $example_payload It is often helpful to include an example payload with the event type definition for documentation purposes.
     *
     * @return $this
     */
    public function setExamplePayload($example_payload)
    {
        $this->container['example_payload'] = $example_payload;

        return $this;
    }

    /**
     * Gets schema
     *
     * @return object|null
     */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
     * Sets schema
     *
     * @param object|null $schema It is strongly recommended to define a JSON schema that will be used to perform structural validation of request payloads after parsing.
     *
     * @return $this
     */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;

        return $this;
    }

    /**
     * Gets handler_language
     *
     * @return string|null
     */
    public function getHandlerLanguage()
    {
        return $this->container['handler_language'];
    }

    /**
     * Sets handler_language
     *
     * @param string|null $handler_language The language of the handler code. Currently only `\"talang\"` is supported.
     *
     * @return $this
     */
    public function setHandlerLanguage($handler_language)
    {
        $allowedValues = $this->getHandlerLanguageAllowableValues();
        if (!is_null($handler_language) && !in_array($handler_language, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'handler_language', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['handler_language'] = $handler_language;

        return $this;
    }

    /**
     * Gets handler
     *
     * @return string
     */
    public function getHandler()
    {
        return $this->container['handler'];
    }

    /**
     * Sets handler
     *
     * @param string $handler Code that will be run after successful parsing & validation of the payload for this event. This code _may_ choose to evaluate campaign rules.
     *
     * @return $this
     */
    public function setHandler($handler)
    {
        $this->container['handler'] = $handler;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version The version of this event type. When updating an existing event type this must be **exactly** `currentVersion + 1`.
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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


