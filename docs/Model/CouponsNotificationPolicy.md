# # CouponsNotificationPolicy

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Notification name. | 
**scopes** | **string[]** |  | 
**batchingEnabled** | **bool** | Indicates whether batching is activated. | [optional] [default to true]
**includeData** | **bool** | Indicates whether to include all generated coupons. If &#x60;false&#x60;, only the &#x60;batchId&#x60; of the generated coupons is included. | [optional] 
**batchSize** | **int** | The required size of each batch of data. This value applies only when &#x60;batchingEnabled&#x60; is &#x60;true&#x60;. | [optional] [default to 1000]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


