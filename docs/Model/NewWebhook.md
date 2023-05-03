# # NewWebhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**applicationIds** | **int[]** | The IDs of the Applications that are related to this entity. | 
**title** | **string** | Name or title for this webhook. | 
**verb** | **string** | API method for this webhook. | 
**url** | **string** | API URL (supports templating using parameters) for this webhook. | 
**headers** | **string[]** | List of API HTTP headers for this webhook. | 
**payload** | **string** | API payload (supports templating using parameters) for this webhook. | [optional] 
**params** | [**\TalonOne\Client\Model\TemplateArgDef[]**](TemplateArgDef.md) | Array of template argument definitions. | 
**enabled** | **bool** | Enables or disables webhook from showing in the Rule Builder. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


