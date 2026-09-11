# # IntegrationHubFlowResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the integration hub flow. | 
**integrationName** | **string** | Name of the integration. | [optional] 
**instanceName** | **string** | Name of the integration instance. | [optional] 
**createdAt** | [**\DateTime**](\DateTime.md) | Timestamp when the flow was created. | 
**disabledUntil** | [**\DateTime**](\DateTime.md) | Timestamp until which the flow is disabled. Null when the flow is active. | [optional] 
**applicationId** | **int** | ID of the application the flow is registered for. | [optional] 
**loyaltyProgramId** | **int** | ID of the loyalty program the flow is registered for. | [optional] 
**eventType** | **string** | The event type we want to register a flow for. | 
**config** | [**\TalonOne\Client\Model\IntegrationHubFlowConfigResponse**](IntegrationHubFlowConfigResponse.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


