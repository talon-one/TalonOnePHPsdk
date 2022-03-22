# # Collection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**modified** | [**\DateTime**](\DateTime.md) | The exact moment this entity was last modified. | 
**description** | **string** | A short description of the purpose of this collection. | [optional] 
**subscribedApplicationsIds** | **int[]** | A list of the IDs of the Applications where this collection is enabled. | [optional] 
**name** | **string** | The name of this collection. | 
**payload** | **string[]** | The content of the collection. If this property&#39;s value is &#x60;null&#x60;, the collection&#39;s content is too large to be returned in this property.  Instead, use the [export collection endpoint](https://docs.talon.one/management-api/#operation/exportCollectionItems) to get the content of the collection. | [optional] 
**modifiedBy** | **int** | ID of the user who last updated this effect if available. | [optional] 
**createdBy** | **int** | ID of the user who created this effect. | 
**applicationId** | **int** | The ID of the application that owns this entity. | [optional] 
**campaignId** | **int** | The ID of the campaign that owns this entity. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


