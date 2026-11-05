# # IntegrationHubEventPayloadLoyaltyProfileBasedPointsChangedNotificationAction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **float** |  | 
**reason** | **string** |  | [optional] 
**operation** | **string** |  | 
**startDate** | [**\DateTime**](\DateTime.md) |  | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) |  | [optional] 
**transactionUUID** | **string** | The identifier of the transaction in the loyalty ledger. | 
**created** | [**\DateTime**](\DateTime.md) | The timestamp when the loyalty transaction occurred. | [optional] 
**awaitsActivation** | **bool** | Indicates whether the points have an action-based start date. This property is returned only for point transactions with an action-based start date. | [optional] 
**validityDuration** | **string** | The duration for which the points remain active, relative to the activation date.  **Note**: This only applies to points for which &#x60;AwaitsActivation&#x60; is &#x60;true&#x60; and &#x60;ExpiryDate&#x60; is not set. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


