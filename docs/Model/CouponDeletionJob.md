# # CouponDeletionJob

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | 
**applicationId** | **int** | The ID of the Application that owns this entity. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**filters** | [**\TalonOne\Client\Model\CouponDeletionFilters**](CouponDeletionFilters.md) |  | 
**status** | **string** | The current status of this request. Possible values: - &#x60;not_ready&#x60; - &#x60;pending&#x60; - &#x60;completed&#x60; - &#x60;failed&#x60; | 
**deletedAmount** | **int** | The number of coupon codes that were already deleted for this request. | [optional] 
**failCount** | **int** | The number of times this job failed. | 
**errors** | **string[]** | An array of individual problems encountered during the request. | 
**createdBy** | **int** | ID of the user who created this effect. | 
**communicated** | **bool** | Indicates whether the user that created this job was notified of its final state. | 
**campaignIDs** | **int[]** |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


