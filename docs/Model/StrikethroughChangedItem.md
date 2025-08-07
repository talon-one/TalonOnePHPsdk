# # StrikethroughChangedItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of the event that triggered the strikethrough labeling. | 
**catalogId** | **int** | The ID of the catalog that the changed item belongs to. | 
**sku** | **string** | The unique SKU of the changed item. | 
**version** | **int** | The version of the changed item. | 
**price** | **float** | The price of the changed item. | 
**prices** | [**map[string,\TalonOne\Client\Model\PriceDetail]**](PriceDetail.md) | A map of keys and values representing the price types and related price adjustment details for this cart item.       The keys correspond to the &#x60;priceType&#x60; names. | [optional] 
**evaluatedAt** | [**\DateTime**](\DateTime.md) | The evaluation time of the changed item. | 
**effects** | [**\TalonOne\Client\Model\StrikethroughEffect[]**](StrikethroughEffect.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


