# # ApplicationCampaignAnalytics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**startTime** | [**\DateTime**](\DateTime.md) | The start of the aggregation time frame in UTC. | 
**endTime** | [**\DateTime**](\DateTime.md) | The end of the aggregation time frame in UTC. | 
**campaignId** | **int** | The ID of the campaign. | 
**campaignName** | **string** | The name of the campaign. | 
**campaignTags** | **string[]** | A list of tags for the campaign. | 
**campaignState** | **string** | The state of the campaign.  **Note:** A disabled or archived campaign is not evaluated for rules or coupons. | 
**totalRevenue** | [**\TalonOne\Client\Model\AnalyticsDataPointWithTrendAndInfluencedRate**](AnalyticsDataPointWithTrendAndInfluencedRate.md) |  | [optional] 
**sessionsCount** | [**\TalonOne\Client\Model\AnalyticsDataPointWithTrendAndInfluencedRate**](AnalyticsDataPointWithTrendAndInfluencedRate.md) |  | [optional] 
**avgItemsPerSession** | [**\TalonOne\Client\Model\AnalyticsDataPointWithTrendAndUplift**](AnalyticsDataPointWithTrendAndUplift.md) |  | [optional] 
**avgSessionValue** | [**\TalonOne\Client\Model\AnalyticsDataPointWithTrendAndUplift**](AnalyticsDataPointWithTrendAndUplift.md) |  | [optional] 
**totalDiscounts** | [**\TalonOne\Client\Model\AnalyticsDataPointWithTrend**](AnalyticsDataPointWithTrend.md) |  | [optional] 
**couponsCount** | [**\TalonOne\Client\Model\AnalyticsDataPointWithTrend**](AnalyticsDataPointWithTrend.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


