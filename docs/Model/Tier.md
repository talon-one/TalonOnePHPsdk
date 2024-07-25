# # Tier

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The internal ID of the tier. | 
**name** | **string** | The name of the tier. | 
**startDate** | [**\DateTime**](\DateTime.md) | Date and time when the customer moved to this tier. This value uses the loyalty program&#39;s time zone setting. | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Date when tier level expires in the RFC3339 format (in the Loyalty Program&#39;s timezone). | [optional] 
**downgradePolicy** | **string** | Customers&#39;s tier downgrade policy. - &#x60;one_down&#x60;: Once the tier expires and if the user doesn&#39;t have enough points to stay in the tier, the user is downgraded one tier down. - &#x60;balance_based&#x60;: Once the tier expires, the user&#39;s tier is evaluated based on the amount of active points the user has at this instant. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


