# # LedgerEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | 
**profileId** | **string** | ID of the customer profile set by your integration layer.  **Note:** If the customer does not yet have a known &#x60;profileId&#x60;, we recommend you use a guest &#x60;profileId&#x60;. | 
**accountId** | **int** | The ID of the Talon.One account that owns this profile. | 
**loyaltyProgramId** | **int** | ID of the ledger. | 
**eventId** | **int** | ID of the related event. | 
**amount** | **int** | Amount of loyalty points. | 
**reason** | **string** | reason for awarding/deducting points. | 
**expiryDate** | [**\DateTime**](\DateTime.md) | Expiration date of the points. | 
**referenceId** | **int** | The ID of the balancing ledgerEntry. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


