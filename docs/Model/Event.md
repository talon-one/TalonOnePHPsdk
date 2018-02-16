# Event

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**application_id** | **int** | The ID of the application that owns this entity. | 
**profile_id** | **string** | ID of the customers profile as used within this Talon.One account. May be omitted or set to the empty string if the customer does not yet have a known profile ID. | [optional] 
**session_id** | **string** | The ID of the session that this event occurred in. | 
**type** | **string** | A string representing the event. Must not be a reserved event name. | 
**attributes** | **object** | Arbitrary additional JSON data associated with the event. | 
**effects** | [**object[][]**](array.md) | An array of \&quot;effects\&quot; that must be applied in response to this event. Example effects include &#x60;addItemToCart&#x60; or &#x60;setDiscount&#x60;. | 
**ledger_entries** | [**\Swagger\Client\Model\LedgerEntry[]**](LedgerEntry.md) | Ledger entries for the event. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


