# # AchievementProgressWithDefinition

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | The status of the achievement. | 
**progress** | **float** | The current progress of the customer in the achievement. | 
**startDate** | [**\DateTime**](\DateTime.md) | Timestamp at which the customer started the achievement. | [optional] 
**completionDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the customer completed the achievement. | [optional] 
**endDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the achievement ends and resets for the customer. | [optional] 
**achievementId** | **int** | The internal ID of the achievement. | 
**name** | **string** | The internal name of the achievement used in API requests. | 
**title** | **string** | The display name of the achievement in the Campaign Manager. | 
**description** | **string** | The description of the achievement in the Campaign Manager. | 
**campaignId** | **int** | The ID of the campaign the achievement belongs to. | 
**target** | **float** | The required number of actions or the transactional milestone to complete the achievement. | [optional] 
**achievementRecurrencePolicy** | **string** | The policy that determines if and how the achievement recurs. - &#x60;no_recurrence&#x60;: The achievement can be completed only once. - &#x60;on_expiration&#x60;: The achievement resets after it expires and becomes available again. | 
**achievementActivationPolicy** | **string** | The policy that determines how the achievement starts, ends, or resets. - &#x60;user_action&#x60;: The achievement ends or resets relative to when the customer started the achievement. - &#x60;fixed_schedule&#x60;: The achievement starts, ends, or resets for all customers following a fixed schedule. | 
**achievementFixedStartDate** | [**\DateTime**](\DateTime.md) | The achievement&#39;s start date when &#x60;achievementActivationPolicy&#x60; is equal to &#x60;fixed_schedule&#x60;.  **Note:** It is an RFC3339 timestamp string. | [optional] 
**achievementEndDate** | [**\DateTime**](\DateTime.md) | The achievement&#39;s end date. If defined, customers cannot participate in the achievement after this date.  **Note:** It is an RFC3339 timestamp string. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


