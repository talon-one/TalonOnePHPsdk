# # CustomerProfile

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. The time this entity was created. | 
**integrationId** | **string** | The integration ID set by your integration layer. | 
**attributes** | [**object**](.md) | Arbitrary properties associated with this item. | 
**accountId** | **int** | The ID of the Talon.One account that owns this profile. | 
**closedSessions** | **int** | The total amount of closed sessions by a customer. A closed session is a successful purchase. | 
**totalSales** | **float** | The total amount of money spent by the customer **before** discounts are applied.  The total sales amount excludes the following: - Cancelled or reopened sessions. - Returned items. | 
**loyaltyMemberships** | [**\TalonOne\Client\Model\LoyaltyMembership[]**](LoyaltyMembership.md) | **DEPRECATED** A list of loyalty programs joined by the customer. | [optional] 
**audienceMemberships** | [**\TalonOne\Client\Model\AudienceMembership[]**](AudienceMembership.md) | The audiences the customer belongs to. | [optional] 
**lastActivity** | [**\DateTime**](\DateTime.md) | Timestamp of the most recent event received from this customer. This field is updated on calls that trigger the Rule Engine and that are not [dry requests](https://docs.talon.one/docs/dev/integration-api/dry-requests/#overlay).  For example, [reserving a coupon](https://docs.talon.one/integration-api#operation/createCouponReservation) for a customer doesn&#39;t impact this field. | 
**sandbox** | **bool** | An indicator of whether the customer is part of a sandbox or live Application. See the [docs](https://docs.talon.one/docs/product/applications/overview#application-environments). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


