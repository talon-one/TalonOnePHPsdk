# # BestPriorPrice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the historical price. | 
**sku** | **string** | sku | 
**observedAt** | [**\DateTime**](\DateTime.md) | The date and time when the price was observed. | 
**contextIds** | **string[]** | The identifiers of the relevant context (the sales events, e.g. \&quot;Spring Sale\&quot;, \&quot;Summer Sale\&quot;) at the time the price was observed. Includes the context IDs of any price adjustments and of the campaigns that influenced the final price. | 
**price** | **float** | Price of the item. | 
**metadata** | [**\TalonOne\Client\Model\BestPriorPriceMetadata**](BestPriorPriceMetadata.md) |  | 
**target** | [**object**](.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


