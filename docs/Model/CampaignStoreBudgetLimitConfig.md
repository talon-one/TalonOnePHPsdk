# # CampaignStoreBudgetLimitConfig

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | The limitable action to which this limit applies. For example: - &#x60;setDiscount&#x60; - &#x60;setDiscountEffect&#x60; - &#x60;redeemCoupon&#x60; - &#x60;createCoupon&#x60; | 
**limit** | **float** | The value to set for the limit. | 
**period** | **string** | The period on which the budget limit recurs. | [optional] 
**entities** | **string[]** | The entity that this limit applies to. | 
**imported** | **bool** | Indicates whether this limit configuration is managed via a CSV file. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


