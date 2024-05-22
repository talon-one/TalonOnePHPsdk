# # NewApplicationAPIKey

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | Title of the API key. | 
**expires** | [**\DateTime**](\DateTime.md) | The date the API key expires. | 
**platform** | **string** | The third-party platform the API key is valid for. Use &#x60;none&#x60; for a generic API key to be used from your own integration layer. | [optional] 
**type** | **string** | The API key type. Can be empty or &#x60;staging&#x60;.  Staging API keys can only be used for dry requests with the [Update customer session](https://docs.talon.one/integration-api#tag/Customer-sessions/operation/updateCustomerSessionV2) endpoint, [Update customer profile](https://docs.talon.one/integration-api#tag/Customer-profiles/operation/updateCustomerProfileV2) endpoint, and [Track event](https://docs.talon.one/integration-api#tag/Events/operation/trackEventV2) endpoint.  When using the _Update customer profile_ endpoint with a staging API key, the query parameter &#x60;runRuleEngine&#x60; must be &#x60;true&#x60;. | [optional] 
**timeOffset** | **int** | A time offset in nanoseconds associated with the API key. When making a request using the API key, rule evaluation is based on a date that is calculated by adding the offset to the current date. | [optional] 
**id** | **int** | ID of the API Key. | 
**createdBy** | **int** | ID of user who created. | 
**accountID** | **int** | ID of account the key is used for. | 
**applicationID** | **int** | ID of application the key is used for. | 
**created** | [**\DateTime**](\DateTime.md) | The date the API key was created. | 
**key** | **string** | The API key. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


