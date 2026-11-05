# # OutboundMessage

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
**request** | [**\TalonOne\Client\Model\OutboundLogRequest**](OutboundLogRequest.md) |  | 
**firstLogAt** | [**\DateTime**](\DateTime.md) | Timestamp of the first log entry for this message. | 
**lastLogAt** | [**\DateTime**](\DateTime.md) | Timestamp of the last log entry for this message. | 
**lastResponseCode** | **int** | HTTP status code from the latest response. | [optional] 
**status** | **string** |  | 
**retryCount** | **int** | Number of retries. | [optional] 
**responses** | [**\TalonOne\Client\Model\OutboundMessageResponse[]**](OutboundMessageResponse.md) | Log entries for this message. Omitted when &#x60;includeLogs&#x3D;false&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


