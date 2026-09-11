# # RollbackAddedLoyaltyPointsEffectProps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**programId** | **int** | The ID of the loyalty program where these points were rolled back. | 
**subLedgerId** | **string** | The ID of the subledger within the loyalty program where these points were rolled back. | 
**value** | **float** | The amount of points that were rolled back. | 
**recipientIntegrationId** | **string** | The user for whom these points were rolled back. | 
**transactionUUID** | **string** | The identifier of this loyalty point transaction. | 
**cartItemPosition** | **float** | (_Add points per cart item_ only.) The index of the item in the &#x60;cartItem&#x60; object for which these points were rolled back. | [optional] 
**cartItemSubPosition** | **float** | (_Add points per cart item_ ) The index of the item unit in its line item. | [optional] 
**cardIdentifier** | **string** | The identifier of the loyalty card, which must match the regular expression &#x60;^[A-Za-z0-9._%+@-]+$&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


