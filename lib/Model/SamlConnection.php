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
 * SamlConnection Class Doc Comment
 *
 * @category Class
 * @description 
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
        'assertion_consumer_service_url' => 'string',
        'account_id' => 'int',
        'name' => 'string',
        'enabled' => 'bool',
        'issuer' => 'string',
        'sign_on_url' => 'string',
        'sign_out_url' => 'string',
        'metadata_url' => 'string',
        'audience_uri' => 'string',
        'id' => 'int',
        'created' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'assertion_consumer_service_url' => null,
        'account_id' => null,
        'name' => null,
        'enabled' => null,
        'issuer' => null,
        'sign_on_url' => null,
        'sign_out_url' => null,
        'metadata_url' => null,
        'audience_uri' => null,
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
        'assertion_consumer_service_url' => 'assertionConsumerServiceURL',
        'account_id' => 'accountId',
        'name' => 'name',
        'enabled' => 'enabled',
        'issuer' => 'issuer',
        'sign_on_url' => 'signOnURL',
        'sign_out_url' => 'signOutURL',
        'metadata_url' => 'metadataURL',
        'audience_uri' => 'audienceURI',
        'id' => 'id',
        'created' => 'created'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'assertion_consumer_service_url' => 'setAssertionConsumerServiceUrl',
        'account_id' => 'setAccountId',
        'name' => 'setName',
        'enabled' => 'setEnabled',
        'issuer' => 'setIssuer',
        'sign_on_url' => 'setSignOnUrl',
        'sign_out_url' => 'setSignOutUrl',
        'metadata_url' => 'setMetadataUrl',
        'audience_uri' => 'setAudienceUri',
        'id' => 'setId',
        'created' => 'setCreated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'assertion_consumer_service_url' => 'getAssertionConsumerServiceUrl',
        'account_id' => 'getAccountId',
        'name' => 'getName',
        'enabled' => 'getEnabled',
        'issuer' => 'getIssuer',
        'sign_on_url' => 'getSignOnUrl',
        'sign_out_url' => 'getSignOutUrl',
        'metadata_url' => 'getMetadataUrl',
        'audience_uri' => 'getAudienceUri',
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
        $this->container['assertion_consumer_service_url'] = isset($data['assertion_consumer_service_url']) ? $data['assertion_consumer_service_url'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['sign_on_url'] = isset($data['sign_on_url']) ? $data['sign_on_url'] : null;
        $this->container['sign_out_url'] = isset($data['sign_out_url']) ? $data['sign_out_url'] : null;
        $this->container['metadata_url'] = isset($data['metadata_url']) ? $data['metadata_url'] : null;
        $this->container['audience_uri'] = isset($data['audience_uri']) ? $data['audience_uri'] : null;
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

        if ($this->container['assertion_consumer_service_url'] === null) {
            $invalidProperties[] = "'assertion_consumer_service_url' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalidProperties[] = "'account_id' can't be null";
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

        if ($this->container['sign_on_url'] === null) {
            $invalidProperties[] = "'sign_on_url' can't be null";
        }
        if ((mb_strlen($this->container['sign_on_url']) < 1)) {
            $invalidProperties[] = "invalid value for 'sign_on_url', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['audience_uri'] === null) {
            $invalidProperties[] = "'audience_uri' can't be null";
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
     * Gets assertion_consumer_service_url
     *
     * @return string
     */
    public function getAssertionConsumerServiceUrl()
    {
        return $this->container['assertion_consumer_service_url'];
    }

    /**
     * Sets assertion_consumer_service_url
     *
     * @param string $assertion_consumer_service_url The location where the SAML assertion is sent with a HTTP POST.
     *
     * @return $this
     */
    public function setAssertionConsumerServiceUrl($assertion_consumer_service_url)
    {
        $this->container['assertion_consumer_service_url'] = $assertion_consumer_service_url;

        return $this;
    }

    /**
     * Gets account_id
     *
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param int $account_id The ID of the account that owns this entity.
     *
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

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
     * Gets sign_on_url
     *
     * @return string
     */
    public function getSignOnUrl()
    {
        return $this->container['sign_on_url'];
    }

    /**
     * Sets sign_on_url
     *
     * @param string $sign_on_url Single Sign-On URL.
     *
     * @return $this
     */
    public function setSignOnUrl($sign_on_url)
    {

        if ((mb_strlen($sign_on_url) < 1)) {
            throw new \InvalidArgumentException('invalid length for $sign_on_url when calling SamlConnection., must be bigger than or equal to 1.');
        }

        $this->container['sign_on_url'] = $sign_on_url;

        return $this;
    }

    /**
     * Gets sign_out_url
     *
     * @return string|null
     */
    public function getSignOutUrl()
    {
        return $this->container['sign_out_url'];
    }

    /**
     * Sets sign_out_url
     *
     * @param string|null $sign_out_url Single Sign-Out URL.
     *
     * @return $this
     */
    public function setSignOutUrl($sign_out_url)
    {
        $this->container['sign_out_url'] = $sign_out_url;

        return $this;
    }

    /**
     * Gets metadata_url
     *
     * @return string|null
     */
    public function getMetadataUrl()
    {
        return $this->container['metadata_url'];
    }

    /**
     * Sets metadata_url
     *
     * @param string|null $metadata_url Metadata URL.
     *
     * @return $this
     */
    public function setMetadataUrl($metadata_url)
    {
        $this->container['metadata_url'] = $metadata_url;

        return $this;
    }

    /**
     * Gets audience_uri
     *
     * @return string
     */
    public function getAudienceUri()
    {
        return $this->container['audience_uri'];
    }

    /**
     * Sets audience_uri
     *
     * @param string $audience_uri The application-defined unique identifier that is the intended audience of the SAML assertion. This is most often the SP Entity ID of your application. When not specified, the ACS URL will be used.
     *
     * @return $this
     */
    public function setAudienceUri($audience_uri)
    {
        $this->container['audience_uri'] = $audience_uri;

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


