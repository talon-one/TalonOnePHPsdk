# # ExperimentBlueprintVariant

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of this variant. | 
**weight** | **int** | The percentage split of this variant. For &#x60;random&#x60; assignment, the split must be between 1 and 99 and the sum across all variants must equal 100. Ignored for &#x60;audience&#x60; and &#x60;external&#x60; assignment. | 
**ruleset** | [**\TalonOne\Client\Model\CatalogRuleset**](CatalogRuleset.md) |  | 
**isPrimary** | **bool** | Indicates whether this variant is the primary variant of the experiment. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


