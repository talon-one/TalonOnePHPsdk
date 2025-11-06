# # SetLoyaltyPointsExpiryDateEffectProps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**programId** | **int** | ID of the loyalty program that contains these points. | 
**subLedgerId** | **string** | API name of the loyalty program subledger that contains these points. | 
**newExpiryDate** | [**\DateTime**](\DateTime.md) | The specified expiry date and time for all active and pending point transactions in the loyalty program subledger. | 
**affectedTransactions** | [**\TalonOne\Client\Model\LoyaltyLedgerEntryExpiryDateChange[]**](LoyaltyLedgerEntryExpiryDateChange.md) | List of transactions affected by the expiry date update. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


