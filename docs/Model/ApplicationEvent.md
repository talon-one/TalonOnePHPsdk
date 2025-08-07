# # ApplicationEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | 
**applicationId** | **int** | The ID of the Application that owns this entity. | 
**profileId** | **int** | The globally unique Talon.One ID of the customer that created this entity. | [optional] 
**storeId** | **int** | The ID of the store. | [optional] 
**storeIntegrationId** | **string** | The integration ID of the store. You choose this ID when you create a store. | [optional] 
**sessionId** | **int** | The globally unique Talon.One ID of the session that contains this event. | [optional] 
**type** | **string** | A string representing the event. Must not be a reserved event name. | 
**attributes** | [**object**](.md) | Additional JSON serialized data associated with the event. | 
**effects** | [**\TalonOne\Client\Model\Effect[]**](Effect.md) | An array containing the effects that were applied as a result of this event. | 
**ruleFailureReasons** | [**\TalonOne\Client\Model\RuleFailureReason[]**](RuleFailureReason.md) | An array containing the rule failure reasons which happened during this event. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


