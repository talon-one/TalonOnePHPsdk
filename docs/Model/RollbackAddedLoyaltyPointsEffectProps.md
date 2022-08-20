# # RollbackAddedLoyaltyPointsEffectProps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**programId** | **int** | The ID of the loyalty program where the points were originally added. | 
**subLedgerId** | **string** | The ID of the subledger within the loyalty program where these points were originally added. | 
**value** | **float** | The amount of points that were rolled back. | 
**recipientIntegrationId** | **string** | The user for whom these points were originally added. | 
**transactionUUID** | **string** | The identifier of &#39;deduction&#39; entry added to the ledger as the &#x60;addLoyaltyPoints&#x60; effect is rolled back. | 
**cartItemPosition** | **float** | The index of the item in the cart items for which the loyalty points were rolled back. | [optional] 
**cartItemSubPosition** | **float** | The sub-position is returned when [cart item flattening](https://docs.talon.one/docs/product/campaigns/campaign-evaluation/#flattened-cart-items) is enabled. It indicates to which item the loyalty points were rolled back, for cart items with &#x60;quantity&#x60; &gt; 1. | [optional] 
**cardIdentifier** | **string** | The card on which these points were originally added. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


