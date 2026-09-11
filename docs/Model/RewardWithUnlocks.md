# # RewardWithUnlocks

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique ID of the reward. | 
**integrationId** | **string** | A unique identifier used to reference the reward in API integrations. | 
**name** | **string** | The customer-facing name of the reward. | 
**description** | **string** | Customer-facing description of the reward. | [optional] 
**rule** | [**\TalonOne\Client\Model\RuleMetadata**](RuleMetadata.md) |  | 
**unlocked** | [**\TalonOne\Client\Model\CustomerReward[]**](CustomerReward.md) | The customer profile&#39;s unlocks of this reward that are not yet &#x60;used&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


