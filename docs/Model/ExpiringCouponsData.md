# # ExpiringCouponsData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**couponValue** | **string** | The coupon code. | 
**createdDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the coupon was created. | [optional] 
**validFrom** | [**\DateTime**](\DateTime.md) | Timestamp at which point the coupon becomes valid. | [optional] 
**validUntil** | [**\DateTime**](\DateTime.md) | Timestamp at which point the coupon expires. Coupon never expires if this is omitted, zero, or negative. | [optional] 
**campaignId** | **int** | The ID of the campaign to which the coupon belongs. | 
**customerProfileId** | **string** | The Integration ID of the customer that is allowed to redeem this coupon. | [optional] 
**usageLimit** | **int** | The number of times the coupon code can be redeemed. &#x60;0&#x60; means unlimited redemptions but any campaign usage limits will still apply. | 
**usageCounter** | **int** | The number of times the coupon has been successfully redeemed. | 
**batchId** | **string** | The ID of the batch the coupon belongs to. | [optional] 
**attributes** | [**object**](.md) | Custom attributes associated with this coupon. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


