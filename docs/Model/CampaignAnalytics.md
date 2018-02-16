# CampaignAnalytics

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**campaign_id** | **int** | The ID of the campaign that owns this entity. | 
**coupon_revenue** | **float** | Amount of revenue from campaign with coupons. | 
**coupon_discount_costs** | **float** | Amount of cost caused by discounts given in the campaign with sessions involving coupons. | 
**coupons_count** | **int** | Number of coupons in the campaign. | 
**coupon_redemptions** | **int** | Number of redemptions in the campaign. | 
**campaign_redemption_limit** | **int** | Limit on overall redemptions in the campaign. | 
**coupon_redemption_limit** | **int** | Possible redemptions calculated over all coupons. | 
**coupon_redemptions_remaining** | **int** | Number of redemptions remaining on the coupon level in the campaign. | 
**campaign_redemptions_remaining** | **int** | Hard limit of redemptions remaining on the campaign level. | 
**revenue_per_redemption** | **float** | Composite to describe coupon performance. | 
**unlimited_coupons** | **int** | Number of unlimited coupons in the campaign. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


