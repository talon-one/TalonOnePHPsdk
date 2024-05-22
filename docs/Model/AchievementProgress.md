# # AchievementProgress

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**achievementId** | **int** | The internal ID of the achievement. | 
**name** | **string** | The internal name of the achievement used in API requests. | 
**title** | **string** | The display name of the achievement in the Campaign Manager. | 
**campaignId** | **int** | The ID of the campaign the achievement belongs to. | 
**status** | **string** | The status of the achievement. | 
**target** | **float** | The required number of actions or the transactional milestone to complete the achievement. | [optional] 
**progress** | **float** | The current progress of the customer in the achievement. | 
**startDate** | [**\DateTime**](\DateTime.md) | Timestamp at which the customer started the achievement. | 
**completionDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the customer completed the achievement. | [optional] 
**endDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the achievement ends and resets for the customer. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


