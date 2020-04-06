# # CustomerSessionV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**integrationId** | **string** | The ID used for this entity in the application system. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**applicationId** | **int** | The ID of the application that owns this entity. | 
**profileId** | **string** | ID of the customers profile as used within this Talon.One account. May be omitted or set to the empty string if the customer does not yet have a known profile ID. | 
**couponCodes** | **string[]** | Any coupon codes entered. | [optional] 
**referralCode** | **string** | Any referral code entered. | [optional] 
**state** | **string** | Indicates the current state of the session. All sessions must start in the \&quot;open\&quot; state, after which valid transitions are...  1. open -&gt; closed 2. open -&gt; cancelled 3. closed -&gt; cancelled | [default to 'open']
**cartItems** | [**\TalonOne\Client\Model\CartItem[]**](CartItem.md) | All items the customer will be purchasing in this session | 
**additionalCosts** | [**map[string,\TalonOne\Client\Model\AdditionalCost]**](AdditionalCost.md) | Any costs associated with the session that can not be explicitly attributed to cart items. Examples include shipping costs and service fees. | [optional] 
**identifiers** | **string[]** | Identifiers for the customer, this can be used for limits on values such as device ID. | [optional] 
**attributes** | [**object**](.md) | A key-value map of the sessions attributes. The potentially valid attributes are configured in your accounts developer settings. | 
**firstSession** | **bool** | Indicates whether this is the first session for the customer&#39;s profile. Will always be true for anonymous sessions. | 
**total** | **float** | The total sum of cart-items, as well as additional costs, before any discounts applied | 
**cartItemTotal** | **float** | The total sum of cart-items before any discounts applied | 
**additionalCostTotal** | **float** | The total sum of additional costs before any discounts applied | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


