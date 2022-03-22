# # IntegrationEventV2Request

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profileId** | **string** | ID of the customers profile as used within this Talon.One account.  **Note:** If the customer does not yet have a known profileId, we recommend you use a guest profileId. | [optional] 
**type** | **string** | A string representing the event. Must not be a reserved event name. | 
**attributes** | [**object**](.md) | Arbitrary additional JSON data associated with the event. | [optional] 
**responseContent** | **string[]** | Optional list of requested information to be present on the response related to the tracking custom event. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

