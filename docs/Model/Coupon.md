# # Coupon

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**campaignId** | **int** | The ID of the campaign that owns this entity. | 
**value** | **string** | The actual coupon code. | 
**usageLimit** | **int** | The number of times a coupon code can be redeemed. This can be set to 0 for no limit, but any campaign usage limits will still apply. | 
**discountLimit** | **float** | The amount of discounts that can be given with this coupon code. | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the coupon becomes valid. | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Expiry date of the coupon. Coupon never expires if this is omitted, zero, or negative. | [optional] 
**usageCounter** | **int** | The number of times this coupon has been successfully used. | 
**discountCounter** | **float** | The amount of discounts given on rules redeeming this coupon. Only usable if a coupon discount budget was set for this coupon. | [optional] 
**discountRemainder** | **float** | The remaining discount this coupon can give. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this item | [optional] 
**referralId** | **int** | The integration ID of the referring customer (if any) for whom this coupon was created as an effect. | [optional] 
**recipientIntegrationId** | **string** | The Integration ID of the customer that is allowed to redeem this coupon. | [optional] 
**importId** | **int** | The ID of the Import which created this coupon. | [optional] 
**reservation** | **bool** | This value controls what reservations mean to a coupon. If set to true the coupon reservation is used to mark it as a favourite, if set to false the coupon reservation is used as a requirement of usage. This value defaults to true if not specified. | [optional] 
**batchId** | **string** | The id of the batch the coupon belongs to. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


