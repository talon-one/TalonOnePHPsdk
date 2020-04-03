# # Rule

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | A short description of the rule. | 
**description** | **string** | A longer, more detailed description of the rule. | [optional] 
**bindings** | [**\OpenAPI\Client\Model\Binding[]**](Binding.md) | An array that provides objects with variable names (name) and talang expressions to whose result they are bound (expression) during rule evaluation. The order of the evaluation is decided by the position in the array. | [optional] 
**condition** | **object[]** | A Talang expression that will be evaluated in the context of the given event. | 
**effects** | **object[]** | An array of effectful Talang expressions in arrays that will be evaluated when a rule matches. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


