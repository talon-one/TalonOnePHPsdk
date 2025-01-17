<?php
/**
 * SamlConnection
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
 * SamlConnection Class Doc Comment
 *
 * @category Class
 * @description A SAML 2.0 connection.
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SamlConnection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SamlConnection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'assertionConsumerServiceURL' => 'string',
        'accountId' => 'int',
        'name' => 'string',
        'enabled' => 'bool',
        'issuer' => 'string',
        'signOnURL' => 'string',
        'signOutURL' => 'string',
        'metadataURL' => 'string',
        'audienceURI' => 'string',
        'id' => 'int',
        'created' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'assertionConsumerServiceURL' => null,
        'accountId' => null,
        'name' => null,
        'enabled' => null,
        'issuer' => null,
        'signOnURL' => null,
        'signOutURL' => null,
        'metadataURL' => null,
        'audienceURI' => null,
        'id' => null,
        'created' => 'date-time'
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
        'assertionConsumerServiceURL' => 'assertionConsumerServiceURL',
        'accountId' => 'accountId',
        'name' => 'name',
        'enabled' => 'enabled',
        'issuer' => 'issuer',
        'signOnURL' => 'signOnURL',
        'signOutURL' => 'signOutURL',
        'metadataURL' => 'metadataURL',
        'audienceURI' => 'audienceURI',
        'id' => 'id',
        'created' => 'created'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assertionConsumerServiceURL' => 'setAssertionConsumerServiceURL',
        'accountId' => 'setAccountId',
        'name' => 'setName',
        'enabled' => 'setEnabled',
        'issuer' => 'setIssuer',
        'signOnURL' => 'setSignOnURL',
        'signOutURL' => 'setSignOutURL',
        'metadataURL' => 'setMetadataURL',
        'audienceURI' => 'setAudienceURI',
        'id' => 'setId',
        'created' => 'setCreated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assertionConsumerServiceURL' => 'getAssertionConsumerServiceURL',
        'accountId' => 'getAccountId',
        'name' => 'getName',
        'enabled' => 'getEnabled',
        'issuer' => 'getIssuer',
        'signOnURL' => 'getSignOnURL',
        'signOutURL' => 'getSignOutURL',
        'metadataURL' => 'getMetadataURL',
        'audienceURI' => 'getAudienceURI',
        'id' => 'getId',
        'created' => 'getCreated'
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
        $this->container['assertionConsumerServiceURL'] = isset($data['assertionConsumerServiceURL']) ? $data['assertionConsumerServiceURL'] : null;
        $this->container['accountId'] = isset($data['accountId']) ? $data['accountId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['signOnURL'] = isset($data['signOnURL']) ? $data['signOnURL'] : null;
        $this->container['signOutURL'] = isset($data['signOutURL']) ? $data['signOutURL'] : null;
        $this->container['metadataURL'] = isset($data['metadataURL']) ? $data['metadataURL'] : null;
        $this->container['audienceURI'] = isset($data['audienceURI']) ? $data['audienceURI'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['assertionConsumerServiceURL'] === null) {
            $invalidProperties[] = "'assertionConsumerServiceURL' can't be null";
        }
        if ($this->container['accountId'] === null) {
            $invalidProperties[] = "'accountId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) < 1)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['issuer'] === null) {
            $invalidProperties[] = "'issuer' can't be null";
        }
        if ((mb_strlen($this->container['issuer']) < 1)) {
            $invalidProperties[] = "invalid value for 'issuer', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['signOnURL'] === null) {
            $invalidProperties[] = "'signOnURL' can't be null";
        }
        if ((mb_strlen($this->container['signOnURL']) < 1)) {
            $invalidProperties[] = "invalid value for 'signOnURL', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['audienceURI'] === null) {
            $invalidProperties[] = "'audienceURI' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
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
     * Gets assertionConsumerServiceURL
     *
     * @return string
     */
    public function getAssertionConsumerServiceURL()
    {
        return $this->container['assertionConsumerServiceURL'];
    }

    /**
     * Sets assertionConsumerServiceURL
     *
     * @param string $assertionConsumerServiceURL The location where the SAML assertion is sent with a HTTP POST.
     *
     * @return $this
     */
    public function setAssertionConsumerServiceURL($assertionConsumerServiceURL)
    {
        $this->container['assertionConsumerServiceURL'] = $assertionConsumerServiceURL;

        return $this;
    }

    /**
     * Gets accountId
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['accountId'];
    }

    /**
     * Sets accountId
     *
     * @param int $accountId The ID of the account that owns this entity.
     *
     * @return $this
     */
    public function setAccountId($accountId)
    {
        $this->container['accountId'] = $accountId;

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
     * @param string $name ID of the SAML service.
     *
     * @return $this
     */
    public function setName($name)
    {

        if ((mb_strlen($name) < 1)) {
            throw new \InvalidArgumentException('invalid length for $name when calling SamlConnection., must be bigger than or equal to 1.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled Determines if this SAML connection active.
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets issuer
     *
     * @return string
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     *
     * @param string $issuer Identity Provider Entity ID.
     *
     * @return $this
     */
    public function setIssuer($issuer)
    {

        if ((mb_strlen($issuer) < 1)) {
            throw new \InvalidArgumentException('invalid length for $issuer when calling SamlConnection., must be bigger than or equal to 1.');
        }

        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets signOnURL
     *
     * @return string
     */
    public function getSignOnURL()
    {
        return $this->container['signOnURL'];
    }

    /**
     * Sets signOnURL
     *
     * @param string $signOnURL Single Sign-On URL.
     *
     * @return $this
     */
    public function setSignOnURL($signOnURL)
    {

        if ((mb_strlen($signOnURL) < 1)) {
            throw new \InvalidArgumentException('invalid length for $signOnURL when calling SamlConnection., must be bigger than or equal to 1.');
        }

        $this->container['signOnURL'] = $signOnURL;

        return $this;
    }

    /**
     * Gets signOutURL
     *
     * @return string|null
     */
    public function getSignOutURL()
    {
        return $this->container['signOutURL'];
    }

    /**
     * Sets signOutURL
     *
     * @param string|null $signOutURL Single Sign-Out URL.
     *
     * @return $this
     */
    public function setSignOutURL($signOutURL)
    {
        $this->container['signOutURL'] = $signOutURL;

        return $this;
    }

    /**
     * Gets metadataURL
     *
     * @return string|null
     */
    public function getMetadataURL()
    {
        return $this->container['metadataURL'];
    }

    /**
     * Sets metadataURL
     *
     * @param string|null $metadataURL Metadata URL.
     *
     * @return $this
     */
    public function setMetadataURL($metadataURL)
    {
        $this->container['metadataURL'] = $metadataURL;

        return $this;
    }

    /**
     * Gets audienceURI
     *
     * @return string
     */
    public function getAudienceURI()
    {
        return $this->container['audienceURI'];
    }

    /**
     * Sets audienceURI
     *
     * @param string $audienceURI The application-defined unique identifier that is the intended audience of the SAML assertion. This is most often the SP Entity ID of your application. When not specified, the ACS URL will be used.
     *
     * @return $this
     */
    public function setAudienceURI($audienceURI)
    {
        $this->container['audienceURI'] = $audienceURI;

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
     * @param int $id Internal ID of this entity.
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


