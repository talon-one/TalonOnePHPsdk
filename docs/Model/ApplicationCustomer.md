# # ApplicationCustomer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. The exact moment this entity was created. The exact moment this entity was created. | 
**integrationId** | **string** | The ID used for this entity in the application system. The ID used for this entity in the application system. | 
**attributes** | [**object**](.md) | Arbitrary properties associated with this item | 
**accountId** | **int** | The ID of the Talon.One account that owns this profile. The ID of the Talon.One account that owns this profile. | 
**closedSessions** | **int** | The total amount of closed sessions by a customer. A closed session is a successful purchase. | 
**totalSales** | **float** | Sum of all purchases made by this customer | 
**loyaltyMemberships** | [**\TalonOne\Client\Model\LoyaltyMembership[]**](LoyaltyMembership.md) | A list of loyalty programs joined by the customer | [optional] 
**lastActivity** | [**\DateTime**](\DateTime.md) | Timestamp of the most recent event received from this customer | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


