# # Blueprint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The internal ID of this blueprint. | 
**accountId** | **int** | The ID of the account that owns this blueprint. | 
**applicationId** | **int** | The ID of the Application that owns this blueprint. | 
**title** | **string** | A short description of the blueprint. | 
**description** | **string** | A longer, more detailed description of the blueprint. | [optional] 
**category** | **string** | Category used to group blueprints. | 
**source** | **string** | Indicates whether the blueprint is custom or shipped by Talon.One. | 
**rules** | [**\TalonOne\Client\Model\CatalogRule[]**](CatalogRule.md) | Array of rule templates in this blueprint. Rules only contain title (no description, as description is at the blueprint level). | 
**cartItemFilters** | [**\TalonOne\Client\Model\CartItemFilterTemplate[]**](CartItemFilterTemplate.md) | Array of cart item filter templates in this blueprint. Cart item filters only contain name (no description, as description is at the blueprint level). | 
**created** | [**\DateTime**](\DateTime.md) | Timestamp when the blueprint was created. | 
**createdBy** | **int** | ID of the user who created the blueprint. | 
**modified** | [**\DateTime**](\DateTime.md) | Timestamp when the blueprint was last updated. | [optional] 
**modifiedBy** | **int** | ID of the user who last updated the blueprint. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


