# # AddedDeductedPointsNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**employeeName** | **string** | The name of the employee who added or deducted points. | 
**loyaltyProgramID** | **int** | The ID of the loyalty program. | 
**notificationType** | **string** | The type of notification. | 
**profileIntegrationID** | **string** | The integration ID of the customer profile to whom points were added or deducted. | 
**sessionIntegrationID** | **string** | The integration ID of the session through which the points were earned or lost. | 
**subledgerID** | **string** | The ID of the subledger within the loyalty program where these points were added. | 
**typeOfChange** | **string** | The notification source, that is, it indicates whether the points were added or deducted via one of the following routes:  - [The Campaign Manager](/docs/product/getting-started)  - [Management API](/management-api#tag/Loyalty)  - [Rule Engine](/docs/product/applications/evaluation-order-for-rules-and-filters) | 
**userID** | **int** | The ID of the employee who added or deducted points. | 
**amount** | **float** | The amount of added or deducted loyalty points. | 
**expiryDate** | [**\DateTime**](\DateTime.md) | The expiration date for loyalty points. | [optional] 
**operation** | **string** | The action (addition or subtraction) made with loyalty points. | 
**reason** | **string** | The reason for the points addition or deduction. | 
**startDate** | [**\DateTime**](\DateTime.md) | The start date for loyalty points. | [optional] 
**transactionUUID** | **string** | The identifier of the transaction in the loyalty ledger. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


