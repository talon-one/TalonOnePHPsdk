# # SetDiscountPerAdditionalCostPerItemEffectProps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name / description of this discount | 
**additionalCostId** | **int** | The ID of the additional cost. | 
**value** | **float** | The total monetary value of the discount. | 
**position** | **float** | The index of the item in the cart item list containing the additional cost to be discounted. | 
**subPosition** | **float** | For cart items with &#x60;quantity&#x60; &gt; 1, the sub position indicates which item the discount applies to. | [optional] 
**additionalCost** | **string** | The name of the additional cost. | 
**desiredValue** | **float** | Only with [partial discounts enabled](https://docs.talon.one/docs/product/campaigns/campaign-evaluation/#partial-discounts). Represents the monetary value of the discount to be applied to additional discount without considering budget limitations. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


