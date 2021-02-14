# # AddLoyaltyPointsEffectProps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name/description of this loyalty point addition | 
**programId** | **int** | The ID of the loyalty program where these points were added | 
**subLedgerId** | **string** | The ID of the subledger within the loyalty program where these points were added | 
**value** | **float** | The amount of points that were added | 
**recipientIntegrationId** | **string** | The user for whom these points were added | 
**startDate** | [**\DateTime**](\DateTime.md) | Date after which points will be valid | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Date after which points will expire | [optional] 
**transactionUUID** | **string** | The identifier of this addition in the loyalty ledger | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


