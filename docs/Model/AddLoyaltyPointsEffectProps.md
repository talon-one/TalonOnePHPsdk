# # AddLoyaltyPointsEffectProps

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name / description of this loyalty point addition. | 
**programId** | **int** | The ID of the loyalty program where these points were added. | 
**subLedgerId** | **string** | The ID of the subledger within the loyalty program where these points were added. | 
**value** | **float** | The amount of points that were added. | 
**desiredValue** | **float** | The original amount of loyalty points to be awarded. | [optional] 
**recipientIntegrationId** | **string** | The user for whom these points were added. | 
**startDate** | [**\DateTime**](\DateTime.md) | Date after which points will be valid. | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Date after which points will expire. | [optional] 
**transactionUUID** | **string** | The identifier of this addition in the loyalty ledger. | 
**cartItemPosition** | **float** | The index of the item in the cart items list on which the loyal points addition should be applied. | [optional] 
**cartItemSubPosition** | **float** | For cart items with &#x60;quantity&#x60; &gt; 1, the sub position indicates to which item the loyalty points addition is applied. | [optional] 
**cardIdentifier** | **string** | The identifier of the loyalty card, which must match the regular expression &#x60;^[A-Za-z0-9._%+@-]+$&#x60;. | [optional] 
**bundleIndex** | **int** | The position of the bundle in a list of item bundles created from the same bundle definition. | [optional] 
**bundleName** | **string** | The name of the bundle definition. | [optional] 
**awaitsActivation** | **bool** | If &#x60;true&#x60;, the loyalty points remain pending until a specific action is complete. The &#x60;startDate&#x60; parameter automatically sets to &#x60;on_action&#x60;. | [optional] 
**validityDuration** | **string** | The duration for which the points remain active, calculated relative to the  activation date.    **Note**: This value is returned only if &#x60;awaitsActivation&#x60; is &#x60;true&#x60;  and &#x60;expiryDate&#x60; is not set. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


