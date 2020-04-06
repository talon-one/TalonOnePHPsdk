# # ApplicationSession

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. The exact moment this entity was created. | 
**applicationId** | **int** | The ID of the application that owns this entity. | 
**profileId** | **int** | The globally unique Talon.One ID of the customer that created this entity. | [optional] 
**integrationId** | **string** | The ID used for this entity in the application system. | 
**profileintegrationid** | **string** | Integration ID of the customer for the session. | [optional] 
**coupon** | **string** | Any coupon code entered. | 
**referral** | **string** | Any referral code entered. | 
**state** | **string** | Indicating if the customer session is in progress (\&quot;open\&quot;), \&quot;closed\&quot;, or \&quot;cancelled\&quot;. | 
**cartItems** | [**\TalonOne\Client\Model\CartItem[]**](CartItem.md) | Serialized JSON representation. | 
**discounts** | **map[string,float]** | A map of labelled discount values, in the same currency as the session. | 
**total** | **float** | The total sum of the session before any discounts applied. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this item | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


