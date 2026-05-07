# # ExperimentSegmentInsight

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dimension** | **string** | The segmentation dimension used to group customers or purchases for analysis. | 
**bucket** | **string** | The specific group within the segmentation dimension. | 
**confidence** | **double** | The raw (unadjusted) confidence score expressed as a percentage. Only segments with a confidence score greater than or equal to 95% are returned. | 
**winnerVariantId** | **int** | The ID of the variant that performed better in this segment. | 
**variants** | [**\TalonOne\Client\Model\ExperimentSegmentInsightVariant[]**](ExperimentSegmentInsightVariant.md) | Per-variant metric values for this segment. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


