# # ExtendedCoupon

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The internal ID of the coupon. | 
**created** | [**\DateTime**](\DateTime.md) | The time the coupon was created. | 
**campaignId** | **int** | The ID of the campaign that owns this entity. | 
**value** | **string** | The coupon code. | 
**usageLimit** | **int** | The number of times the coupon code can be redeemed. &#x60;0&#x60; means unlimited redemptions but any campaign usage limits will still apply. | 
**discountLimit** | **float** | The total discount value that the code can give. Typically used to represent a gift card value. | [optional] 
**reservationLimit** | **int** | The number of reservations that can be made with this coupon code. | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the coupon becomes valid. | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Expiration date of the coupon. Coupon never expires if this is omitted. | [optional] 
**limits** | [**\TalonOne\Client\Model\LimitConfig[]**](LimitConfig.md) | Limits configuration for a coupon. These limits will override the limits set from the campaign.  **Note:** Only usable when creating a single coupon which is not tied to a specific recipient. Only per-profile limits are allowed to be configured. | [optional] 
**usageCounter** | **int** | The number of times the coupon has been successfully redeemed. | 
**discountCounter** | **float** | The amount of discounts given on rules redeeming this coupon. Only usable if a coupon discount budget was set for this coupon. | [optional] 
**discountRemainder** | **float** | The remaining discount this coupon can give. | [optional] 
**reservationCounter** | **float** | The number of times this coupon has been reserved. | [optional] 
**attributes** | [**object**](.md) | Custom attributes associated with this coupon. | [optional] 
**referralId** | **int** | The integration ID of the referring customer (if any) for whom this coupon was created as an effect. | [optional] 
**recipientIntegrationId** | **string** | The Integration ID of the customer that is allowed to redeem this coupon. | [optional] 
**importId** | **int** | The ID of the Import which created this coupon. | [optional] 
**reservation** | **bool** | Defines the reservation type: - &#x60;true&#x60;: The coupon can be reserved for multiple customers. - &#x60;false&#x60;: The coupon can be reserved only for one customer. It is a personal code. | [optional] [default to true]
**batchId** | **string** | The id of the batch the coupon belongs to. | [optional] 
**isReservationMandatory** | **bool** | An indication of whether the code can be redeemed only if it has been reserved first. | [optional] [default to false]
**implicitlyReserved** | **bool** | An indication of whether the coupon is implicitly reserved for all customers. | [optional] 
**applicationId** | **int** | The ID of the application. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


