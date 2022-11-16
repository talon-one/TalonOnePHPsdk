# # AddLoyaltyPointsEffectProps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The reason of the point addition. | 
**programId** | **int** | The ID of the loyalty program where these points were added. | 
**subLedgerId** | **string** | The ID of the subledger within the loyalty program where these points were added. | 
**value** | **float** | The amount of points that were added. | 
**desiredValue** | **float** | The original amount of loyalty points to be awarded. | [optional] 
**recipientIntegrationId** | **string** | The user for whom these points were added. | 
**startDate** | [**\DateTime**](\DateTime.md) | Date after which points will be valid. | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Date after which points will expire. | [optional] 
**transactionUUID** | **string** | The identifier of this addition in the loyalty ledger. | 
**cartItemPosition** | **float** | The index of the item in the cart items list on which the loyal points addition should be applied. | [optional] 
**cartItemSubPosition** | **float** | The sub position is triggered when application flattening is enabled. It indicates to which item the loyalty points addition applies, for cart items with &#x60;quantity&#x60; &gt; 1. | [optional] 
**cardIdentifier** | **string** | The card on which these points were added. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


