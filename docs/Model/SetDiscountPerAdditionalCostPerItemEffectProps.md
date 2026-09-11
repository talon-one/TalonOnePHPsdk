# # SetDiscountPerAdditionalCostPerItemEffectProps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The description of this discount. &#x60;#number&#x60; is appended to the name. It is equal to the &#x60;position&#x60; property. | 
**additionalCostId** | **int** | The identifier of the additional cost to be discounted. | 
**value** | **float** | The monetary value of the effective discount applied to the item&#39;s additional cost. | 
**position** | **float** | The index of the item in the &#x60;cartItem&#x60; object containing the additional cost that this discount applies to. | 
**subPosition** | **float** | The index of the item unit in its line item. | [optional] 
**additionalCost** | **string** | The API name of the additional cost to be discounted. | 
**desiredValue** | **float** | _[(Partial discounts enabled only)](https://docs.talon.one/docs/product/applications/manage-general-settings#partial-discounts)_. The monetary value of the discount to be applied to the additional cost without considering budget limitations. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


