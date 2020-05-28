# # LoyaltyLedgerEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created** | [**\DateTime**](\DateTime.md) |  | 
**programID** | **int** |  | 
**customerProfileID** | **string** |  | 
**customerSessionID** | **string** |  | [optional] 
**eventID** | **int** |  | [optional] 
**type** | **string** |  | 
**amount** | **float** |  | 
**expiryDate** | [**\DateTime**](\DateTime.md) |  | [optional] 
**name** | **string** | A name referencing the condition or effect that added this entry, or the specific name provided in an API call. | 
**subLedgerID** | **string** | This specifies if we are adding loyalty points to the main ledger or a subledger | 
**userID** | **int** | This is the ID of the user who created this entry, if the addition or subtraction was done manually. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


