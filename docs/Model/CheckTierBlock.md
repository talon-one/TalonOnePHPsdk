# # CheckTierBlock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for this block. | [optional] [readonly] 
**type** | **string** | Identifies the block variant and determines which additional properties are present in it. | 
**tags** | **string[]** | Semantic labels attached to this block. | [optional] [readonly] 
**operator** | **string** | An indicator of how the block compares its elements. | 
**subledger** | **string** | The name of the subledger to check a customer&#39;s tier in. Can be empty if this block checks the loyalty program&#39;s main ledger instead of a subledger. A subledger can only be used when the loyalty program that the tier is in has subledgers enabled. To specify the main ledger, provide an empty string (\&quot;\&quot;). | 
**tier** | [**\TalonOne\Client\Model\TierBlockReference**](TierBlockReference.md) |  | 
**onFailure** | **object[]** | Promotion blocks evaluated when this block fails or returns false. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


