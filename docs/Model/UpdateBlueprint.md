# # UpdateBlueprint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The display name for the blueprint. | [optional] 
**description** | **string** | A longer, more detailed description of the blueprint. | [optional] 
**category** | **string** | Category used to group blueprints. | [optional] 
**rules** | [**\TalonOne\Client\Model\CatalogRule[]**](CatalogRule.md) | Replaces the stored rules. Rules should only contain title (no description, as description is at the blueprint level). | [optional] 
**cartItemFilters** | [**\TalonOne\Client\Model\CartItemFilterTemplate[]**](CartItemFilterTemplate.md) | Replaces the stored cart item filters. Cart item filters should only contain name (no description, as description is at the blueprint level). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


