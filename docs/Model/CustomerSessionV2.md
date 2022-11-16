# # CustomerSessionV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. Not to be confused with the Integration ID, which is set by your integration layer and used in most endpoints. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. The exact moment this entity was created. | 
**integrationId** | **string** | The integration ID set by your integration layer. | 
**applicationId** | **int** | The ID of the application that owns this entity. | 
**profileId** | **string** | ID of the customer profile set by your integration layer.  **Note:** If the customer does not yet have a known &#x60;profileId&#x60;, we recommend you use a guest &#x60;profileId&#x60;. | 
**couponCodes** | **string[]** | Any coupon codes entered.  **Important**: If you [create a coupon budget](https://docs.talon.one/docs/product/campaigns/settings/managing-campaign-budgets/#budget-types) for your campaign, ensure the session contains a coupon code by the time you close it. | [optional] 
**referralCode** | **string** | Any referral code entered.  **Important**: If you [create a referral budget](https://docs.talon.one/docs/product/campaigns/settings/managing-campaign-budgets/#budget-types) for your campaign, ensure the session contains a referral code by the time you close it. | [optional] 
**loyaltyCards** | **string[]** | Any loyalty cards used. | [optional] 
**state** | **string** | Indicates the current state of the session. Sessions can be created as &#x60;open&#x60; or &#x60;closed&#x60;. The state transitions are:  1. &#x60;open&#x60; → &#x60;closed&#x60; 2. &#x60;open&#x60; → &#x60;cancelled&#x60; 3. Either:    - &#x60;closed&#x60; → &#x60;cancelled&#x60; (**only** via [Update customer session](https://docs.talon.one/integration-api#tag/Customer-sessions/operation/updateCustomerSessionV2)) or    - &#x60;closed&#x60; → &#x60;partially_returned&#x60; (**only** via [Return cart items](https://docs.talon.one/integration-api#tag/Customer-sessions/operation/returnCartItems)) 4. &#x60;partially_returned&#x60; → &#x60;cancelled&#x60;  For more information, see [Customer session states](/docs/dev/concepts/entities#customer-session). | [default to 'open']
**cartItems** | [**\TalonOne\Client\Model\CartItem[]**](CartItem.md) | The items to add to this sessions. - If cart item flattening is disabled: **Do not exceed 1000 items** (regardless of their &#x60;quantity&#x60;) per request. - If cart item flattening is enabled: **Do not exceed 1000 items** and ensure the sum of all cart item&#39;s &#x60;quantity&#x60; **does not exceed 10.000** per request. | 
**additionalCosts** | [**map[string,\TalonOne\Client\Model\AdditionalCost]**](AdditionalCost.md) | Use this property to set a value for the additional costs of this session, such as a shipping cost.  They must be created in the Campaign Manager before you set them with this property. See [Managing additional costs](https://docs.talon.one/docs/product/account/dev-tools/managing-additional-costs/). | [optional] 
**identifiers** | **string[]** | Session custom identifiers that you can set limits on or use inside your rules.  For example, you can use IP addresses as identifiers to potentially identify devices and limit discounts abuse in case of customers creating multiple accounts. See the [tutorial](https://docs.talon.one/docs/dev/tutorials/using-identifiers/).  **Important**: If you [create a unique identifier budget](https://docs.talon.one/docs/product/campaigns/settings/managing-campaign-budgets/#budget-types) for your campaign, ensure the session contains an identifier by the time you close it. | [optional] 
**attributes** | [**object**](.md) | Use this property to set a value for the attributes of your choice. Attributes represent any information to attach to your session, like the shipping city.  You can use [built-in attributes](https://docs.talon.one/docs/dev/concepts/attributes#built-in-attributes) or [custom ones](https://docs.talon.one/docs/dev/concepts/attributes#custom-attributes). Custom attributes must be created in the Campaign Manager before you set them with this property. | 
**firstSession** | **bool** | Indicates whether this is the first session for the customer&#39;s profile. Will always be true for anonymous sessions. | 
**total** | **float** | The total sum of cart-items, as well as additional costs, before any discounts applied. | 
**cartItemTotal** | **float** | The total sum of cart-items before any discounts applied. | 
**additionalCostTotal** | **float** | The total sum of additional costs before any discounts applied. | 
**updated** | [**\DateTime**](\DateTime.md) | Timestamp of the most recent event received on this session. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


