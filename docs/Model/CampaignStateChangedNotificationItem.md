# # CampaignStateChangedNotificationItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event** | **string** | The type of the event. Can be one of the following: [&#39;campaign_state_changed&#39;, &#39;campaign_ruleset_changed&#39;, &#39;campaign_edited&#39;, &#39;campaign_created&#39;, &#39;campaign_deleted&#39;] | 
**campaign** | [**\TalonOne\Client\Model\Campaign**](Campaign.md) |  | 
**oldState** | **string** | The campaign&#39;s old state. Can be one of the following: [&#39;running&#39;, &#39;disabled&#39;, &#39;scheduled&#39;, &#39;expired&#39;, &#39;archived&#39;] | 
**newState** | **string** | The campaign&#39;s new state. Can be one of the following: [&#39;running&#39;, &#39;disabled&#39;, &#39;scheduled&#39;, &#39;expired&#39;, &#39;archived&#39;] | 
**ruleset** | [**\TalonOne\Client\Model\Ruleset**](Ruleset.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


