# # Application

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**modified** | [**\DateTime**](\DateTime.md) | The exact moment this entity was last modified. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**name** | **string** | The name of this application. | 
**description** | **string** | A longer description of the application. | [optional] 
**timezone** | **string** | A string containing an IANA timezone descriptor. | 
**currency** | **string** | A string describing a default currency for new customer sessions. | 
**caseSensitivity** | **string** | A string indicating how should campaigns in this application deal with case sensitivity on coupon codes. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this campaign | [optional] 
**limits** | [**\TalonOne\Client\Model\LimitConfig[]**](LimitConfig.md) | Default limits for campaigns created in this application | [optional] 
**campaignPriority** | **string** | Default priority for campaigns created in this application, can be one of (universal, stackable, exclusive). If no value is provided, this is set to \&quot;universal\&quot; | [optional] 
**exclusiveCampaignsStrategy** | **string** | The strategy used when choosing exclusive campaigns for evaluation, can be one of (listOrder, lowestDiscount, highestDiscount). If no value is provided, this is set to \&quot;listOrder\&quot; | [optional] 
**defaultDiscountScope** | **string** | The default scope to apply \&quot;setDiscount\&quot; effects on if no scope was provided with the effect. | [optional] 
**enableCascadingDiscounts** | **bool** | Flag indicating if discounts should cascade for this application | [optional] 
**enableFlattenedCartItems** | **bool** | Flag indicating if cart items of quantity larger than one should be separated into different items of quantity one | [optional] 
**attributesSettings** | [**\TalonOne\Client\Model\AttributesSettings**](AttributesSettings.md) |  | [optional] 
**sandbox** | **bool** | Flag indicating if this is a live or sandbox application | [optional] 
**loyaltyPrograms** | [**\TalonOne\Client\Model\LoyaltyProgram[]**](LoyaltyProgram.md) | An array containing all the loyalty programs to which this application is subscribed | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


