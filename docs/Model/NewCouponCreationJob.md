# # NewCouponCreationJob

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**usageLimit** | **int** | The number of times the coupon code can be redeemed. &#x60;0&#x60; means unlimited redemptions but any campaign usage limits will still apply. | 
**discountLimit** | **float** | The amount of discounts that can be given with this coupon code. | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the coupon becomes valid. | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Expiry date of the coupon. Coupon never expires if this is omitted, zero, or negative. | [optional] 
**numberOfCoupons** | **int** | The number of new coupon codes to generate for the campaign. Must be between 20,001 and 5,000,000. | 
**couponSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with coupons. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


