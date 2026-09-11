# # StartAchievementProgressEffectProps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**achievementId** | **int** | The ID of the achievement. | 
**achievementName** | **string** | The name of the achievement. | 
**progressTrackerId** | **int** | The ID of the customer&#39;s progress tracker for this achievement.  For [on-completion achievements](https://docs.talon.one/docs/product/campaigns/achievements/overview#recurring-on-completion-achievements), this effect generates a unique ID for each iteration. | [optional] 
**target** | **float** | The target value to complete the achievement. | 
**startDate** | [**\DateTime**](\DateTime.md) | Timestamp at which the customer&#39;s progress started. | 
**endDate** | [**\DateTime**](\DateTime.md) | Timestamp at which this progress period ends.  Only returned for achievements that have a fixed end date. [On-completion achievements](https://docs.talon.one/docs/product/campaigns/achievements/overview#recurring-on-completion-achievements) have no end date. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


