# # RevisionVersion

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. Not to be confused with the Integration ID, which is set by your integration layer and used in most endpoints. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**applicationId** | **int** | The ID of the Application that owns this entity. | 
**campaignId** | **int** | The ID of the campaign that the revision was created from. | 
**created** | [**\DateTime**](\DateTime.md) | Timestamp when the revision was created. | 
**createdBy** | **int** | The ID of the user who created this revision. | 
**revisionId** | **int** | The ID of the revision. | 
**version** | **int** | Incrementing number representing how many revisions have been activated on this campaign. Starts from &#x60;0&#x60; for a new campaign. | 
**name** | **string** | A user-facing name for this campaign. | [optional] 
**startTime** | [**\DateTime**](\DateTime.md) | Timestamp when the campaign will become active. | [optional] 
**endTime** | [**\DateTime**](\DateTime.md) | Timestamp when the campaign will become inactive. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this campaign. | [optional] 
**description** | **string** | A detailed description of the campaign. | [optional] 
**activeRulesetId** | **int** | The ID of the ruleset this campaign will use. | [optional] 
**tags** | **string[]** | A list of tags for the campaign. | [optional] 
**couponSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**referralSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**limits** | [**\TalonOne\Client\Model\LimitConfig[]**](LimitConfig.md) | The set of limits that will operate for this campaign version. | [optional] 
**reevaluateOnReturn** | **bool** | Indicates whether this campaign should be reevaluated when a customer returns an item. | [optional] 
**features** | **string[]** | A list of features for the campaign. | [optional] 
**couponAttributes** | [**object**](.md) | Arbitrary properties associated with coupons in this campaign. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


