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
**cartItemSubPosition** | **float** | For cart items with &#x60;quantity&#x60; &gt; 1, the sub-position indicates to which item the loyalty points were rolled back. | [optional] 
**cardIdentifier** | **string** | The alphanumeric identifier of the loyalty card. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


