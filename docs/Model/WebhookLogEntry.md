# # WebhookLogEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | UUID reference of the webhook request | 
**integrationRequestUuid** | **string** | UUID reference of the integration request linked to this webhook request | 
**webhookId** | **int** | ID of the webhook that triggered the request | 
**applicationId** | **int** | ID of the application that triggered the webhook | [optional] 
**url** | **string** | Target url of request | 
**request** | **string** | Request message | 
**response** | **string** | Response message | [optional] 
**status** | **int** | HTTP status code of response | [optional] 
**requestTime** | [**\DateTime**](\DateTime.md) | Timestamp of request | 
**responseTime** | [**\DateTime**](\DateTime.md) | Timestamp of response | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


