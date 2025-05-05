# # StrikethroughLabelingNotification

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**version** | **string** | The version of the strikethrough pricing notification. | [optional] 
**validFrom** | [**\DateTime**](\DateTime.md) | Timestamp at which the strikethrough pricing update becomes valid. Set for **scheduled** strikethrough pricing updates (version: v2) only. | [optional] 
**applicationId** | **int** | The ID of the Application to which the catalog items labels belongs. | 
**currentBatch** | **int** | The batch number of the notification. Notifications might be sent in different batches. | 
**totalBatches** | **int** | The total number of batches for the notification. | 
**trigger** | [**\TalonOne\Client\Model\StrikethroughTrigger**](StrikethroughTrigger.md) |  | 
**changedItems** | [**\TalonOne\Client\Model\StrikethroughChangedItem[]**](StrikethroughChangedItem.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


