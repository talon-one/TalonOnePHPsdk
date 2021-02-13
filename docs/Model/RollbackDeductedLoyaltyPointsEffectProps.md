# # RollbackDeductedLoyaltyPointsEffectProps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**programId** | **int** | The ID of the loyalty program where these points were reimbursed | 
**subLedgerId** | **string** | The ID of the subledger within the loyalty program where these points were reimbursed | 
**value** | **float** | The amount of reimbursed points that were added | 
**recipientIntegrationId** | **string** | The user for whom these points were reimbursed | 
**startDate** | [**\DateTime**](\DateTime.md) | Date after which the reimbursed points will be valid | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Date after which the reimbursed points will expire | [optional] 
**transactionUUID** | **string** | The identifier of &#39;addition&#39; entries added to the ledger as the &#x60;deductLoyaltyPoints&#x60; effect is rolled back | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


