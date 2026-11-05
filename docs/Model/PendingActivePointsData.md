# # PendingActivePointsData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**loyaltyProgramID** | **int** | The ID of the loyalty program. | 
**subledgerID** | **string** | The ID of the subledger, when applicable. If this field is empty, the main ledger is used. | [default to '']
**customerProfileID** | **string** | The integration ID of the customer profile whose loyalty points are becoming active. | 
**points** | **float** | The amount of pending loyalty points becoming active. | 
**activeOn** | [**\DateTime**](\DateTime.md) | The date and time the loyalty points become active. | [optional] 
**expireOn** | [**\DateTime**](\DateTime.md) | The date and time the loyalty points expire. | [optional] 
**sessionIntegrationID** | **string** | The integration ID of the session through which the points were earned. | [optional] 
**created** | [**\DateTime**](\DateTime.md) | The timestamp when the loyalty transaction occurred. | [optional] 
**awaitsActivation** | **bool** | Indicates whether the points have an action-based start date. This property is returned only for point transactions with an action-based start date. | [optional] 
**validityDuration** | **string** | The duration for which the points remain active, relative to the activation date.  **Note**: This only applies to points for which &#x60;AwaitsActivation&#x60; is &#x60;true&#x60; and &#x60;ExpireOn&#x60; is not set. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


