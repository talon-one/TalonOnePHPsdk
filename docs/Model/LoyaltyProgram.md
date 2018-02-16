# LoyaltyProgram

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**modified** | [**\DateTime**](\DateTime.md) | The exact moment this entity was last modified. | 
**account_id** | **int** | The ID of the account that owns this entity. | 
**name** | **string** | The name of this loyalty program | 
**description** | **string** | A longer description of the loyalty program | [optional] 
**point_validity** | **int** | Validity of newly added points in months | 
**spending_rate** | **int** | Exchange rate between loyalty points and currency for spending points | [optional] 
**allow_fallback** | **bool** | Allow/disallow use of currency conversion rate for spending points | 
**allow_mixed_payment** | **bool** | Allow/disallow partial payment in currency for products bought with loyalty points | 
**tiers** | [**\Swagger\Client\Model\Tiers**](Tiers.md) |  | [optional] 
**active_applications** | [**\Swagger\Client\Model\LoyaltyProgramActivation[]**](LoyaltyProgramActivation.md) | A list of applications that have this loyalty program active | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


