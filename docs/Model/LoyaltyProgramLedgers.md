# # LoyaltyProgramLedgers

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The internal ID of loyalty program. | 
**title** | **string** | Visible name of loyalty program. | 
**name** | **string** | Internal name of loyalty program. | 
**joinDate** | [**\DateTime**](\DateTime.md) | The date on which the customer joined the loyalty program in RFC3339.  **Note**: This is in the loyalty program&#39;s time zone. | [optional] 
**ledger** | [**\TalonOne\Client\Model\LedgerInfo**](LedgerInfo.md) |  | 
**subLedgers** | [**map[string,\TalonOne\Client\Model\LedgerInfo]**](LedgerInfo.md) | A map containing information about each loyalty subledger. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


