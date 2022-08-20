# # NewCampaignTemplate

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The campaign template name. | 
**description** | **string** | Customer-facing text that explains the objective of the template. | 
**instructions** | **string** | Customer-facing text that explains how to use the template. For example, you can use this property to explain the available attributes of this template, and how they can be modified when a user uses this template to create a new campaign. | 
**campaignAttributes** | [**object**](.md) | The Campaign Attributes that Campaigns created from this template will have by default. | [optional] 
**couponAttributes** | [**object**](.md) | The Campaign Attributes that Coupons created from this template will have by default. | [optional] 
**state** | **string** | Only Campaign Templates in &#39;available&#39; state may be used to create Campaigns. | 
**tags** | **string[]** | A list of tags for the campaign template. | [optional] 
**features** | **string[]** | A list of features for the campaign template. | [optional] 
**couponSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**referralSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**limits** | [**\TalonOne\Client\Model\TemplateLimitConfig[]**](TemplateLimitConfig.md) | The set of limits that will operate for this campaign template. | [optional] 
**templateParams** | [**\TalonOne\Client\Model\CampaignTemplateParams[]**](CampaignTemplateParams.md) | Template parameters are fields which can be used to replace values in a rule. | [optional] 
**campaignCollections** | [**\TalonOne\Client\Model\CampaignTemplateCollection[]**](CampaignTemplateCollection.md) | The campaign collections from the blueprint campaign for the template. | [optional] 
**defaultCampaignGroupId** | **int** | The default campaignGroupId. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


