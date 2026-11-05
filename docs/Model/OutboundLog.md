# # OutboundLog

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uuid** | **string** | UUID of the outbound message. | 
**notificationId** | **int** | ID of the notification that produced the outbound request. | [optional] 
**notificationName** | **string** | Name of the notification that produced the outbound request. | [optional] 
**webhookId** | **int** | ID of the webhook that produced the outbound request. | [optional] 
**webhookName** | **string** | The name of the webhook that produced the outbound request. | [optional] 
**notificationType** | **string** | Type of notification that produced the outbound request. | 
**applicationId** | **int** | ID of the Application associated with the outbound request. | [optional] 
**loyaltyProgramId** | **int** | ID of the loyalty program associated with the outbound request. | [optional] 
**request** | [**\TalonOne\Client\Model\OutboundLogRequest**](OutboundLogRequest.md) |  | [optional] 
**createdAt** | [**\DateTime**](\DateTime.md) | Timestamp when the log entry was created. | 
**processingTimeMs** | **int** | Processing time of the outbound request in milliseconds. | 
**response** | [**\TalonOne\Client\Model\OutboundLogResponse**](OutboundLogResponse.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


