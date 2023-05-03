# # SetDiscountPerItemEffectProps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the discount. Contains a hashtag character indicating the index of the position of the item the discount applies to. It is identical to the value of the &#x60;position&#x60; property. | 
**value** | **float** | The total monetary value of the discount. | 
**position** | **float** | The index of the item in the cart items list on which this discount should be applied. | 
**subPosition** | **float** | Only used when [cart item flattening](https://docs.talon.one/docs/product/campaigns/campaign-evaluation#flattening) is enabled. Indicates which item the discount applies to for cart items with &#x60;quantity&#x60; &gt; 1. | [optional] 
**desiredValue** | **float** | The original value of the discount. | [optional] 
**scope** | **string** | The scope of the discount: - &#x60;additionalCosts&#x60;: The discount applies to all the additional costs of the item. - &#x60;itemTotal&#x60;: The discount applies to the price of the item + the additional costs of the item. - &#x60;price&#x60;: The discount applies to the price of the item. | [optional] 
**totalDiscount** | **float** | The total discount given if this effect is a result of a prorated discount. | [optional] 
**desiredTotalDiscount** | **float** | The original total discount to give if this effect is a result of a prorated discount. | [optional] 
**bundleIndex** | **int** | The position of the bundle in a list of item bundles created from the same bundle definition. | [optional] 
**bundleName** | **string** | The name of the bundle definition. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


