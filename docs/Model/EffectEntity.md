# # EffectEntity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**campaignId** | **int** | The ID of the campaign that triggered this effect. | 
**rulesetId** | **int** | The ID of the ruleset that was active in the campaign when this effect was triggered. | 
**ruleIndex** | **int** | The position of the rule that triggered this effect within the ruleset. | 
**ruleName** | **string** | The name of the rule that triggered this effect. | 
**effectType** | **string** | The type of effect that was triggered. See [API effects](https://docs.talon.one/docs/dev/integration-api/api-effects). | 
**triggeredByCoupon** | **int** | The ID of the coupon that was being evaluated when this effect was triggered. | [optional] 
**triggeredForCatalogItem** | **int** | The ID of the catalog item that was being evaluated when this effect was triggered. | [optional] 
**conditionIndex** | **int** | The index of the condition that was triggered. | [optional] 
**evaluationGroupID** | **int** | The ID of the evaluation group. For more information, see [Managing campaign evaluation](https://docs.talon.one/docs/product/applications/managing-campaign-evaluation). | [optional] 
**evaluationGroupMode** | **string** | The evaluation mode of the evaluation group. For more information, see [Managing campaign evaluation](https://docs.talon.one/docs/product/applications/managing-campaign-evaluation). | [optional] 
**campaignRevisionId** | **int** | The revision ID of the campaign that was used when triggering the effect. | [optional] 
**campaignRevisionVersionId** | **int** | The revision version ID of the campaign that was used when triggering the effect. | [optional] 
**selectedPriceType** | **string** | The selected price type for the SKU targeted by this effect. | [optional] 
**selectedPrice** | **float** | The value of the selected price type to apply to the SKU targeted by this effect, before any discounts are applied. | [optional] 
**adjustmentReferenceId** | **string** | The reference identifier of the selected price adjustment for this SKU. This is only returned if the &#x60;selectedPrice&#x60; resulted from a price adjustment. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


