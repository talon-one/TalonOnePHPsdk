# # CardAddedDeductedPointsNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profileIntegrationIDs** | **string[]** | The integration ID of the customer profile to whom points were added or deducted. | 
**loyaltyProgramID** | **int** | The ID of the loyalty program. | 
**subledgerID** | **string** | The ID of the subledger within the loyalty program where these points were added or deducted. | 
**amount** | **float** | The amount of added or deducted loyalty points. | 
**reason** | **string** | The reason for the points addition or deduction. | 
**typeOfChange** | **string** | The notification source, that is, it indicates whether the points were added or deducted via one of the following routes:  - [The Campaign Manager](/docs/product/getting-started)  - [Management API](/management-api#tag/Loyalty)  - [Rule Engine](/docs/product/applications/evaluation-order-for-rules-and-filters) | 
**employeeName** | **string** | The name of the employee who added or deducted points. | 
**userID** | **int** | The ID of the employee who added or deducted points. | 
**operation** | **string** | The action (addition or deduction) made with loyalty points. | 
**startDate** | [**\DateTime**](\DateTime.md) | The start date for loyalty points. | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | The expiration date for loyalty points. | [optional] 
**sessionIntegrationID** | **string** | The integration ID of the session through which the points were earned or lost. | 
**cardIdentifier** | **string** | Loyalty card identification number. | 
**usersPerCardLimit** | **int** | The max amount of user profiles with whom a card can be shared. This can be set to &#x60;0&#x60; for no limit. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


