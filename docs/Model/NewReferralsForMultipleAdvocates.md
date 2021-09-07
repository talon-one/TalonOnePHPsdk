# # NewReferralsForMultipleAdvocates

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**startDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the referral code becomes valid. | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Expiry date of the referral code. Referral never expires if this is omitted, zero, or negative. | [optional] 
**usageLimit** | **int** | The number of times a referral code can be used. This can be set to 0 for no limit, but any campaign usage limits will still apply. | 
**campaignId** | **int** | The ID of the campaign from which the referral received the referral code. | 
**advocateProfileIntegrationIds** | **string[]** | An array containing all the respective advocate profiles. | 
**attributes** | [**object**](.md) | Arbitrary properties associated with this item. | [optional] 
**validCharacters** | **string[]** | Set of characters to be used when generating random part of code. Defaults to [A-Z, 0-9] (in terms of RegExp). | [optional] 
**referralPattern** | **string** | The pattern that will be used to generate referrals. The character &#x60;#&#x60; acts as a placeholder and will be replaced by a random character from the &#x60;validCharacters&#x60; set. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


