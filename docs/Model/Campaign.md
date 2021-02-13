# # Campaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**applicationId** | **int** | The ID of the application that owns this entity. | 
**userId** | **int** | The ID of the account that owns this entity. | 
**name** | **string** | A friendly name for this campaign. | 
**description** | **string** | A detailed description of the campaign. | 
**startTime** | [**\DateTime**](\DateTime.md) | Datetime when the campaign will become active. | [optional] 
**endTime** | [**\DateTime**](\DateTime.md) | Datetime when the campaign will become in-active. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this campaign | [optional] 
**state** | **string** | A disabled or archived campaign is not evaluated for rules or coupons. | [default to 'enabled']
**activeRulesetId** | **int** | ID of Ruleset this campaign applies on customer session evaluation. | [optional] 
**tags** | **string[]** | A list of tags for the campaign. | 
**features** | **string[]** | A list of features for the campaign. | 
**couponSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**referralSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**limits** | [**\TalonOne\Client\Model\LimitConfig[]**](LimitConfig.md) | The set of limits that will operate for this campaign | 
**campaignGroups** | **int[]** | The IDs of the campaign groups that own this entity. | [optional] 
**couponRedemptionCount** | **int** | Number of coupons redeemed in the campaign. | [optional] 
**referralRedemptionCount** | **int** | Number of referral codes redeemed in the campaign. | [optional] 
**discountCount** | **float** | Total amount of discounts redeemed in the campaign. | [optional] 
**discountEffectCount** | **int** | Total number of times discounts were redeemed in this campaign. | [optional] 
**couponCreationCount** | **int** | Total number of coupons created by rules in this campaign. | [optional] 
**referralCreationCount** | **int** | Total number of referrals created by rules in this campaign. | [optional] 
**createdLoyaltyPointsCount** | **float** | Total number of loyalty points created by rules in this campaign. | [optional] 
**createdLoyaltyPointsEffectCount** | **int** | Total number of loyalty point creation effects triggered by rules in this campaign. | [optional] 
**redeemedLoyaltyPointsCount** | **float** | Total number of loyalty points redeemed by rules in this campaign. | [optional] 
**redeemedLoyaltyPointsEffectCount** | **int** | Total number of loyalty point redemption effects triggered by rules in this campaign. | [optional] 
**lastActivity** | [**\DateTime**](\DateTime.md) | Timestamp of the most recent event received by this campaign. | [optional] 
**updated** | [**\DateTime**](\DateTime.md) | Timestamp of the most recent update to the campaign or any of its elements. | [optional] 
**createdBy** | **string** | Name of the user who created this campaign if available. | [optional] 
**updatedBy** | **string** | Name of the user who last updated this campaign if available. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


