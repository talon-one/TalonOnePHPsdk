# # AchievementAdditionalPropertiesV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**userId** | **int** | The ID of the user that created this achievement. | 
**createdBy** | **string** | Name of the user that created the achievement.  **Note**: This is not available if the user has been deleted. | [optional] 
**periodEndOverride** | [**\TalonOne\Client\Model\TimePoint**](TimePoint.md) |  | [optional] 
**hasProgress** | **bool** | Indicates if a customer has made progress in the achievement. | [optional] 
**status** | **string** | The status of the achievement.                                                                                               - &#x60;active&#x60;: The achievement is available to customers. - &#x60;scheduled&#x60;: The achievement has a &#x60;fixedStartDate&#x60; set in the future. - &#x60;expired&#x60;: The achievement&#39;s &#x60;endDate&#x60; is in the past. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


