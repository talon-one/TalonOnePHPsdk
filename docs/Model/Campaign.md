# # Campaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**applicationId** | **int** | The ID of the application that owns this entity. | 
**userId** | **int** | The ID of the account that owns this entity. | 
**name** | **string** | A user-facing name for this campaign. | 
**description** | **string** | A detailed description of the campaign. | 
**startTime** | [**\DateTime**](\DateTime.md) | Timestamp when the campaign will become active. | [optional] 
**endTime** | [**\DateTime**](\DateTime.md) | Timestamp the campaign will become inactive. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this campaign. | [optional] 
**state** | **string** | A disabled or archived campaign is not evaluated for rules or coupons. | [default to 'enabled']
**activeRulesetId** | **int** | [ID of Ruleset](https://docs.talon.one/management-api/#operation/getRulesets) this campaign applies on customer session evaluation. | [optional] 
**tags** | **string[]** | A list of tags for the campaign. | 
**features** | **string[]** | The features enabled in this campaign. | 
**couponSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**referralSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**limits** | [**\TalonOne\Client\Model\LimitConfig[]**](LimitConfig.md) | The set of [budget limits](https://docs.talon.one/docs/product/campaigns/settings/managing-campaign-budgets/) for this campaign. | 
**campaignGroups** | **int[]** | The IDs of the [campaign groups](https://docs.talon.one/docs/product/account/managing-campaign-groups/) this campaign belongs to. | [optional] 
**couponRedemptionCount** | **int** | Number of coupons redeemed in the campaign. | [optional] 
**referralRedemptionCount** | **int** | Number of referral codes redeemed in the campaign. | [optional] 
**discountCount** | **float** | Total amount of discounts redeemed in the campaign. | [optional] 
**discountEffectCount** | **int** | Total number of times discounts were redeemed in this campaign. | [optional] 
**couponCreationCount** | **int** | Total number of coupons created by rules in this campaign. | [optional] 
**customEffectCount** | **int** | Total number of custom effects triggered by rules in this campaign. | [optional] 
**referralCreationCount** | **int** | Total number of referrals created by rules in this campaign. | [optional] 
**addFreeItemEffectCount** | **int** | Total number of times triggering add free item effext is allowed in this campaign. | [optional] 
**awardedGiveawaysCount** | **int** | Total number of giveaways awarded by rules in this campaign. | [optional] 
**createdLoyaltyPointsCount** | **float** | Total number of loyalty points created by rules in this campaign. | [optional] 
**createdLoyaltyPointsEffectCount** | **int** | Total number of loyalty point creation effects triggered by rules in this campaign. | [optional] 
**redeemedLoyaltyPointsCount** | **float** | Total number of loyalty points redeemed by rules in this campaign. | [optional] 
**redeemedLoyaltyPointsEffectCount** | **int** | Total number of loyalty point redemption effects triggered by rules in this campaign. | [optional] 
**callApiEffectCount** | **int** | Total number of webhook triggered by rules in this campaign. | [optional] 
**lastActivity** | [**\DateTime**](\DateTime.md) | Timestamp of the most recent event received by this campaign. | [optional] 
**updated** | [**\DateTime**](\DateTime.md) | Timestamp of the most recent update to the campaign&#39;s property. Updates to external entities used in this campaign are **not** registered by this property, such as collection or coupon updates. | [optional] 
**createdBy** | **string** | Name of the user who created this campaign if available. | [optional] 
**updatedBy** | **string** | Name of the user who last updated this campaign if available. | [optional] 
**templateId** | **int** | The ID of the Campaign Template this Campaign was created from. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


