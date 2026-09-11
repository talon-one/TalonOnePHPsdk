# # SetDiscountPerItemEffectProps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The description of this discount. &#x60;#number&#x60; is equal to the &#x60;position&#x60; property. | 
**value** | **float** | The monetary value of the effective discount applied to the item. | 
**position** | **float** | The index of the item in the &#x60;cartItem&#x60; object on which this discount should be applied. | 
**subPosition** | **float** | The index of the item unit in its line item. | [optional] 
**desiredValue** | **float** | _(Partial discounts enabled only)_ The monetary value of the discount to be applied to the item without considering budget limitations. | [optional] 
**scope** | **string** | What the discount applies to. Possible values:  - &#x60;price&#x60;: discount on the price of the item. - &#x60;additionalCosts&#x60;: discount on the [additional cost](https://docs.talon.one/docs/product/account/dev-tools/manage-additional-costs) of the item. - &#x60;itemTotal&#x60;: discount on the sum of price + additional cost of the item. | [optional] 
**totalDiscount** | **float** | _(Pro rata discounts only)_ The monetary value of the total effective discount | [optional] 
**desiredTotalDiscount** | **float** | _(Pro rata discounts only)_ The monetary value of the total discount to be applied without considering budget limitations | [optional] 
**bundleIndex** | **int** | _(Discounts with bundles only)_ The position of the specific item bundle in the list of bundles created from the same bundle definition. | [optional] 
**bundleName** | **string** | _(Discounts with bundles only)_ The name of the bundle definition. | [optional] 
**targetedItemPosition** | **float** | _(Discounting individual item in bundles only)_ The index of the targeted bundle item on which the applied discount is based. | [optional] 
**targetedItemSubPosition** | **float** | _(Discounting individual item in bundles only)_ The sub-position of the targeted bundle item on which the applied discount is based. | [optional] 
**excludedFromPriceHistory** | **bool** | When set to &#x60;true&#x60;, the applied discount is excluded from the item&#39;s price history. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


