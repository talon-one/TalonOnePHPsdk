# # LedgerTransactionLogEntryIntegrationAPI

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created** | [**\DateTime**](\DateTime.md) | Date and time the loyalty card transaction occurred. | 
**programId** | **int** | ID of the loyalty program. | 
**customerSessionId** | **string** | ID of the customer session where the transaction occurred. | 
**type** | **string** | Type of transaction. Possible values are:   - &#x60;addition&#x60;: Points were added.   - &#x60;subtraction&#x60;: Points were subtracted. | 
**name** | **string** | Name or reason of the loyalty ledger transaction. | 
**startDate** | **string** | Date when points become active. Possible values are:   - &#x60;immediate&#x60;: Points are active immediately.   - &#x60;timestamp value&#x60;: Points become active from the given date. | 
**expiryDate** | **string** | Date when points expire. Possible values are:   - &#x60;unlimited&#x60;: Points have no expiration date.   - &#x60;timestamp value&#x60;: Points expire on the given date. | 
**subledgerId** | **string** | ID of the subledger. | 
**amount** | **float** | Amount of loyalty points added or deducted in the transaction. | 
**id** | **int** | ID of the loyalty ledger transaction. | 
**rulesetId** | **int** | The ID of the ruleset containing the rule that triggered this effect. | [optional] 
**ruleName** | **string** | The name of the rule that triggered this effect. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


