# # ApplicationCustomer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. The exact moment this entity was created. The exact moment this entity was created. The exact moment this entity was created. | 
**integrationId** | **string** | The integration ID for this entity sent to and used in the Talon.One system. The integration ID for this entity sent to and used in the Talon.One system. | 
**attributes** | [**object**](.md) | Arbitrary properties associated with this item | 
**accountId** | **int** | The ID of the Talon.One account that owns this profile. The ID of the Talon.One account that owns this profile. | 
**closedSessions** | **int** | The total amount of closed sessions by a customer. A closed session is a successful purchase. | 
**totalSales** | **float** | Sum of all purchases made by this customer | 
**loyaltyMemberships** | [**\TalonOne\Client\Model\LoyaltyMembership[]**](LoyaltyMembership.md) | A list of loyalty programs joined by the customer | [optional] 
**audienceMemberships** | [**\TalonOne\Client\Model\AudienceMembership[]**](AudienceMembership.md) | A list of audiences the customer belongs to | [optional] 
**lastActivity** | [**\DateTime**](\DateTime.md) | Timestamp of the most recent event received from this customer. This field is updated on calls that trigger the rule-engine and that are not [dry requests](https://docs.talon.one/docs/dev/integration-api/dry-requests/#overlay).  For example, [reserving a coupon](https://docs.talon.one/integration-api/#operation/createCouponReservation) for a customer doesn&#39;t impact this field. | 
**advocateIntegrationId** | **string** | The Integration ID of the Customer Profile that referred this Customer in the Application. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


