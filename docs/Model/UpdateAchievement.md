# # UpdateAchievement

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The internal name of the achievement used in API requests. | [optional] 
**title** | **string** | The display name for the achievement in the Campaign Manager. | [optional] 
**description** | **string** | A description of the achievement. | [optional] 
**target** | **float** | The required number of actions or the transactional milestone to complete the achievement. | [optional] 
**period** | **string** | The relative duration after which the achievement ends and resets for a particular customer profile. | [optional] 
**periodEndOverride** | [**\TalonOne\Client\Model\TimePoint**](TimePoint.md) |  | [optional] 
**recurrencePolicy** | **string** | The policy that determines if and how the achievement recurs. - &#x60;no_recurrence&#x60;: The achievement can be completed only once. - &#x60;on_expiration&#x60;: The achievement resets after it expires and becomes available again. | [optional] 
**activationPolicy** | **string** | The policy that determines how the achievement starts, ends, or resets. - &#x60;user_action&#x60;: The achievement ends or resets relative to when the customer started the achievement. - &#x60;fixed_schedule&#x60;: The achievement starts, ends, or resets for all customers following a fixed schedule. | [optional] 
**fixedStartDate** | [**\DateTime**](\DateTime.md) | The achievement&#39;s start date when &#x60;activationPolicy&#x60; is set to &#x60;fixed_schedule&#x60;.  **Note:** It must be an RFC3339 timestamp string. | [optional] 
**endDate** | [**\DateTime**](\DateTime.md) | The achievement&#39;s end date. If defined, customers cannot participate in the achievement after this date.  **Note:** It must be an RFC3339 timestamp string. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


