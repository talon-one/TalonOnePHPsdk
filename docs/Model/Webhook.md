# # Webhook

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**modified** | [**\DateTime**](\DateTime.md) | The exact moment this entity was last modified. | 
**applicationIds** | **int[]** | The IDs of the applications that are related to this entity. The IDs of the applications that are related to this entity. | 
**title** | **string** | Friendly title for this webhook | 
**verb** | **string** | API method for this webhook | 
**url** | **string** | API url (supports templating using parameters) for this webhook | 
**headers** | **string[]** | List of API HTTP headers for this webhook | 
**payload** | **string** | API payload (supports templating using parameters) for this webhook | [optional] 
**params** | [**\TalonOne\Client\Model\TemplateArgDef[]**](TemplateArgDef.md) | Array of template argument definitions | 
**enabled** | **bool** | Enables or disables webhook from showing in rule builder | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


