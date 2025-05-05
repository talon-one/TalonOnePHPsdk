# # AdditionalCampaignProperties

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
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

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


