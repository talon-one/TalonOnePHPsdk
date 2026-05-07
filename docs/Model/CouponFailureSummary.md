# # CouponFailureSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ID of the evaluation record. | 
**eventID** | **int** | ID of the event. | 
**sessionID** | **string** | ID of the customer session set by your integration layer. | [optional] 
**profileID** | **string** | ID of the customer profile set by your integration layer. | [optional] 
**status** | **string** | Status defines if the coupon code was applied or rejected. | 
**couponCode** | **string** | Coupon code passed for evaluation. | 
**language** | **string** | Language of the summary. | 
**summary** | **string** | A summary of the reasons for coupon redemption failure. | 
**createdAt** | [**\DateTime**](\DateTime.md) | Timestamp when the request was made. | 
**updatedAt** | [**\DateTime**](\DateTime.md) | Timestamp when the request was last updated. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


