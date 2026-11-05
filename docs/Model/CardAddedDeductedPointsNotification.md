# # CardAddedDeductedPointsNotification

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
**typeOfChange** | **string** | The notification source, that is, it indicates whether the points were added or deducted via one of the following routes:  - [The Campaign Manager](/docs/product/getting-started)  - [Management API](/management-api#tag/Loyalty)  - [Rule Engine](/docs/product/applications/evaluation-order-for-rules-and-filters) | 
**userID** | **int** | The ID of the employee who added or deducted points. | 
**usersPerCardLimit** | **int** | The max amount of user profiles with whom a card can be shared. This can be set to &#x60;0&#x60; for no limit. | 
**amount** | **float** | The amount of added or deducted loyalty points. | 
**expiryDate** | [**\DateTime**](\DateTime.md) | The expiration date for loyalty points. | [optional] 
**operation** | **string** | The action (addition or subtraction) made with loyalty points. | 
**reason** | **string** | The reason for the points addition or deduction. | 
**startDate** | [**\DateTime**](\DateTime.md) | The start date for loyalty points. | [optional] 
**transactionUUID** | **string** | The identifier of the transaction in the loyalty ledger. | 
**created** | [**\DateTime**](\DateTime.md) | The timestamp when the loyalty transaction occurred. | [optional] 
**awaitsActivation** | **bool** | Indicates whether the points have an action-based start date. This property is returned only for point transactions with an action-based start date. | [optional] 
**validityDuration** | **string** | The duration for which the points remain active, relative to the activation date.  **Note**: This only applies to points for which &#x60;AwaitsActivation&#x60; is &#x60;true&#x60; and &#x60;ExpiryDate&#x60; is not set. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


