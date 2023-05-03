# # CardLedgerTransactionLogEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created** | [**\DateTime**](\DateTime.md) | Date and time the loyalty card transaction occurred. | 
**programId** | **int** | ID of the loyalty program. | 
**cardIdentifier** | **string** | The alphanumeric identifier of the loyalty card. | 
**applicationId** | **int** | The ID of the Application that owns this entity. | [optional] 
**sessionId** | **int** | The **internal** ID of the session. | [optional] 
**customerSessionId** | **string** | ID of the customer session where the transaction occurred. | [optional] 
**type** | **string** | Type of transaction. Possible values:   - &#x60;addition&#x60;: Signifies added points.   - &#x60;subtraction&#x60;: Signifies deducted points. | 
**name** | **string** | Name or reason of the loyalty ledger transaction. | 
**startDate** | **string** | When points become active. Possible values:   - &#x60;immediate&#x60;: Points are immediately active.   - a timestamp value: Points become active at a given date and time. | 
**expiryDate** | **string** | Date when points expire. Possible values are:   - &#x60;unlimited&#x60;: Points have no expiration date.   - &#x60;timestamp value&#x60;: Points become active from the given date. | 
**subledgerId** | **string** | ID of the subledger. | 
**amount** | **float** | Amount of loyalty points added or deducted in the transaction. | 
**id** | **int** | ID of the loyalty ledger entry. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


