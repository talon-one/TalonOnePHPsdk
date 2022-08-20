# # ApplicationSession

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. Not to be confused with the Integration ID, which is set by your integration layer and used in most endpoints. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. The exact moment this entity was created. | 
**applicationId** | **int** | The ID of the application that owns this entity. | 
**profileId** | **int** | The globally unique Talon.One ID of the customer that created this entity. | [optional] 
**integrationId** | **string** | The integration ID set by your integration layer. | 
**profileintegrationid** | **string** | Integration ID of the customer for the session. | [optional] 
**coupon** | **string** | Any coupon code entered. | 
**referral** | **string** | Any referral code entered. | 
**state** | **string** | Indicates the current state of the session. Sessions can be created as &#x60;open&#x60; or &#x60;closed&#x60;. The state transitions are:  1. &#x60;open&#x60; → &#x60;closed&#x60; 2. &#x60;open&#x60; → &#x60;cancelled&#x60; 3. &#x60;closed&#x60; → &#x60;cancelled&#x60; or &#x60;partially_returned&#x60; 4. &#x60;partially_returned&#x60; → &#x60;cancelled&#x60;  For more information, see [Customer session states](/docs/dev/concepts/entities#customer-session). | 
**cartItems** | [**\TalonOne\Client\Model\CartItem[]**](CartItem.md) | Serialized JSON representation. | 
**discounts** | **map[string,float]** | **API V1 only.** A map of labeled discount values, in the same currency as the session.  If you are using the V2 endpoints, refer to the &#x60;totalDiscounts&#x60; property instead. | 
**totalDiscounts** | **float** | The total sum of the discounts applied to this session. | 
**total** | **float** | The total sum of the session before any discounts applied. | 
**attributes** | [**object**](.md) | Arbitrary properties associated with this item. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


