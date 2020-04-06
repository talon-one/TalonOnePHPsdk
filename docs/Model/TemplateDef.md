# # TemplateDef

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**applicationId** | **int** | The ID of the application that owns this entity. | 
**title** | **string** | Campaigner-friendly name for the template that will be shown in the rule editor. | 
**description** | **string** | A short description of the template that will be shown in the rule editor. | 
**help** | **string** | Extended help text for the template. | 
**category** | **string** | Used for grouping templates in the rule editor sidebar. | 
**expr** | **object[]** | A Talang expression that contains variable bindings referring to args. | 
**args** | [**\TalonOne\Client\Model\TemplateArgDef[]**](TemplateArgDef.md) | An array of argument definitions. | 
**expose** | **bool** | A flag to control exposure in Rule Builder. | [optional] [default to false]
**name** | **string** | The template name used in Talang. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


