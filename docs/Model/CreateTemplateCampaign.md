# # CreateTemplateCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A user-facing name for this campaign. | 
**description** | **string** | A detailed description of the campaign. | [optional] 
**templateId** | **int** | The ID of the Campaign Template which will be used in order to create the Campaign. | 
**campaignAttributesOverrides** | [**object**](.md) | Custom Campaign Attributes. If the Campaign Template defines the same values, they will be overridden. | [optional] 
**templateParamValues** | [**\TalonOne\Client\Model\Binding[]**](Binding.md) | Actual values to replace the template placeholder values in the Ruleset bindings. Values for all Template Parameters must be provided. | [optional] 
**limitOverrides** | [**\TalonOne\Client\Model\LimitConfig[]**](LimitConfig.md) | Limits for this Campaign. If the Campaign Template or Application define default values for the same limits, they will be overridden. | [optional] 
**tags** | **string[]** | A list of tags for the campaign. If the campaign template has tags, they will be overridden by this list. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


