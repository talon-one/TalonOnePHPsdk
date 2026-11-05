# # BoostLoyaltyTierEffectProps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**programId** | **int** | The ID of the loyalty program. | 
**subLedgerId** | **string** | The ID of the subledger within the loyalty program. | 
**tierName** | **string** | The name of the tier to which the customer is temporarily boosted. | 
**reason** | **string** | A reason for the tier boost. | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | The date when the tier boost expires. | 
**boostUuid** | **string** | The unique identifier of the tier boost. Used to match the boost to its rollback effect when a session is cancelled. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


