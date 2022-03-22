# # SetDiscountPerItemEffectProps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the discount. Contains a hashtag character indicating the index of the position of the item the discount applies to. It is identical to the value of the &#x60;position&#x60; property. | 
**value** | **float** | The total monetary value of the discount. | 
**position** | **float** | The index of the item in the cart items list on which this discount should be applied. | 
**subPosition** | **float** | Only used when [cart item flattening](https://docs.talon.one/docs/product/campaigns/campaign-evaluation/#flattened-cart-items) is enabled. Indicates which item the discount applies to for cart items with &#x60;quantity&#x60; &gt; 1. | [optional] 
**desiredValue** | **float** | The original value of the discount | [optional] 
**totalDiscount** | **float** | The total discount given if this effect is a result of a prorated discount | [optional] 
**desiredTotalDiscount** | **float** | The original total discount to give if this effect is a result of a prorated discount | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


