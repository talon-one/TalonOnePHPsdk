# # CouponDeletionFilters

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**createdBefore** | [**\DateTime**](\DateTime.md) | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any time zone setting. Talon.One will convert to UTC internally. | [optional] 
**createdAfter** | [**\DateTime**](\DateTime.md) | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any time zone setting. Talon.One will convert to UTC internally. | [optional] 
**startsAfter** | [**\DateTime**](\DateTime.md) | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any time zone setting. Talon.One will convert to UTC internally. | [optional] 
**startsBefore** | [**\DateTime**](\DateTime.md) | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any time zone setting. Talon.One will convert to UTC internally. | [optional] 
**valid** | **string** | - &#x60;expired&#x60;: Matches coupons in which the expiration date is set and in the past. - &#x60;validNow&#x60;: Matches coupons in which the start date is null or in the past and the expiration date is null or in the future. - &#x60;validFuture&#x60;: Matches coupons in which the start date is set and in the future. | [optional] 
**usable** | **bool** | - &#x60;true&#x60;: only coupons where &#x60;usageCounter &lt; usageLimit&#x60; will be returned. - &#x60;false&#x60;: only coupons where &#x60;usageCounter &gt;&#x3D; usageLimit&#x60; will be returned. - This field cannot be used in conjunction with the &#x60;usable&#x60; query parameter. | [optional] 
**redeemed** | **bool** | - &#x60;true&#x60;: only coupons where &#x60;usageCounter &gt; 0&#x60; will be returned. - &#x60;false&#x60;: only coupons where &#x60;usageCounter &#x3D; 0&#x60; will be returned.  **Note:** This field cannot be used in conjunction with the &#x60;usable&#x60; query parameter. | [optional] 
**recipientIntegrationId** | **string** | Filter results by match with a profile id specified in the coupon&#39;s &#x60;RecipientIntegrationId&#x60; field. | [optional] 
**exactMatch** | **bool** | Filter results to an exact case-insensitive matching against the coupon code | [optional] [default to false]
**value** | **string** | Filter results by the coupon code | [optional] 
**batchId** | **string** | Filter results by batches of coupons | [optional] 
**referralId** | **int** | Filter the results by matching them with the ID of a referral. This filter shows the coupons created by redeeming a referral code. | [optional] 
**expiresAfter** | [**\DateTime**](\DateTime.md) | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any time zone setting. Talon.One will convert to UTC internally. | [optional] 
**expiresBefore** | [**\DateTime**](\DateTime.md) | Filter results comparing the parameter value, expected to be an RFC3339 timestamp string, to the coupon creation timestamp. You can use any time zone setting. Talon.One will convert to UTC internally. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


