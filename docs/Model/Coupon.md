# # Coupon

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**campaign_id** | **int** | The ID of the campaign that owns this entity. | 
**value** | **string** | The actual coupon code. | 
**usage_limit** | **int** | The number of times a coupon code can be redeemed. This can be set to 0 for no limit, but any campaign usage limits will still apply. | 
**start_date** | [**\DateTime**](\DateTime.md) | Timestamp at which point the coupon becomes valid. | [optional] 
**expiry_date** | [**\DateTime**](\DateTime.md) | Expiry date of the coupon. Coupon never expires if this is omitted, zero, or negative. | [optional] 
**usage_counter** | **int** | The number of times this coupon has been successfully used. | 
**attributes** | [**object**](.md) | Arbitrary properties associated with this item | [optional] 
**referral_id** | **int** | The integration ID of the referring customer (if any) for whom this coupon was created as an effect. | [optional] 
**recipient_integration_id** | **string** | The integration ID of a referred customer profile. | [optional] 
**import_id** | **int** | The ID of the Import which created this coupon. | [optional] 
**reservation** | **bool** | This value controls what reservations mean to a coupon. If set to true the coupon reservation is used to mark it as a favourite, if set to false the coupon reservation is used as a requirement of usage. This value defaults to true if not specified. | [optional] 
**batch_id** | **string** | The id of the batch the coupon belongs to. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


