# # CampaignTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**userId** | **int** | The ID of the user associated with this entity. | 
**name** | **string** | The campaign template name. | 
**description** | **string** | Customer-facing text that explains the objective of the template. | 
**instructions** | **string** | Customer-facing text that explains how to use the template. For example, you can use this property to explain the available attributes of this template, and how they can be modified when a user uses this template to create a new campaign. | 
**campaignAttributes** | [**object**](.md) | The campaign attributes that campaigns created from this template will have by default. | [optional] 
**couponAttributes** | [**object**](.md) | The campaign attributes that coupons created from this template will have by default. | [optional] 
**state** | **string** | Only campaign templates in &#39;available&#39; state may be used to create campaigns. | 
**activeRulesetId** | **int** | The ID of the ruleset this campaign template will use. | [optional] 
**tags** | **string[]** | A list of tags for the campaign template. | [optional] 
**features** | **string[]** | A list of features for the campaign template. | [optional] 
**couponSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**couponReservationSettings** | [**\TalonOne\Client\Model\CampaignTemplateCouponReservationSettings**](CampaignTemplateCouponReservationSettings.md) |  | [optional] 
**referralSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**limits** | [**\TalonOne\Client\Model\TemplateLimitConfig[]**](TemplateLimitConfig.md) | The set of limits that operate for this campaign template. | [optional] 
**templateParams** | [**\TalonOne\Client\Model\CampaignTemplateParams[]**](CampaignTemplateParams.md) | Fields which can be used to replace values in a rule. | [optional] 
**applicationsIds** | **int[]** | A list of IDs of the Applications that are subscribed to this campaign template. | 
**campaignCollections** | [**\TalonOne\Client\Model\CampaignTemplateCollection[]**](CampaignTemplateCollection.md) | The campaign collections from the blueprint campaign for the template. | [optional] 
**defaultCampaignGroupId** | **int** | The default campaign group ID. | [optional] 
**campaignType** | **string** | The campaign type. Possible type values:   - &#x60;cartItem&#x60;: Type of campaign that can apply effects only to cart items.   - &#x60;advanced&#x60;: Type of campaign that can apply effects to customer sessions and cart items. | [default to 'advanced']
**updated** | [**\DateTime**](\DateTime.md) | Timestamp of the most recent update to the campaign template or any of its elements. | [optional] 
**updatedBy** | **string** | Name of the user who last updated this campaign template, if available. | [optional] 
**validApplicationIds** | **int[]** | The IDs of the Applications that are related to this entity. | 
**isUserFavorite** | **bool** | A flag indicating whether the user marked the template as a favorite. | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


