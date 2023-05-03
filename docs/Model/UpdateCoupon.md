# # UpdateCoupon

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**usageLimit** | **int** | The number of times the coupon code can be redeemed. &#x60;0&#x60; means unlimited redemptions but any campaign usage limits will still apply. | [optional] 
**discountLimit** | **float** | The total discount value that the code can give. Typically used to represent a gift card value. | [optional] 
**reservationLimit** | **int** | The number of reservations that can be made with this coupon code. | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the coupon becomes valid. | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Expiration date of the coupon. Coupon never expires if this is omitted, zero, or negative. | [optional] 
**limits** | [**\TalonOne\Client\Model\LimitConfig[]**](LimitConfig.md) | Limits configuration for a coupon. These limits will override the limits set from the campaign.  **Note:** Only usable when creating a single coupon which is not tied to a specific recipient. Only per-profile limits are allowed to be configured. | [optional] 
**recipientIntegrationId** | **string** | The integration ID for this coupon&#39;s beneficiary&#39;s profile. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this item. | [optional] 
**isReservationMandatory** | **bool** | Whether the reservation effect actually created a new reservation. | [optional] [default to true]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


