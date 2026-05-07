# # CardAddedDeductedPointsBalancesNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cardIdentifier** | **string** | Loyalty card identification number. | 
**employeeName** | **string** | The name of the employee who added or deducted points. | 
**loyaltyProgramID** | **int** | The ID of the loyalty program. | 
**notificationType** | **string** | The type of notification. | 
**profileIntegrationIDs** | **string[]** | The integration ID of the customer profile to whom points were added or deducted. | 
**sessionIntegrationID** | **string** | The integration ID of the session through which the points were earned or lost. | 
**subledgerID** | **string** | The ID of the subledger within the loyalty program where these points were added or deducted. | 
**typeOfChange** | **string** | The notification source, that is, it indicates whether the points were added or deducted via one of the following routes: - [The Campaign Manager](/docs/product/getting-started) - [Management API](/management-api#tag/Loyalty) - [Rule Engine](/docs/product/applications/evaluation-order-for-rules-and-filters) | 
**userID** | **int** | The ID of the employee who added or deducted points. | 
**usersPerCardLimit** | **int** | The max amount of user profiles with whom a card can be shared. This can be set to &#x60;0&#x60; for no limit. | 
**actions** | [**\TalonOne\Client\Model\AddedDeductedPointsBalancesAction[]**](AddedDeductedPointsBalancesAction.md) | The list of actions that have been triggered in the loyalty program. | 
**currentPoints** | **float** | The current points balance. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


