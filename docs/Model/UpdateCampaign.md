# # UpdateCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A user-facing name for this campaign. | 
**description** | **string** | A detailed description of the campaign. | [optional] 
**startTime** | [**\DateTime**](\DateTime.md) | Timestamp when the campaign will become active. | [optional] 
**endTime** | [**\DateTime**](\DateTime.md) | Timestamp when the campaign will become inactive. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this campaign. | [optional] 
**state** | **string** | A disabled or archived campaign is not evaluated for rules or coupons. | [optional] [default to 'enabled']
**activeRulesetId** | **int** | ID of Ruleset this campaign applies on customer session evaluation. | [optional] 
**tags** | **string[]** | A list of tags for the campaign. | 
**features** | **string[]** | A list of features for the campaign. | 
**couponSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**referralSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**limits** | [**\TalonOne\Client\Model\LimitConfig[]**](LimitConfig.md) | The set of limits that will operate for this campaign. | 
**campaignGroups** | **int[]** | The IDs of the campaign groups that own this entity. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


