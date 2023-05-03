# # NewCouponsForMultipleRecipients

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**usageLimit** | **int** | The number of times the coupon code can be redeemed. &#x60;0&#x60; means unlimited redemptions but any campaign usage limits will still apply. | 
**discountLimit** | **float** | The total discount value that the code can give. Typically used to represent a gift card value. | [optional] 
**reservationLimit** | **int** | The number of reservations that can be made with this coupon code. | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the coupon becomes valid. | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Expiration date of the coupon. Coupon never expires if this is omitted, zero, or negative. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this item. | [optional] 
**recipientsIntegrationIds** | **string[]** | The integration IDs for recipients. | 
**validCharacters** | **string[]** | List of characters used to generate the random parts of a code. By default, the list of characters is equivalent to the &#x60;[A-Z, 0-9]&#x60; regular expression. | [optional] 
**couponPattern** | **string** | The pattern used to generate coupon codes. The character &#x60;#&#x60; is a placeholder and is replaced by a random character from the &#x60;validCharacters&#x60; set. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


