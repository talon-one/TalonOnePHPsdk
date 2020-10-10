# # NewApplication

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of this application. | 
**description** | **string** | A longer description of the application. | [optional] 
**timezone** | **string** | A string containing an IANA timezone descriptor. | 
**currency** | **string** | A string describing a default currency for new customer sessions. | 
**caseSensitivity** | **string** | A string indicating how should campaigns in this application deal with case sensitivity on coupon codes. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this campaign | [optional] 
**limits** | [**\TalonOne\Client\Model\LimitConfig[]**](LimitConfig.md) | Default limits for campaigns created in this application | [optional] 
**campaignPriority** | **string** | Default priority for campaigns created in this application, can be one of (universal, stackable, exclusive). If no value is provided, this is set to \&quot;universal\&quot; | [optional] 
**exclusiveCampaignsStrategy** | **string** | The strategy used when choosing exclusive campaigns for evaluation, can be one of (listOrder, lowestDiscount, highestDiscount). If no value is provided, this is set to \&quot;listOrder\&quot; | [optional] 
**enableCascadingDiscounts** | **bool** | Flag indicating if discounts should cascade for this application | [optional] 
**enableFlattenedCartItems** | **bool** | Flag indicating if cart items of quantity larger than one should be separated into different items of quantity one | [optional] 
**attributesSettings** | [**\TalonOne\Client\Model\AttributesSettings**](AttributesSettings.md) |  | [optional] 
**sandbox** | **bool** | Flag indicating if this is a live or sandbox application | [optional] 
**key** | **string** | Hex key for HMAC-signing API calls as coming from this application (16 hex digits) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


