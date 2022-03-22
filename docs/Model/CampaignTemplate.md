# # CampaignTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**userId** | **int** | The ID of the account that owns this entity. | 
**name** | **string** | The campaign template name. | 
**description** | **string** | Customer-facing text that explains the objective of the template. | 
**instructions** | **string** | Customer-facing text that explains how to use the template. For example, you can use this property to explain the available attributes of this template, and how they can be modified when a user uses this template to create a new campaign. | 
**campaignAttributes** | [**object**](.md) | The Campaign Attributes that Campaigns created from this template will have by default. | [optional] 
**couponAttributes** | [**object**](.md) | The Campaign Attributes that Coupons created from this template will have by default. | [optional] 
**state** | **string** | Only Campaign Templates in &#39;available&#39; state may be used to create Campaigns. | 
**activeRulesetId** | **int** | The ID of the Ruleset this Campaign Template will use. | [optional] 
**tags** | **string[]** | A list of tags for the campaign template. | [optional] 
**features** | **string[]** | A list of features for the campaign template. | [optional] 
**couponSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**referralSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**limits** | [**\TalonOne\Client\Model\TemplateLimitConfig[]**](TemplateLimitConfig.md) | The set of limits that will operate for this campaign template | [optional] 
**templateParams** | [**\TalonOne\Client\Model\CampaignTemplateParams[]**](CampaignTemplateParams.md) | Template parameters are fields which can be used to replace values in a rule. | [optional] 
**applicationsIds** | **int[]** | A list of the IDs of the applications that are subscribed to this campaign template A list of the IDs of the applications that are subscribed to this campaign template | 
**updated** | [**\DateTime**](\DateTime.md) | Timestamp of the most recent update to the campaign template or any of its elements. | [optional] 
**updatedBy** | **string** | Name of the user who last updated this campaign template if available. | [optional] 
**validApplicationIds** | **int[]** | The IDs of the applications that are related to this entity. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


