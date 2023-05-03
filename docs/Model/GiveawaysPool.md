# # GiveawaysPool

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**name** | **string** | The name of this giveaways pool. | 
**description** | **string** | The description of this giveaways pool. | [optional] 
**subscribedApplicationsIds** | **int[]** | A list of the IDs of the applications that this giveaways pool is enabled for. | [optional] 
**sandbox** | **bool** | Indicates if this program is a live or sandbox program. Programs of a given type can only be connected to Applications of the same type. | 
**modified** | [**\DateTime**](\DateTime.md) | Timestamp of the most recent update to the giveaways pool. | [optional] 
**createdBy** | **int** | ID of the user who created this giveaways pool. | 
**modifiedBy** | **int** | ID of the user who last updated this giveaways pool if available. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


