# # TierWillDowngradeData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customerProfileID** | **string** | The integration ID of the customer profile whose tier was downgraded. | 
**loyaltyProgramID** | **int** | The ID of the loyalty program. | 
**subledgerID** | **string** | The ID of the subledger, when applicable. If this field is empty, the main ledger is used. | [default to '']
**currentTier** | **string** | The name of the customer&#39;s current tier. | 
**currentPoints** | **float** | The number of points the customer will have after the tier downgrade. | 
**pointsRequiredToRemain** | **float** | The number of points needed for a customer to remain on the same tier. | 
**nextTier** | **string** | The name of the customer&#39;s next tier. | [optional] 
**tierExpirationDate** | [**\DateTime**](\DateTime.md) | The date and time the tier expires. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


