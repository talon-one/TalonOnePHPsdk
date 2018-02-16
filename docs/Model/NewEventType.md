# NewEventType

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**application_ids** | **int[]** | The IDs of the applications that are related to this entity. | 
**title** | **string** | The human-friendly display name for this event type. Use a short, past-tense, description of the event. | 
**name** | **string** | The machine-friendly canonical name for this event type. This will be used in URLs, and cannot be changed after an event type has been created. | 
**description** | **string** | An explanation of when the event type is triggered. Write this with a campaign manager in mind. For example:  &gt; The \&quot;Payment Accepted\&quot; event is triggered after successful processing of a payment by our payment gateway. | 
**mime_type** | **string** | This defines how the request payload will be parsed before your handler code is run. | 
**example_payload** | **string** | It is often helpful to include an example payload with the event type definition for documentation purposes. | [optional] 
**schema** | **object** | It is strongly recommended to define a JSON schema that will be used to perform structural validation of request payloads after parsing. | [optional] 
**handler_language** | **string** | The language of the handler code. Currently only &#x60;\&quot;talang\&quot;&#x60; is supported. | [optional] 
**handler** | **string** | Code that will be run after successful parsing &amp; validation of the payload for this event. This code _may_ choose to evaluate campaign rules. | 
**version** | **int** | The version of this event type. When updating an existing event type this must be **exactly** &#x60;currentVersion + 1&#x60;. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


