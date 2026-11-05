# # UpdateExperiment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**isVariantAssignmentExternal** | **bool** | Deprecated and ignored. The assignment type is set at experiment creation and cannot be changed. Use &#x60;assignmentType&#x60; when creating an experiment instead. | [optional] 
**campaign** | [**\TalonOne\Client\Model\UpdateCampaign**](UpdateCampaign.md) |  | 
**goalType** | **string** | The goal of the experiment. Determines which single metric is used to decide the winning variant. When set to &#x60;other&#x60;, multiple metrics are used. If omitted, the current value is preserved. | [optional] 
**goalDescription** | **string** | A description of the experiment goal. Provides context for the AI summary and helps it interpret the outcome of the experiment against the stated goal. If omitted, the current value is preserved. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


