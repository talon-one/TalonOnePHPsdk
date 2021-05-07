# # CustomEffect

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**modified** | [**\DateTime**](\DateTime.md) | The exact moment this entity was last modified. | 
**name** | **string** | The name of this effect. | 
**title** | **string** | The title of this effect. | 
**payload** | **string** | The JSON payload of this effect. | 
**description** | **string** | The description of this effect. | [optional] 
**enabled** | **bool** | Determines if this effect is active. | 
**subscribedApplicationsIds** | **int[]** | A list of the IDs of the applications that this effect is enabled for | [optional] 
**params** | [**\TalonOne\Client\Model\TemplateArgDef[]**](TemplateArgDef.md) | Array of template argument definitions | [optional] 
**modifiedBy** | **int** | ID of the user who last updated this effect if available. | [optional] 
**createdBy** | **int** | ID of the user who created this effect. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


