# # IntegrationHubEventPayloadLoyaltyProfileBasedPointsChangedNotification

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
**sessionIntegrationID** | **string** | The integration ID of the session through which the points were earned or lost. Only set when the change results from a rule engine execution; empty otherwise. | [optional] 
**employeeName** | **string** |  | [optional] 
**userID** | **int** |  | [optional] 
**currentPoints** | **float** |  | 
**actions** | [**\TalonOne\Client\Model\IntegrationHubEventPayloadLoyaltyProfileBasedPointsChangedNotificationAction[]**](IntegrationHubEventPayloadLoyaltyProfileBasedPointsChangedNotificationAction.md) |  | [optional] 
**publishedAt** | [**\DateTime**](\DateTime.md) | Timestamp when the event was published. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


