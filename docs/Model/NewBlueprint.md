# # NewBlueprint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The display name for the blueprint. | 
**description** | **string** | A longer, more detailed description of the blueprint. | [optional] 
**category** | **string** | Category used to group blueprints. | [optional] [default to 'custom']
**rules** | [**\TalonOne\Client\Model\CatalogRule[]**](CatalogRule.md) | Array of rules to store in this blueprint. Rules should only contain title (no description, as description is at the blueprint level). At least one rule or cart item filter is required. | [optional] 
**cartItemFilters** | [**\TalonOne\Client\Model\CartItemFilterTemplate[]**](CartItemFilterTemplate.md) | Array of cart item filters to store in this blueprint. If not provided, will be extracted from the rules. Cart item filters should only contain name (no description, as description is at the blueprint level). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


