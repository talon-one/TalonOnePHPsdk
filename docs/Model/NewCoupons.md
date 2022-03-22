# # NewCoupons

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**usageLimit** | **int** | The number of times a coupon code can be redeemed. This can be set to 0 for no limit, but any campaign usage limits will still apply. | 
**discountLimit** | **float** | The amount of discounts that can be given with this coupon code. | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the coupon becomes valid. | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Expiry date of the coupon. Coupon never expires if this is omitted, zero, or negative. | [optional] 
**limits** | [**\TalonOne\Client\Model\LimitConfig[]**](LimitConfig.md) | Limits configuration for a coupon. These limits will override the limits set from the campaign.  **Note:** Only usable when creating a single coupon which is not tied to a specific recipient. Only per-profile limits are allowed to be configured. | [optional] 
**numberOfCoupons** | **int** | The number of new coupon codes to generate for the campaign. Must be at least 1. | 
**uniquePrefix** | **string** | A unique prefix to prepend to all generated coupons. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this item | [optional] 
**recipientIntegrationId** | **string** | The integration ID for this coupon&#39;s beneficiary&#39;s profile | [optional] 
**validCharacters** | **string[]** | List of characters used to generate the random parts of a code. By default, the list of characters is equivalent to the &#x60;[A-Z, 0-9]&#x60; regular expression. | [optional] 
**couponPattern** | **string** | The pattern used to generate coupon codes. The character &#x60;#&#x60; is a placeholder and is replaced by a random character from the &#x60;validCharacters&#x60; set.  If you use a &#x60;uniquePrefix&#x60;, include it in the pattern. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


