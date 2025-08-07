# # PriceType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | 
**accountId** | **int** | The ID of the account that owns this price type. | [optional] 
**name** | **string** | The API name of the price type. This is an immutable value. | 
**title** | **string** | The title of the price type. | 
**description** | **string** | The description of the price type. | [optional] 
**modified** | [**\DateTime**](\DateTime.md) | The date and time when the price type was last modified. | 
**subscribedCatalogsIds** | **int[]** | A list of the IDs of the catalogs that are subscribed to this price type. | 
**targetedAudiencesIds** | **int[]** | A list of the IDs of the audiences that are targeted by this price type. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


