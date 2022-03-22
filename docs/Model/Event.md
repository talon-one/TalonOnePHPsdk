# # Event

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**applicationId** | **int** | The ID of the application that owns this entity. | 
**profileId** | **string** | ID of the customers profile as used within this Talon.One account.  **Note:** If the customer does not yet have a known profileId, we recommend you use a guest profileId. | [optional] 
**type** | **string** | A string representing the event. Must not be a reserved event name. | 
**attributes** | [**object**](.md) | Arbitrary additional JSON data associated with the event. | 
**sessionId** | **string** | The ID of the session that this event occurred in. | [optional] 
**effects** | **object[]** | An array of \&quot;effects\&quot; that must be applied in response to this event. See the list of [effects](/docs/dev/integration-api/api-effects). | 
**ledgerEntries** | [**\TalonOne\Client\Model\LedgerEntry[]**](LedgerEntry.md) | Ledger entries for the event. | 
**meta** | [**\TalonOne\Client\Model\Meta**](Meta.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


