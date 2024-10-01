# # RevisionVersion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. Not to be confused with the Integration ID, which is set by your integration layer and used in most endpoints. | 
**accountId** | **int** |  | 
**applicationId** | **int** |  | 
**campaignId** | **int** |  | 
**created** | [**\DateTime**](\DateTime.md) |  | 
**createdBy** | **int** |  | 
**revisionId** | **int** |  | 
**version** | **int** |  | 
**name** | **string** | A user-facing name for this campaign. | [optional] 
**startTime** | [**\DateTime**](\DateTime.md) | Timestamp when the campaign will become active. | [optional] 
**endTime** | [**\DateTime**](\DateTime.md) | Timestamp when the campaign will become inactive. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this campaign. | [optional] 
**description** | **string** | A detailed description of the campaign. | [optional] 
**activeRulesetId** | **int** | The ID of the ruleset this campaign template will use. | [optional] 
**tags** | **string[]** | A list of tags for the campaign template. | [optional] 
**couponSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**referralSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**limits** | [**\TalonOne\Client\Model\LimitConfig[]**](LimitConfig.md) | The set of limits that will operate for this campaign version. | [optional] 
**features** | **string[]** | A list of features for the campaign template. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


