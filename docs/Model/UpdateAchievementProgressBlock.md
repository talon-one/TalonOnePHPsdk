# # UpdateAchievementProgressBlock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for this block. | [optional] [readonly] 
**type** | **string** | Identifies the block variant and determines which additional properties are present in it. | 
**tags** | **string[]** | Semantic labels attached to this block. | [optional] [readonly] 
**operator** | **string** |  | 
**value** | **string** | The value to update the progress by. Supports template placeholders (e.g. \&quot;{{$Session.Total / 2}}\&quot;) for dynamic quantities. | 
**achievement** | [**\TalonOne\Client\Model\UpdateAchievementProgressBlockAchievement**](UpdateAchievementProgressBlockAchievement.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


