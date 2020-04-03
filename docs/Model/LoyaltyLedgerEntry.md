# # LoyaltyLedgerEntry

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created** | [**\DateTime**](\DateTime.md) |  | 
**program_id** | **int** |  | 
**customer_profile_id** | **string** |  | 
**customer_session_id** | **string** |  | [optional] 
**event_id** | **int** |  | [optional] 
**type** | **string** |  | 
**amount** | **float** |  | 
**expiry_date** | [**\DateTime**](\DateTime.md) |  | [optional] 
**name** | **string** | A name referencing the condition or effect that added this entry, or the specific name provided in an API call. | 
**sub_ledger_id** | **string** | This specifies if we are adding loyalty points to the main ledger or a subledger | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


