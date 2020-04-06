<?php
/**
 * UpdateApplication
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
 * UpdateApplication Class Doc Comment
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class UpdateApplication implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'UpdateApplication';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'description' => 'string',
        'timezone' => 'string',
        'currency' => 'string',
        'caseSensitivity' => 'string',
        'attributes' => 'object',
        'limits' => '\TalonOne\Client\Model\LimitConfig[]',
        'attributesSettings' => '\TalonOne\Client\Model\AttributesSettings'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'timezone' => null,
        'currency' => null,
        'caseSensitivity' => null,
        'attributes' => null,
        'limits' => null,
        'attributesSettings' => null
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
        'name' => 'name',
        'description' => 'description',
        'timezone' => 'timezone',
        'currency' => 'currency',
        'caseSensitivity' => 'caseSensitivity',
        'attributes' => 'attributes',
        'limits' => 'limits',
        'attributesSettings' => 'attributesSettings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'timezone' => 'setTimezone',
        'currency' => 'setCurrency',
        'caseSensitivity' => 'setCaseSensitivity',
        'attributes' => 'setAttributes',
        'limits' => 'setLimits',
        'attributesSettings' => 'setAttributesSettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'timezone' => 'getTimezone',
        'currency' => 'getCurrency',
        'caseSensitivity' => 'getCaseSensitivity',
        'attributes' => 'getAttributes',
        'limits' => 'getLimits',
        'attributesSettings' => 'getAttributesSettings'
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

    const CASE_SENSITIVITY_SENSITIVE = 'sensitive';
    const CASE_SENSITIVITY_INSENSITIVE_UPPERCASE = 'insensitive-uppercase';
    const CASE_SENSITIVITY_INSENSITIVE_LOWERCASE = 'insensitive-lowercase';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCaseSensitivityAllowableValues()
    {
        return [
            self::CASE_SENSITIVITY_SENSITIVE,
            self::CASE_SENSITIVITY_INSENSITIVE_UPPERCASE,
            self::CASE_SENSITIVITY_INSENSITIVE_LOWERCASE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['caseSensitivity'] = isset($data['caseSensitivity']) ? $data['caseSensitivity'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['limits'] = isset($data['limits']) ? $data['limits'] : null;
        $this->container['attributesSettings'] = isset($data['attributesSettings']) ? $data['attributesSettings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['timezone'] === null) {
            $invalidProperties[] = "'timezone' can't be null";
        }
        if ((mb_strlen($this->container['timezone']) < 1)) {
            $invalidProperties[] = "invalid value for 'timezone', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ((mb_strlen($this->container['currency']) < 1)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 1.";
        }

        $allowedValues = $this->getCaseSensitivityAllowableValues();
        if (!is_null($this->container['caseSensitivity']) && !in_array($this->container['caseSensitivity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'caseSensitivity', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * @param string $name The name of this application.
     *
     * @return $this
     */
    public function setName($name)
    {

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling UpdateApplication., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

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
     * @param string|null $description A longer description of the application.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
            throw new \InvalidArgumentException('invalid length for $timezone when calling UpdateApplication., must be bigger than or equal to 1.');
        }

        $this->container['timezone'] = $timezone;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency A string describing a default currency for new customer sessions.
     *
     * @return $this
     */
    public function setCurrency($currency)
    {

        if ((mb_strlen($currency) < 1)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling UpdateApplication., must be bigger than or equal to 1.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets caseSensitivity
     *
     * @return string|null
     */
    public function getCaseSensitivity()
    {
        return $this->container['caseSensitivity'];
    }

    /**
     * Sets caseSensitivity
     *
     * @param string|null $caseSensitivity A string indicating how should campaigns in this application deal with case sensitivity on coupon codes.
     *
     * @return $this
     */
    public function setCaseSensitivity($caseSensitivity)
    {
        $allowedValues = $this->getCaseSensitivityAllowableValues();
        if (!is_null($caseSensitivity) && !in_array($caseSensitivity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'caseSensitivity', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['caseSensitivity'] = $caseSensitivity;

        return $this;
    }

    /**
     * Gets attributes
     *
     * @return object|null
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     *
     * @param object|null $attributes Arbitrary properties associated with this campaign
     *
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets limits
     *
     * @return \TalonOne\Client\Model\LimitConfig[]|null
     */
    public function getLimits()
    {
        return $this->container['limits'];
    }

    /**
     * Sets limits
     *
     * @param \TalonOne\Client\Model\LimitConfig[]|null $limits Default limits for campaigns created in this application
     *
     * @return $this
     */
    public function setLimits($limits)
    {
        $this->container['limits'] = $limits;

        return $this;
    }

    /**
     * Gets attributesSettings
     *
     * @return \TalonOne\Client\Model\AttributesSettings|null
     */
    public function getAttributesSettings()
    {
        return $this->container['attributesSettings'];
    }

    /**
     * Sets attributesSettings
     *
     * @param \TalonOne\Client\Model\AttributesSettings|null $attributesSettings attributesSettings
     *
     * @return $this
     */
    public function setAttributesSettings($attributesSettings)
    {
        $this->container['attributesSettings'] = $attributesSettings;

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


