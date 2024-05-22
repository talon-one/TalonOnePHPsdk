# # ApplicationCampaignAnalytics

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**startTime** | [**\DateTime**](\DateTime.md) | The start of the aggregation time frame in UTC. | [optional] 
**endTime** | [**\DateTime**](\DateTime.md) | The end of the aggregation time frame in UTC. | [optional] 
**campaignId** | **int** | The ID of the campaign. | [optional] 
**campaignName** | **string** | The name of the campaign. | [optional] 
**campaignTags** | **string[]** | A list of tags for the campaign. | [optional] 
**campaignState** | **string** | The state of the campaign.  **Note:** A disabled or archived campaign is not evaluated for rules or coupons. | [optional] [default to 'enabled']
**campaignActiveRulesetId** | **int** | The [ID of the ruleset](https://docs.talon.one/management-api#operation/getRulesets) this campaign applies on customer session evaluation. | [optional] 
**campaignStartTime** | [**\DateTime**](\DateTime.md) | Date and time when the campaign becomes active. | [optional] 
**campaignEndTime** | [**\DateTime**](\DateTime.md) | Date and time when the campaign becomes inactive. | [optional] 
**totalRevenue** | [**\TalonOne\Client\Model\ApplicationCampaignAnalyticsTotalRevenue**](ApplicationCampaignAnalyticsTotalRevenue.md) |  | [optional] 
**sessionsCount** | [**\TalonOne\Client\Model\ApplicationCampaignAnalyticsSessionsCount**](ApplicationCampaignAnalyticsSessionsCount.md) |  | [optional] 
**avgItemsPerSession** | [**\TalonOne\Client\Model\ApplicationCampaignAnalyticsAvgItemsPerSession**](ApplicationCampaignAnalyticsAvgItemsPerSession.md) |  | [optional] 
**avgSessionValue** | [**\TalonOne\Client\Model\ApplicationCampaignAnalyticsAvgSessionValue**](ApplicationCampaignAnalyticsAvgSessionValue.md) |  | [optional] 
**totalDiscounts** | [**\TalonOne\Client\Model\ApplicationCampaignAnalyticsTotalDiscounts**](ApplicationCampaignAnalyticsTotalDiscounts.md) |  | [optional] 
**couponsCount** | [**\TalonOne\Client\Model\ApplicationCampaignAnalyticsCouponsCount**](ApplicationCampaignAnalyticsCouponsCount.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


