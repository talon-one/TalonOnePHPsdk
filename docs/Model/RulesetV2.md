# # RulesetV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal ID of this entity. | [optional] [readonly] 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | [optional] [readonly] 
**userId** | **int** | The ID of the user that created this ruleset. | [optional] [readonly] 
**campaignId** | **int** | The ID of the campaign that owns this entity. | [optional] [readonly] 
**templateId** | **int** | The ID of the campaign template that owns this entity. | [optional] [readonly] 
**activatedAt** | [**\DateTime**](\DateTime.md) | Timestamp indicating when this ruleset was activated. | [optional] [readonly] 
**promotionRules** | [**\TalonOne\Client\Model\RuleV2[]**](RuleV2.md) | Set of promotion rules. | 
**strikethroughRules** | [**\TalonOne\Client\Model\RuleV2[]**](RuleV2.md) | Set of strikethrough rules. | [optional] 
**selectors** | [**\TalonOne\Client\Model\Selector[]**](Selector.md) | Variable bindings of type selector. | [optional] [readonly] 
**bundles** | [**\TalonOne\Client\Model\Bundle[]**](Bundle.md) | Variable bindings of type bundle. | [optional] [readonly] 
**parameters** | [**\TalonOne\Client\Model\TemplateParameter[]**](TemplateParameter.md) | Variable bindings of type template parameter. | [optional] [readonly] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


