# # Account

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**modified** | [**\DateTime**](\DateTime.md) | The exact moment this entity was last modified. | 
**companyName** | **string** |  | 
**domainName** | **string** | Subdomain Name for yourcompany.talon.one | 
**state** | **string** | State of the account (active, deactivated) | 
**billingEmail** | **string** | The billing email address associated with your company account. | 
**planName** | **string** | The name of your booked plan. | [optional] 
**planExpires** | [**\DateTime**](\DateTime.md) | The point in time at which your current plan expires. | [optional] 
**applicationLimit** | **int** | The maximum number of Applications covered by your plan. | [optional] 
**userLimit** | **int** | The maximum number of Campaign Manager Users covered by your plan. | [optional] 
**campaignLimit** | **int** | The maximum number of Campaigns covered by your plan. | [optional] 
**apiLimit** | **int** | The maximum number of Integration API calls covered by your plan per billing period. | [optional] 
**applicationCount** | **int** | The current number of Applications in your account. | 
**userCount** | **int** | The current number of Campaign Manager Users in your account. | 
**campaignsActiveCount** | **int** | The current number of active Campaigns in your account. | 
**campaignsInactiveCount** | **int** | The current number of inactive Campaigns in your account. | 
**attributes** | [**object**](.md) | Arbitrary properties associated with this campaign | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


