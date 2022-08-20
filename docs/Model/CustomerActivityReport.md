# # CustomerActivityReport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**integrationId** | **string** | The integration ID set by your integration layer. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**name** | **string** | The name for this customer profile. | 
**customerId** | **int** | The internal Talon.One ID of the customer. | 
**lastActivity** | [**\DateTime**](\DateTime.md) | The last activity of the customer. | [optional] 
**couponRedemptions** | **int** | Number of coupon redemptions in all customer campaigns. | 
**couponUseAttempts** | **int** | Number of coupon use attempts in all customer campaigns. | 
**couponFailedAttempts** | **int** | Number of failed coupon use attempts in all customer campaigns. | 
**accruedDiscounts** | **float** | Number of accrued discounts in all customer campaigns. | 
**accruedRevenue** | **float** | Amount of accrued revenue in all customer campaigns. | 
**totalOrders** | **int** | Number of orders in all customer campaigns. | 
**totalOrdersNoCoupon** | **int** | Number of orders without coupon used in all customer campaigns. | 
**campaignName** | **string** | The name of the campaign this customer belongs to. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


