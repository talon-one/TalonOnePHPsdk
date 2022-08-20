# # Change

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. Not to be confused with the Integration ID, which is set by your integration layer and used in most endpoints. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**userId** | **int** | The ID of the account that owns this entity. | 
**applicationId** | **int** | ID of application associated with change. | [optional] 
**entity** | **string** | API endpoint on which the change was initiated. | 
**old** | [**object**](.md) | Resource before the change occurred. | [optional] 
**new** | [**object**](.md) | Resource after the change occurred. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


