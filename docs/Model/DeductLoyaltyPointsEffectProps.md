# # DeductLoyaltyPointsEffectProps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ruleTitle** | **string** | The title of the rule that contained triggered this points deduction. | 
**programId** | **int** | The ID of the loyalty program from which these points were deducted. | 
**subLedgerId** | **string** | The ID of the subledger within the loyalty program from which these points were deducted. | 
**value** | **float** | The amount of points that were deducted. | 
**transactionUUID** | **string** | The identifier of this loyalty point transaction. | 
**name** | **string** | The reason of this loyalty points deduction. | 
**cardIdentifier** | **string** | The identifier of the loyalty card, which must match the regular expression &#x60;^[A-Za-z0-9._%+@-]+$&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


