# # RuleFailureReason

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaignID** | **int** | The ID of the campaign that contains the rule that failed. | 
**campaignName** | **string** | The name of the campaign that contains the rule that failed. | 
**rulesetID** | **int** | The ID of the ruleset that contains the rule that failed. | 
**couponID** | **int** | The ID of the coupon that was being evaluated at the time of the rule failure. | [optional] 
**couponValue** | **string** | The code of the coupon that was being evaluated at the time of the rule failure. | [optional] 
**referralID** | **int** | The ID of the referral that was being evaluated at the time of the rule failure. | [optional] 
**referralValue** | **string** | The code of the referral that was being evaluated at the time of the rule failure. | [optional] 
**ruleIndex** | **int** | The index of the rule that failed within the ruleset. | 
**ruleName** | **string** | The name of the rule that failed within the ruleset. | 
**conditionIndex** | **int** | The index of the condition that failed. | [optional] 
**effectIndex** | **int** | The index of the effect that failed. | [optional] 
**details** | **string** | More details about the failure. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


