# # CatalogRuleset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rules** | [**\TalonOne\Client\Model\CatalogRule[]**](CatalogRule.md) | Array of rule templates in this ruleset. Rules only contain title (no description, as description is at the catalog entry level). | 
**bindings** | [**\TalonOne\Client\Model\Binding[]**](Binding.md) | An array that provides objects with variable names (name) and talang expressions to whose result they are bound (expression) during rule evaluation. The order of the evaluation is decided by the position in the array. | [optional] 
**rbVersion** | **string** | The version of the rulebuilder used to create this ruleset. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


