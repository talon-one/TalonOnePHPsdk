# # CampaignCollection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. Not to be confused with the Integration ID, which is set by your integration layer and used in most endpoints. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**modified** | [**\DateTime**](\DateTime.md) | The exact moment this entity was last modified. | 
**description** | **string** | A short description of the purpose of this collection. | [optional] 
**name** | **string** | The name of this collection. | 
**modifiedBy** | **int** | ID of the user who last updated this effect if available. | [optional] 
**createdBy** | **int** | ID of the user who created this effect. | 
**applicationId** | **int** | The ID of the Application that owns this entity. | [optional] 
**campaignId** | **int** | The ID of the campaign that owns this entity. | [optional] 
**payload** | **string[]** | The content of the collection. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


