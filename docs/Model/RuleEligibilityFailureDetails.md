# # RuleEligibilityFailureDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**failureCode** | **string** | A code identifying why the customer was not eligible for the rule in the current session. | 
**couponID** | **int** | The ID of the coupon that was being evaluated when the rule failed. | [optional] 
**couponValue** | **string** | The coupon code that was being evaluated when the rule failed. | [optional] 
**referralID** | **int** | The ID of the referral that was being evaluated when the rule failed. | [optional] 
**referralValue** | **string** | The referral code that was being evaluated when the rule failed. | [optional] 
**conditionIndex** | **int** | The index of the condition that caused the rule to fail. | [optional] 
**effectIndex** | **int** | The index of the effect that caused the rule to fail. | [optional] 
**details** | **string** | Additional details about the failure. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


