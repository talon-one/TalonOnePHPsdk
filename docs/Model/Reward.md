# # Reward

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**name** | **string** | The name of the reward. | 
**apiName** | **string** | A unique identifier used to reference the reward in API integrations. | 
**description** | **string** | A description of the reward. | [optional] 
**applicationIds** | **int[]** | The IDs of the Applications this reward is connected to.   **Note**: Currently, a reward can only be connected to one Application. | 
**sandbox** | **bool** | Indicates if this is a live or sandbox reward. Rewards of a given type can only be connected to Applications of the same type. | 
**status** | **string** | The status of the reward. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


