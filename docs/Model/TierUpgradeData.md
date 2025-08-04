# # TierUpgradeData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customerProfileID** | **string** | The integration ID of the customer profile whose tier was upgraded. | 
**loyaltyProgramID** | **int** | The ID of the loyalty program. | 
**subledgerID** | **string** | The ID of the subledger, when applicable. If this field is empty, the main ledger is used. | [default to '']
**currentTier** | **string** | The name of the customer&#39;s current tier. | 
**currentPoints** | **float** | The number of points the customer had at the time of tier upgrade. | 
**oldTier** | **string** | The name of the customer&#39;s previous tier. | [optional] 
**pointsRequiredToTheNextTier** | **float** | The number of points needed for a customer to reach the next tier. | [optional] 
**nextTier** | **string** | The name of the customer&#39;s next tier. | [optional] 
**tierExpirationDate** | [**\DateTime**](\DateTime.md) | The exact date and time the tier expires. | 
**timestampOfTierChange** | [**\DateTime**](\DateTime.md) | The exact date and time the tier was changed. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


