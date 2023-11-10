# # NewCoupons

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**usageLimit** | **int** | The number of times the coupon code can be redeemed. &#x60;0&#x60; means unlimited redemptions but any campaign usage limits will still apply. | 
**discountLimit** | **float** | The total discount value that the code can give. Typically used to represent a gift card value. | [optional] 
**reservationLimit** | **int** | The number of reservations that can be made with this coupon code. | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the coupon becomes valid. | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Expiration date of the coupon. Coupon never expires if this is omitted, zero, or negative. | [optional] 
**limits** | [**\TalonOne\Client\Model\LimitConfig[]**](LimitConfig.md) | Limits configuration for a coupon. These limits will override the limits set from the campaign.  **Note:** Only usable when creating a single coupon which is not tied to a specific recipient. Only per-profile limits are allowed to be configured. | [optional] 
**numberOfCoupons** | **int** | The number of new coupon codes to generate for the campaign. Must be at least 1. | 
**uniquePrefix** | **string** | **DEPRECATED** To create more than 20,000 coupons in one request, use [Create coupons asynchronously](https://docs.talon.one/management-api#operation/createCouponsAsync) endpoint. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this item. | [optional] 
**recipientIntegrationId** | **string** | The integration ID for this coupon&#39;s beneficiary&#39;s profile. | [optional] 
**validCharacters** | **string[]** | List of characters used to generate the random parts of a code. By default, the list of characters is equivalent to the &#x60;[A-Z, 0-9]&#x60; regular expression. | [optional] 
**couponPattern** | **string** | The pattern used to generate coupon codes. The character &#x60;#&#x60; is a placeholder and is replaced by a random character from the &#x60;validCharacters&#x60; set. | [optional] 
**isReservationMandatory** | **bool** | Whether the reservation effect actually created a new reservation. | [optional] [default to true]
**implicitlyReserved** | **bool** | An indication of whether the coupon is implicitly reserved for all customers. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


