# # Campaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**applicationId** | **int** | The ID of the Application that owns this entity. | 
**userId** | **int** | The ID of the user associated with this entity. | 
**name** | **string** | A user-facing name for this campaign. | 
**description** | **string** | A detailed description of the campaign. | 
**startTime** | [**\DateTime**](\DateTime.md) | Timestamp when the campaign will become active. | [optional] 
**endTime** | [**\DateTime**](\DateTime.md) | Timestamp when the campaign will become inactive. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this campaign. | [optional] 
**state** | **string** | A disabled or archived campaign is not evaluated for rules or coupons. | [default to 'enabled']
**activeRulesetId** | **int** | [ID of Ruleset](https://docs.talon.one/management-api#operation/getRulesets) this campaign applies on customer session evaluation. | [optional] 
**tags** | **string[]** | A list of tags for the campaign. | 
**features** | **string[]** | The features enabled in this campaign. | 
**couponSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**referralSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**limits** | [**\TalonOne\Client\Model\LimitConfig[]**](LimitConfig.md) | The set of [budget limits](https://docs.talon.one/docs/product/campaigns/settings/managing-campaign-budgets) for this campaign. | 
**campaignGroups** | **int[]** | The IDs of the [campaign groups](https://docs.talon.one/docs/product/account/managing-campaign-groups) this campaign belongs to. | [optional] 
**type** | **string** | The campaign type. Possible type values:   - &#x60;cartItem&#x60;: Type of campaign that can apply effects only to cart items.   - &#x60;advanced&#x60;: Type of campaign that can apply effects to customer sessions and cart items. | [default to 'advanced']
**linkedStoreIds** | **int[]** | A list of store IDs that you want to link to the campaign.  **Note:** Campaigns with linked store IDs will only be evaluated when there is a [customer session update](https://docs.talon.one/integration-api#tag/Customer-sessions/operation/updateCustomerSessionV2) that references a linked store. | [optional] 
**budgets** | [**\TalonOne\Client\Model\CampaignBudget[]**](CampaignBudget.md) | A list of all the budgets that are defined by this campaign and their usage.  **Note:** Budgets that are not defined do not appear in this list and their usage is not counted until they are defined. | [optional] 
**couponRedemptionCount** | **int** | This property is **deprecated**. The count should be available under *budgets* property. Number of coupons redeemed in the campaign. | [optional] 
**referralRedemptionCount** | **int** | This property is **deprecated**. The count should be available under *budgets* property. Number of referral codes redeemed in the campaign. | [optional] 
**discountCount** | **float** | This property is **deprecated**. The count should be available under *budgets* property. Total amount of discounts redeemed in the campaign. | [optional] 
**discountEffectCount** | **int** | This property is **deprecated**. The count should be available under *budgets* property. Total number of times discounts were redeemed in this campaign. | [optional] 
**couponCreationCount** | **int** | This property is **deprecated**. The count should be available under *budgets* property. Total number of coupons created by rules in this campaign. | [optional] 
**customEffectCount** | **int** | This property is **deprecated**. The count should be available under *budgets* property. Total number of custom effects triggered by rules in this campaign. | [optional] 
**referralCreationCount** | **int** | This property is **deprecated**. The count should be available under *budgets* property. Total number of referrals created by rules in this campaign. | [optional] 
**addFreeItemEffectCount** | **int** | This property is **deprecated**. The count should be available under *budgets* property. Total number of times the [add free item effect](https://docs.talon.one/docs/dev/integration-api/api-effects#addfreeitem) can be triggered in this campaign. | [optional] 
**awardedGiveawaysCount** | **int** | This property is **deprecated**. The count should be available under *budgets* property. Total number of giveaways awarded by rules in this campaign. | [optional] 
**createdLoyaltyPointsCount** | **float** | This property is **deprecated**. The count should be available under *budgets* property. Total number of loyalty points created by rules in this campaign. | [optional] 
**createdLoyaltyPointsEffectCount** | **int** | This property is **deprecated**. The count should be available under *budgets* property. Total number of loyalty point creation effects triggered by rules in this campaign. | [optional] 
**redeemedLoyaltyPointsCount** | **float** | This property is **deprecated**. The count should be available under *budgets* property. Total number of loyalty points redeemed by rules in this campaign. | [optional] 
**redeemedLoyaltyPointsEffectCount** | **int** | This property is **deprecated**. The count should be available under *budgets* property. Total number of loyalty point redemption effects triggered by rules in this campaign. | [optional] 
**callApiEffectCount** | **int** | This property is **deprecated**. The count should be available under *budgets* property. Total number of webhooks triggered by rules in this campaign. | [optional] 
**reservecouponEffectCount** | **int** | This property is **deprecated**. The count should be available under *budgets* property. Total number of reserve coupon effects triggered by rules in this campaign. | [optional] 
**lastActivity** | [**\DateTime**](\DateTime.md) | Timestamp of the most recent event received by this campaign. | [optional] 
**updated** | [**\DateTime**](\DateTime.md) | Timestamp of the most recent update to the campaign&#39;s property. Updates to external entities used in this campaign are **not** registered by this property, such as collection or coupon updates. | [optional] 
**createdBy** | **string** | Name of the user who created this campaign if available. | [optional] 
**updatedBy** | **string** | Name of the user who last updated this campaign if available. | [optional] 
**templateId** | **int** | The ID of the Campaign Template this Campaign was created from. | [optional] 
**frontendState** | **string** | The campaign state displayed in the Campaign Manager. | 
**storesImported** | **bool** | Indicates whether the linked stores were imported via a CSV file. | 
**valueMapsIds** | **int[]** | A list of value map IDs for the campaign. | [optional] 
**revisionFrontendState** | **string** | The campaign revision state displayed in the Campaign Manager. | [optional] 
**activeRevisionId** | **int** | ID of the revision that was last activated on this campaign. | [optional] 
**activeRevisionVersionId** | **int** | ID of the revision version that is active on the campaign. | [optional] 
**version** | **int** | Incrementing number representing how many revisions have been activated on this campaign, starts from 0 for a new campaign. | [optional] 
**currentRevisionId** | **int** | ID of the revision currently being modified for the campaign. | [optional] 
**currentRevisionVersionId** | **int** | ID of the latest version applied on the current revision. | [optional] 
**stageRevision** | **bool** | Flag for determining whether we use current revision when sending requests with staging API key. | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


