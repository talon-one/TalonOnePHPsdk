# # CustomEffect

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**modified** | [**\DateTime**](\DateTime.md) | The time this entity was last modified. | 
**applicationIds** | **int[]** | The IDs of the Applications that are related to this entity. | 
**isPerItem** | **bool** | Indicates if this effect is per item or not. | [optional] 
**name** | **string** | The name of this effect. | 
**title** | **string** | The title of this effect. | 
**payload** | **string** | The JSON payload of this effect. | 
**description** | **string** | The description of this effect. | [optional] 
**enabled** | **bool** | Determines if this effect is active. | 
**params** | [**\TalonOne\Client\Model\TemplateArgDef[]**](TemplateArgDef.md) | Array of template argument definitions. | [optional] 
**modifiedBy** | **int** | ID of the user who last updated this effect if available. | [optional] 
**createdBy** | **int** | ID of the user who created this effect. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


