# # IntegrationHubFlowConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**apiKey** | **string** |  | 
**workerCount** | **int** | Number of IntegrationHub workers to run in parallel for this flow (maximum 500). | [optional] [default to 10]
**maxEventsPerMessage** | **int** | Maximum number of events to send in a single message to IntegrationHub. | [optional] [default to 1000]
**maxRetries** | **int** | Maximum number of retries for a IntegrationHub event before it is ignored. | [optional] [default to 10]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


