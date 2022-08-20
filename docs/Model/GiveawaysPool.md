# # GiveawaysPool

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. Not to be confused with the Integration ID, which is set by your integration layer and used in most endpoints. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**name** | **string** | The name of this giveaways pool. | 
**description** | **string** | The description of this giveaways pool. | [optional] 
**subscribedApplicationsIds** | **int[]** | A list of the IDs of the applications that this giveaways pool is enabled for. | [optional] 
**modified** | [**\DateTime**](\DateTime.md) | Timestamp of the most recent update to the giveaways pool. | [optional] 
**createdBy** | **int** | ID of the user who created this giveaways pool. | 
**modifiedBy** | **int** | ID of the user who last updated this giveaways pool if available. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


