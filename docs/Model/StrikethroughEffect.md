# # StrikethroughEffect

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaignId** | **int** | The ID of the campaign that effect belongs to. | 
**rulesetId** | **int** | The ID of the ruleset containing the rule that triggered this effect. | 
**ruleIndex** | **int** | The position of the rule that triggered this effect within the ruleset. | 
**ruleName** | **string** | The name of the rule that triggered this effect. | 
**type** | **string** | The type of this effect. | 
**props** | [**object**](.md) |  | 
**startTime** | [**\DateTime**](\DateTime.md) | The start of the time frame where the effect is active in UTC. | [optional] 
**endTime** | [**\DateTime**](\DateTime.md) | The end of the time frame where the effect is active in UTC. | [optional] 
**selectedPriceType** | **string** | The selected price type for this cart item (e.g. the price for members only). | [optional] 
**selectedPrice** | **float** | The value of the selected price type to apply to the SKU targeted by this effect, before any discounts are applied. | [optional] 
**adjustmentReferenceId** | **string** | The reference identifier of the selected price adjustment for this cart item. | [optional] 
**targets** | **object[]** | A list of entities (e.g. audiences) targeted by this effect. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


