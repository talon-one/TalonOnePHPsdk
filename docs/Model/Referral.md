# # Referral

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**campaign_id** | **int** | ID of the campaign from which the referral received the referral code. | 
**advocate_profile_integration_id** | **string** | The Integration Id of the Advocate&#39;s Profile | 
**friend_profile_integration_id** | **string** | An optional Integration ID of the Friend&#39;s Profile | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Timestamp at which point the referral code becomes valid. | [optional] 
**expiry_date** | [**\DateTime**](\DateTime.md) | Expiry date of the referral code. Referral never expires if this is omitted, zero, or negative. | [optional] 
**code** | **string** | The actual referral code. | 
**usage_counter** | **int** | The number of times this referral code has been successfully used. | 
**usage_limit** | **int** | The number of times a referral code can be used. This can be set to 0 for no limit, but any campaign usage limits will still apply. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


