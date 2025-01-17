<?php
/**
 * ApplicationCampaignAnalytics
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
 * ApplicationCampaignAnalytics Class Doc Comment
 *
 * @category Class
 * @package  TalonOne\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ApplicationCampaignAnalytics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ApplicationCampaignAnalytics';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'startTime' => '\DateTime',
        'endTime' => '\DateTime',
        'campaignId' => 'int',
        'campaignName' => 'string',
        'campaignTags' => 'string[]',
        'campaignState' => 'string',
        'totalRevenue' => '\TalonOne\Client\Model\AnalyticsDataPointWithTrendAndInfluencedRate',
        'sessionsCount' => '\TalonOne\Client\Model\AnalyticsDataPointWithTrendAndInfluencedRate',
        'avgItemsPerSession' => '\TalonOne\Client\Model\AnalyticsDataPointWithTrendAndUplift',
        'avgSessionValue' => '\TalonOne\Client\Model\AnalyticsDataPointWithTrendAndUplift',
        'totalDiscounts' => '\TalonOne\Client\Model\AnalyticsDataPointWithTrend',
        'couponsCount' => '\TalonOne\Client\Model\AnalyticsDataPointWithTrend'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'startTime' => 'date-time',
        'endTime' => 'date-time',
        'campaignId' => null,
        'campaignName' => null,
        'campaignTags' => null,
        'campaignState' => null,
        'totalRevenue' => null,
        'sessionsCount' => null,
        'avgItemsPerSession' => null,
        'avgSessionValue' => null,
        'totalDiscounts' => null,
        'couponsCount' => null
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
        'startTime' => 'startTime',
        'endTime' => 'endTime',
        'campaignId' => 'campaignId',
        'campaignName' => 'campaignName',
        'campaignTags' => 'campaignTags',
        'campaignState' => 'campaignState',
        'totalRevenue' => 'totalRevenue',
        'sessionsCount' => 'sessionsCount',
        'avgItemsPerSession' => 'avgItemsPerSession',
        'avgSessionValue' => 'avgSessionValue',
        'totalDiscounts' => 'totalDiscounts',
        'couponsCount' => 'couponsCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'startTime' => 'setStartTime',
        'endTime' => 'setEndTime',
        'campaignId' => 'setCampaignId',
        'campaignName' => 'setCampaignName',
        'campaignTags' => 'setCampaignTags',
        'campaignState' => 'setCampaignState',
        'totalRevenue' => 'setTotalRevenue',
        'sessionsCount' => 'setSessionsCount',
        'avgItemsPerSession' => 'setAvgItemsPerSession',
        'avgSessionValue' => 'setAvgSessionValue',
        'totalDiscounts' => 'setTotalDiscounts',
        'couponsCount' => 'setCouponsCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'startTime' => 'getStartTime',
        'endTime' => 'getEndTime',
        'campaignId' => 'getCampaignId',
        'campaignName' => 'getCampaignName',
        'campaignTags' => 'getCampaignTags',
        'campaignState' => 'getCampaignState',
        'totalRevenue' => 'getTotalRevenue',
        'sessionsCount' => 'getSessionsCount',
        'avgItemsPerSession' => 'getAvgItemsPerSession',
        'avgSessionValue' => 'getAvgSessionValue',
        'totalDiscounts' => 'getTotalDiscounts',
        'couponsCount' => 'getCouponsCount'
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

    const CAMPAIGN_STATE_EXPIRED = 'expired';
    const CAMPAIGN_STATE_SCHEDULED = 'scheduled';
    const CAMPAIGN_STATE_RUNNING = 'running';
    const CAMPAIGN_STATE_DISABLED = 'disabled';
    const CAMPAIGN_STATE_ARCHIVED = 'archived';
    const CAMPAIGN_STATE_STAGED = 'staged';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCampaignStateAllowableValues()
    {
        return [
            self::CAMPAIGN_STATE_EXPIRED,
            self::CAMPAIGN_STATE_SCHEDULED,
            self::CAMPAIGN_STATE_RUNNING,
            self::CAMPAIGN_STATE_DISABLED,
            self::CAMPAIGN_STATE_ARCHIVED,
            self::CAMPAIGN_STATE_STAGED,
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
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['campaignId'] = isset($data['campaignId']) ? $data['campaignId'] : null;
        $this->container['campaignName'] = isset($data['campaignName']) ? $data['campaignName'] : null;
        $this->container['campaignTags'] = isset($data['campaignTags']) ? $data['campaignTags'] : null;
        $this->container['campaignState'] = isset($data['campaignState']) ? $data['campaignState'] : null;
        $this->container['totalRevenue'] = isset($data['totalRevenue']) ? $data['totalRevenue'] : null;
        $this->container['sessionsCount'] = isset($data['sessionsCount']) ? $data['sessionsCount'] : null;
        $this->container['avgItemsPerSession'] = isset($data['avgItemsPerSession']) ? $data['avgItemsPerSession'] : null;
        $this->container['avgSessionValue'] = isset($data['avgSessionValue']) ? $data['avgSessionValue'] : null;
        $this->container['totalDiscounts'] = isset($data['totalDiscounts']) ? $data['totalDiscounts'] : null;
        $this->container['couponsCount'] = isset($data['couponsCount']) ? $data['couponsCount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['campaignId'] === null) {
            $invalidProperties[] = "'campaignId' can't be null";
        }
        if ($this->container['campaignName'] === null) {
            $invalidProperties[] = "'campaignName' can't be null";
        }
        if ($this->container['campaignTags'] === null) {
            $invalidProperties[] = "'campaignTags' can't be null";
        }
        if ($this->container['campaignState'] === null) {
            $invalidProperties[] = "'campaignState' can't be null";
        }
        $allowedValues = $this->getCampaignStateAllowableValues();
        if (!is_null($this->container['campaignState']) && !in_array($this->container['campaignState'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'campaignState', must be one of '%s'",
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
     * Gets startTime
     *
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
     * Sets startTime
     *
     * @param \DateTime $startTime The start of the aggregation time frame in UTC.
     *
     * @return $this
     */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;

        return $this;
    }

    /**
     * Gets endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
     * Sets endTime
     *
     * @param \DateTime $endTime The end of the aggregation time frame in UTC.
     *
     * @return $this
     */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;

        return $this;
    }

    /**
     * Gets campaignId
     *
     * @return int
     */
    public function getCampaignId()
    {
        return $this->container['campaignId'];
    }

    /**
     * Sets campaignId
     *
     * @param int $campaignId The ID of the campaign.
     *
     * @return $this
     */
    public function setCampaignId($campaignId)
    {
        $this->container['campaignId'] = $campaignId;

        return $this;
    }

    /**
     * Gets campaignName
     *
     * @return string
     */
    public function getCampaignName()
    {
        return $this->container['campaignName'];
    }

    /**
     * Sets campaignName
     *
     * @param string $campaignName The name of the campaign.
     *
     * @return $this
     */
    public function setCampaignName($campaignName)
    {
        $this->container['campaignName'] = $campaignName;

        return $this;
    }

    /**
     * Gets campaignTags
     *
     * @return string[]
     */
    public function getCampaignTags()
    {
        return $this->container['campaignTags'];
    }

    /**
     * Sets campaignTags
     *
     * @param string[] $campaignTags A list of tags for the campaign.
     *
     * @return $this
     */
    public function setCampaignTags($campaignTags)
    {
        $this->container['campaignTags'] = $campaignTags;

        return $this;
    }

    /**
     * Gets campaignState
     *
     * @return string
     */
    public function getCampaignState()
    {
        return $this->container['campaignState'];
    }

    /**
     * Sets campaignState
     *
     * @param string $campaignState The state of the campaign.  **Note:** A disabled or archived campaign is not evaluated for rules or coupons.
     *
     * @return $this
     */
    public function setCampaignState($campaignState)
    {
        $allowedValues = $this->getCampaignStateAllowableValues();
        if (!in_array($campaignState, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'campaignState', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['campaignState'] = $campaignState;

        return $this;
    }

    /**
     * Gets totalRevenue
     *
     * @return \TalonOne\Client\Model\AnalyticsDataPointWithTrendAndInfluencedRate|null
     */
    public function getTotalRevenue()
    {
        return $this->container['totalRevenue'];
    }

    /**
     * Sets totalRevenue
     *
     * @param \TalonOne\Client\Model\AnalyticsDataPointWithTrendAndInfluencedRate|null $totalRevenue totalRevenue
     *
     * @return $this
     */
    public function setTotalRevenue($totalRevenue)
    {
        $this->container['totalRevenue'] = $totalRevenue;

        return $this;
    }

    /**
     * Gets sessionsCount
     *
     * @return \TalonOne\Client\Model\AnalyticsDataPointWithTrendAndInfluencedRate|null
     */
    public function getSessionsCount()
    {
        return $this->container['sessionsCount'];
    }

    /**
     * Sets sessionsCount
     *
     * @param \TalonOne\Client\Model\AnalyticsDataPointWithTrendAndInfluencedRate|null $sessionsCount sessionsCount
     *
     * @return $this
     */
    public function setSessionsCount($sessionsCount)
    {
        $this->container['sessionsCount'] = $sessionsCount;

        return $this;
    }

    /**
     * Gets avgItemsPerSession
     *
     * @return \TalonOne\Client\Model\AnalyticsDataPointWithTrendAndUplift|null
     */
    public function getAvgItemsPerSession()
    {
        return $this->container['avgItemsPerSession'];
    }

    /**
     * Sets avgItemsPerSession
     *
     * @param \TalonOne\Client\Model\AnalyticsDataPointWithTrendAndUplift|null $avgItemsPerSession avgItemsPerSession
     *
     * @return $this
     */
    public function setAvgItemsPerSession($avgItemsPerSession)
    {
        $this->container['avgItemsPerSession'] = $avgItemsPerSession;

        return $this;
    }

    /**
     * Gets avgSessionValue
     *
     * @return \TalonOne\Client\Model\AnalyticsDataPointWithTrendAndUplift|null
     */
    public function getAvgSessionValue()
    {
        return $this->container['avgSessionValue'];
    }

    /**
     * Sets avgSessionValue
     *
     * @param \TalonOne\Client\Model\AnalyticsDataPointWithTrendAndUplift|null $avgSessionValue avgSessionValue
     *
     * @return $this
     */
    public function setAvgSessionValue($avgSessionValue)
    {
        $this->container['avgSessionValue'] = $avgSessionValue;

        return $this;
    }

    /**
     * Gets totalDiscounts
     *
     * @return \TalonOne\Client\Model\AnalyticsDataPointWithTrend|null
     */
    public function getTotalDiscounts()
    {
        return $this->container['totalDiscounts'];
    }

    /**
     * Sets totalDiscounts
     *
     * @param \TalonOne\Client\Model\AnalyticsDataPointWithTrend|null $totalDiscounts totalDiscounts
     *
     * @return $this
     */
    public function setTotalDiscounts($totalDiscounts)
    {
        $this->container['totalDiscounts'] = $totalDiscounts;

        return $this;
    }

    /**
     * Gets couponsCount
     *
     * @return \TalonOne\Client\Model\AnalyticsDataPointWithTrend|null
     */
    public function getCouponsCount()
    {
        return $this->container['couponsCount'];
    }

    /**
     * Sets couponsCount
     *
     * @param \TalonOne\Client\Model\AnalyticsDataPointWithTrend|null $couponsCount couponsCount
     *
     * @return $this
     */
    public function setCouponsCount($couponsCount)
    {
        $this->container['couponsCount'] = $couponsCount;

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


