# # AddLoyaltyPointsEffectProps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The reason of this loyalty point addition. | 
**programId** | **int** | The ID of the loyalty program where these points were added. | 
**subLedgerId** | **string** | The ID of the subledger within the loyalty program where these points were added. | 
**value** | **float** | The amount of points that were added. | 
**desiredValue** | **float** | (Partial rewards enabled only) The amount of loyalty points to be awarded without considering budget limitations. | [optional] 
**recipientIntegrationId** | **string** | The user for whom these points were added. | 
**startDate** | [**\DateTime**](\DateTime.md) | The date after which the added points will be valid. | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | The date after which the added points will expire. | [optional] 
**transactionUUID** | **string** | The identifier of this loyalty point transaction. | 
**cartItemPosition** | **float** | (_Add points per cart item_ only.) The index of the item in the &#x60;cartItem&#x60; object for which these points were added. | [optional] 
**cartItemSubPosition** | **float** | (_Add points per cart item_ ) The index of the item unit in its line item. | [optional] 
**cardIdentifier** | **string** | The identifier of the loyalty card, which must match the regular expression &#x60;^[A-Za-z0-9._%+@-]+$&#x60;. | [optional] 
**bundleIndex** | **int** | _(With bundles only)_ The position of the specific bundle in the list of bundles created from the same bundle definition. | [optional] 
**bundleName** | **string** | _(With bundles only)_ The name of the bundle definition. | [optional] 
**awaitsActivation** | **bool** | Indicates whether the points have an action-based start date. This property is returned only for point transactions with an action-based start date. | [optional] 
**validityDuration** | **string** | The duration for which the points remain active, calculated relative to their start date. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


