# # Ruleset

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**campaignId** | **int** | The ID of the campaign that owns this entity. | 
**userId** | **int** | The ID of the account that owns this entity. | 
**rules** | [**\TalonOne\Client\Model\Rule[]**](Rule.md) | Set of rules to apply. | 
**bindings** | [**\TalonOne\Client\Model\Binding[]**](Binding.md) | An array that provides objects with variable names (name) and talang expressions to whose result they are bound (expression) during rule evaluation. The order of the evaluation is decided by the position in the array. | 
**rbVersion** | **string** | A string indicating which version of the rulebuilder was used to create this ruleset. | [optional] 
**activate** | **bool** | A boolean indicating whether this newly created ruleset should also be activated for the campaign owns it | [optional] 
**activatedAt** | [**\DateTime**](\DateTime.md) | Timestamp indicating when this Ruleset was activated. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


