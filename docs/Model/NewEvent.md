# # NewEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**profileId** | **string** | ID of the customer profile set by your integration layer.  **Note:** If the customer does not yet have a known &#x60;profileId&#x60;, we recommend you use a guest &#x60;profileId&#x60;. | [optional] 
**storeIntegrationId** | **string** | The integration ID of the store. You choose this ID when you create a store. | [optional] 
**type** | **string** | A string representing the event. Must not be a reserved event name. | 
**attributes** | [**object**](.md) | Arbitrary additional JSON data associated with the event. | 
**sessionId** | **string** | The ID of the session that this event occurred in. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


