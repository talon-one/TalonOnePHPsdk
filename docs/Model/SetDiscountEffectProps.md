# # SetDiscountEffectProps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name or description of this discount. | 
**value** | **float** | The monetary value of the effective discount. | 
**scope** | **string** | What the discount applies to. Possible values:  - &#x60;cartItems&#x60;: Discount on the price of the items. - &#x60;additionalCosts&#x60;: Discount on the [additional costs](https://docs.talon.one/docs/product/account/dev-tools/manage-additional-costs) of the items. - &#x60;sessionTotal&#x60;: Discount on the total value of the customer session.  **Note:** [Cascading discounts](https://docs.talon.one/docs/product/applications/manage-general-settings#cascading-discounts) must be enabled for this property to be returned. | [optional] 
**desiredValue** | **float** | _(Partial discounts enabled only)_ The monetary value of the discount to be applied without considering budget limitations. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


