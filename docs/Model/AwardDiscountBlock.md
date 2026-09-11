# # AwardDiscountBlock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for this block. | [optional] [readonly] 
**type** | **string** | Identifies the block variant and determines which additional properties are present in it. | 
**tags** | **string[]** | Semantic labels attached to this block. | [optional] [readonly] 
**name** | **string** | The human-readable label attached to the discount. | 
**value** | [**object**](.md) | Discount amount. Either a numeric scalar or a &#x60;{{expression}}&#x60; string that resolves to a number at evaluation time. | 
**partial** | **bool** | Whether to apply a partial discount when the requested value exceeds the configured budget. | 
**target** | [**object**](.md) | Identifies the scope a discount applies to. The &#x60;type&#x60; field selects the concrete target variant. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


