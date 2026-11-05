# # UpdateExperimentBlueprint

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The display name for the experiment blueprint. | [optional] 
**description** | **string** | A longer, more detailed description of the experiment blueprint. | [optional] 
**category** | **string** | Category used to group experiment blueprints. | [optional] 
**variants** | [**\TalonOne\Client\Model\ExperimentBlueprintVariant[]**](ExperimentBlueprintVariant.md) | Replaces the stored experiment variant templates. | [optional] 
**cartItemFilters** | [**\TalonOne\Client\Model\CartItemFilterTemplate[]**](CartItemFilterTemplate.md) | Replaces the stored cart item filters. Cart item filters should only contain name (no description, as description is at the experiment blueprint level). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


