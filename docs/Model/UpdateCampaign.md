# # UpdateCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | A friendly name for this campaign. | 
**description** | **string** | A detailed description of the campaign. | [optional] 
**start_time** | [**\DateTime**](\DateTime.md) | Datetime when the campaign will become active. | [optional] 
**end_time** | [**\DateTime**](\DateTime.md) | Datetime when the campaign will become in-active. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this campaign | [optional] 
**state** | **string** | A disabled or archived campaign is not evaluated for rules or coupons. | [optional] [default to 'enabled']
**active_ruleset_id** | **int** | ID of Ruleset this campaign applies on customer session evaluation. | [optional] 
**tags** | **string[]** | A list of tags for the campaign. | 
**features** | **string[]** | A list of features for the campaign. | 
**coupon_settings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**referral_settings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**limits** | [**\TalonOne\Client\Model\LimitConfig[]**](LimitConfig.md) | The set of limits that will operate for this campaign | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


