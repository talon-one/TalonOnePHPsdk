# # Referral

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | 
**startDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the referral code becomes valid. | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Expiration date of the referral code. Referral never expires if this is omitted, zero, or negative. | [optional] 
**usageLimit** | **int** | The number of times a referral code can be used. &#x60;0&#x60; means no limit but any campaign usage limits will still apply. | 
**campaignId** | **int** | ID of the campaign from which the referral received the referral code. | 
**advocateProfileIntegrationId** | **string** | The Integration ID of the Advocate&#39;s Profile. | 
**friendProfileIntegrationId** | **string** | An optional Integration ID of the Friend&#39;s Profile. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this item. | [optional] 
**importId** | **int** | The ID of the Import which created this referral. | [optional] 
**code** | **string** | The referral code. | 
**usageCounter** | **int** | The number of times this referral code has been successfully used. | 
**batchId** | **string** | The ID of the batch the referrals belong to. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


