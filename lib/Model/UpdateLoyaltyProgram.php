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
 * UpdateLoyaltyProgram Class Doc Comment
 *
 * @category Class
 * @description Update Loyalty Program
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
        'allowSubledger' => 'bool'
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
        'allowSubledger' => null
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
        'allowSubledger' => 'allowSubledger'
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
        'allowSubledger' => 'setAllowSubledger'
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
        'allowSubledger' => 'getAllowSubledger'
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
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @param string|null $defaultValidity Indicates the default duration after which new loyalty points should expire. The format is a number, followed by one letter indicating the unit; like '1h' or '40m'.
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
     * @param string|null $defaultPending Indicates the default duration for the pending time, after which points will be valid. The format is a number followed by a duration unit, like '1h' or '40m'.
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
     * @param bool|null $allowSubledger Indicates if this program supports subledgers inside the program
     *
     * @return $this
     */
    public function setAllowSubledger($allowSubledger)
    {
        $this->container['allowSubledger'] = $allowSubledger;

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


