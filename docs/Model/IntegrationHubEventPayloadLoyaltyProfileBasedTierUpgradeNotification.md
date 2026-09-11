# # IntegrationHubEventPayloadLoyaltyProfileBasedTierUpgradeNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**eventId** | **int** | The ID of the integration hub event. Return this value in the delivery-status callback to mark the event delivered or failed. | 
**profileIntegrationID** | **string** |  | 
**loyaltyProgramID** | **int** |  | 
**loyaltyProgramName** | **string** | The name of the loyalty program. | 
**subledgerID** | **string** |  | 
**sourceOfEvent** | **string** |  | 
**currentTier** | **string** | The name of the customer&#39;s current tier. | 
**currentPoints** | **float** |  | 
**oldTier** | **string** |  | [optional] 
**pointsRequiredToTheNextTier** | **float** |  | [optional] 
**nextTier** | **string** |  | [optional] 
**tierExpirationDate** | [**\DateTime**](\DateTime.md) |  | [optional] 
**timestampOfTierChange** | [**\DateTime**](\DateTime.md) |  | [optional] 
**publishedAt** | [**\DateTime**](\DateTime.md) | Timestamp when the event was published. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


