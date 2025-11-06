# # BestPriorPriceRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**skus** | **string[]** | List of product SKUs to check when determining the best prior price. | 
**timeframeEndDate** | [**\DateTime**](\DateTime.md) | The end date and time that defines the latest time for retrieving historical SKU prices. | 
**timeframe** | **int** | The number of days prior to the timeframeEndDate. Only prices within this look back period are considered for the best prior price evaluation. | 
**strictEndDate** | **bool** | Indicates whether the timeframe includes the start of the current sale. - When &#x60;false&#x60;, the timeframe includes the start date of the current sale. - When &#x60;true&#x60;, the timeframe striclty uses the number of days specified in &#x60;timeframe&#x60;. | 
**target** | [**\TalonOne\Client\Model\BestPriorPriceRequestTarget**](BestPriorPriceRequestTarget.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


