# ApplicationSession

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. The exact moment this entity was created. | 
**application_id** | **int** | The ID of the application that owns this entity. | 
**profile_id** | **int** | The globally unique Talon.One ID of the customer that created this entity. | [optional] 
**integration_id** | **string** | The ID used for this entity in the application system. | 
**coupon** | **string** | Any coupon code entered. | 
**referral** | **string** | Any referal code entered. | 
**state** | **string** | Indicating if the customer session is in progress (\&quot;open\&quot;), \&quot;closed\&quot;, or \&quot;cancelled\&quot;. | 
**cart_items** | [**\Swagger\Client\Model\CartItem[]**](CartItem.md) | Serialized JSON representation. | 
**discounts** | **map[string,float]** | A map of labelled discount values, in the same currency as the session. | 
**attributes** | **object** | Arbitrary properties associated with this item | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


