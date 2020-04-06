# # LedgerEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**profileId** | **string** | ID of the customers profile as used within this Talon.One account. May be omitted or set to the empty string if the customer does not yet have a known profile ID. | 
**accountId** | **int** | The ID of the Talon.One account that owns this profile. | 
**loyaltyProgramId** | **int** | ID of the ledger | 
**eventId** | **int** | ID of the related event | 
**amount** | **int** | Amount of loyalty points | 
**reason** | **string** | reason for awarding/deducting points | 
**expiryDate** | [**\DateTime**](\DateTime.md) | Expiry date of the points | 
**referenceId** | **int** | The ID of the balancing ledgerEntry | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


