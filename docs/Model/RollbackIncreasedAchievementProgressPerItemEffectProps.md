# # RollbackIncreasedAchievementProgressPerItemEffectProps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**achievementId** | **int** | The internal ID of the achievement. | 
**achievementName** | **string** | The name of the achievement. | 
**progressTrackerId** | **int** | The internal ID of the achievement progress tracker. | 
**decreaseProgressBy** | **float** | The value by which the customer&#39;s current progress in the achievement has decreased. | 
**currentProgress** | **float** | The current progress of the customer in the achievement. | 
**target** | **float** | The target value to complete the achievement. | 
**cartItemPosition** | **float** | The index of the item in the &#x60;cartItem&#x60; object on which the customer&#39;s progress in the achievement was updated. | 
**cartItemSubPosition** | **float** | For cart items with &#x60;quantity&#x60; &gt; 1, indicates which specific unit of the item the effect applies to. | [optional] 
**bundleIndex** | **int** | _(With bundles only)_ The position of the specific bundle in the list of bundles created from the same bundle definition. For example, if a customer creates two identical bundles, the first has index &#x60;0&#x60; and the second has index &#x60;1&#x60;. | [optional] 
**bundleName** | **string** | _(With bundles only)_ The name of the bundle definition. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


