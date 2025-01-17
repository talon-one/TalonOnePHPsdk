# # MessageLogEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the message. | 
**service** | **string** | Name of the service that generated the log entry. | 
**changeType** | **string** | Type of change that triggered the notification. | [optional] 
**notificationId** | **int** | ID of the notification. | [optional] 
**notificationName** | **string** | The name of the notification. | [optional] 
**webhookId** | **int** | ID of the webhook. | [optional] 
**webhookName** | **string** | The name of the webhook. | [optional] 
**request** | [**\TalonOne\Client\Model\MessageLogRequest**](MessageLogRequest.md) |  | [optional] 
**response** | [**\TalonOne\Client\Model\MessageLogResponse**](MessageLogResponse.md) |  | [optional] 
**createdAt** | [**\DateTime**](\DateTime.md) | Timestamp when the log entry was created. | 
**entityType** | **string** | The entity type the log is related to. | 
**url** | **string** | The target URL of the request. | [optional] 
**applicationId** | **int** | Identifier of the Application. | [optional] 
**loyaltyProgramId** | **int** | Identifier of the loyalty program. | [optional] 
**campaignId** | **int** | Identifier of the campaign. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


