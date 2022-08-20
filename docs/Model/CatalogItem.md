# # CatalogItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. Not to be confused with the Integration ID, which is set by your integration layer and used in most endpoints. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**sku** | **string** | The stock keeping unit of the item. | 
**price** | **float** | Price of the item. | [optional] 
**catalogid** | **int** | The ID of the catalog the item belongs to. | 
**version** | **int** | The version of the catalog item. | 
**attributes** | [**\TalonOne\Client\Model\ItemAttribute[]**](ItemAttribute.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


