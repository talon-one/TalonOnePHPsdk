# # LoyaltyProgram

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of loyalty program. | 
**account_id** | **int** | The ID of the Talon.One account that owns this program. | 
**name** | **string** | The internal name for the Loyalty Program. | 
**title** | **string** | The display title for the Loyalty Program. | 
**description** | **string** | Description of our Loyalty Program. | 
**subscribed_applications** | **int[]** | A list containing the IDs of all applications that are subscribed to this Loyalty Program. | 
**default_validity** | **string** | Indicates the default duration after which new loyalty points should expire. The format is a number, followed by one letter indicating the unit; like &#39;1h&#39; or &#39;40m&#39; or &#39;30d&#39;. | 
**allow_subledger** | **bool** | Indicates if this program supports subledgers inside the program | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


