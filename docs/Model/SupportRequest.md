# # SupportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Identifier of the support request. | 
**applicationId** | **int** | Identifier of the Application connected to the loyalty program or the campaign. It is displayed in your Talon.One deployment URL. | 
**campaignId** | **int** | Identifier of the campaign where the coupon or gift card is created. | [optional] 
**loyaltyProgramId** | **int** | Identifier of the loyalty program where the points are added or deducted. | [optional] 
**subledgerId** | **int** | Identifier of the subledger the points are added to or deducted from. If there is no existing subledger with this ID, the subledger is created automatically. | [optional] 
**createdByUser** | **string** | Email address of the customer support agent who created the support request. | 
**createdAt** | [**\DateTime**](\DateTime.md) | Timestamp when the request was made. | 
**customerProfileId** | **string** | Integration ID of the customer profile linked to the support request. | 
**requestType** | **string** | Type of reward requested, including gift cards, personal coupons, and loyalty point additions or deductions. | 
**requestValue** | **float** | Requested monetary balance of the gift card or the number of loyalty points to be added or deducted. | [optional] 
**requestNote** | **string** | Notes attached to the support request. | 
**requestStatus** | **string** | Current status of the support request. | 
**processedAt** | [**\DateTime**](\DateTime.md) | Timestamp when the request was approved or rejected. | [optional] 
**processingNote** | **string** | Notes attached by the admin when rejecting or approving a request. | [optional] 
**processedByUser** | **string** | Email address of the admin who approved or rejected the support request. | [optional] 
**couponCode** | **string** | Coupon code associated with the approved support request. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


