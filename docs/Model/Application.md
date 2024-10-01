# # Application

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | 
**modified** | [**\DateTime**](\DateTime.md) | The time this entity was last modified. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**name** | **string** | The name of this application. | 
**description** | **string** | A longer description of the application. | [optional] 
**timezone** | **string** | A string containing an IANA timezone descriptor. | 
**currency** | **string** | The default currency for new customer sessions. | 
**caseSensitivity** | **string** | The case sensitivity behavior to check coupon codes in the campaigns of this Application. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this campaign. | [optional] 
**limits** | [**\TalonOne\Client\Model\LimitConfig[]**](LimitConfig.md) | Default limits for campaigns created in this application. | [optional] 
**defaultDiscountScope** | **string** | The default scope to apply &#x60;setDiscount&#x60; effects on if no scope was provided with the effect. | [optional] 
**enableCascadingDiscounts** | **bool** | Indicates if discounts should cascade for this Application. | [optional] 
**enableFlattenedCartItems** | **bool** | Indicates if cart items of quantity larger than one should be separated into different items of quantity one. | [optional] 
**attributesSettings** | [**\TalonOne\Client\Model\AttributesSettings**](AttributesSettings.md) |  | [optional] 
**sandbox** | **bool** | Indicates if this is a live or sandbox Application. | [optional] 
**enablePartialDiscounts** | **bool** | Indicates if this Application supports partial discounts. | [optional] 
**defaultDiscountAdditionalCostPerItemScope** | **string** | The default scope to apply &#x60;setDiscountPerItem&#x60; effects on if no scope was provided with the effect. | [optional] 
**defaultEvaluationGroupId** | **int** | The ID of the default campaign evaluation group to which new campaigns will be added unless a different group is selected when creating the campaign. | [optional] 
**defaultCartItemFilterId** | **int** | The ID of the default Cart-Item-Filter for this application. | [optional] 
**enableCampaignStateManagement** | **bool** | Indicates whether the campaign staging and revisions feature is enabled for the Application.  **Important:** After this feature is enabled, it cannot be disabled. | [optional] 
**loyaltyPrograms** | [**\TalonOne\Client\Model\LoyaltyProgram[]**](LoyaltyProgram.md) | An array containing all the loyalty programs to which this application is subscribed. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


