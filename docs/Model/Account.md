# Account

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**modified** | [**\DateTime**](\DateTime.md) | The exact moment this entity was last modified. | 
**company_name** | **string** |  | 
**domain_name** | **string** | Subdomain Name for yourcompany.talon.one | 
**state** | **string** | State of the account (trial, active, trial_expired) | 
**billing_email** | **string** | The billing email address associated with your company account. | 
**plan_name** | **string** | The name of your booked plan. | [optional] 
**plan_expires** | [**\DateTime**](\DateTime.md) | The point in time at which your current plan expires. | [optional] 
**application_limit** | **int** | The maximum number of Applications covered by your plan. | [optional] 
**user_limit** | **int** | The maximum number of Campaign Manager Users covered by your plan. | [optional] 
**campaign_limit** | **int** | The maximum number of Campaigns covered by your plan. | [optional] 
**api_limit** | **int** | The maximum number of Integration API calls covered by your plan per billing period. | [optional] 
**application_count** | **int** | The current number of Applications in your account. | [optional] 
**user_count** | **int** | The current number of Campaign Manager Users in your account. | [optional] 
**campaigns_active_count** | **int** | The current number of active Campaigns in your account. | [optional] 
**campaigns_inactive_count** | **int** | The current number of inactive Campaigns in your account. | [optional] 
**api_call_count** | **int** | The number of Integration API calls that have been made. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


