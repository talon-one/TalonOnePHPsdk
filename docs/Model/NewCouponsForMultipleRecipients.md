# # NewCouponsForMultipleRecipients

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**usageLimit** | **int** | The number of times a coupon code can be redeemed. This can be set to 0 for no limit, but any campaign usage limits will still apply. | 
**discountLimit** | **float** | The amount of discounts that can be given with this coupon code. | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the coupon becomes valid. | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Expiry date of the coupon. Coupon never expires if this is omitted, zero, or negative. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this item | [optional] 
**recipientsIntegrationIds** | **string[]** | The integration IDs for recipients | 
**validCharacters** | **string[]** | Set of characters to be used when generating random part of code. Defaults to [A-Z, 0-9] (in terms of RegExp). | [optional] 
**couponPattern** | **string** | The pattern that will be used to generate coupon codes. The character &#x60;#&#x60; acts as a placeholder and will be replaced by a random character from the &#x60;validCharacters&#x60; set. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


