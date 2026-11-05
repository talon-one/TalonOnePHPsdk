# # SupportRequestInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**applicationId** | **int** | Identifier of the Application connected to the loyalty program or the campaign. It is displayed in your Talon.One deployment URL. | 
**campaignId** | **int** | Identifier of the campaign where the coupon or gift card is created. | [optional] 
**loyaltyProgramId** | **int** | Identifier of the loyalty program. You can get the ID with the [List loyalty programs](https://docs.talon.one/management-api#tag/Loyalty/operation/getLoyaltyPrograms) endpoint. | [optional] 
**subledgerId** | **string** | ID of the subledger the points are added to or deducted from. Must be combined with &#x60;loyaltyProgramId&#x60;. The subledger must already exist in the given loyalty program. | [optional] 
**customerProfileId** | **string** | Integration ID of the customer profile linked to the support request. | 
**requestType** | **string** | Type of reward requested, including gift cards, personal coupons, and loyalty point additions or deductions. | 
**requestValue** | **float** | Requested monetary balance of the gift card or the number of loyalty points to be added or deducted. | [optional] 
**requestNote** | **string** | Notes attached to the support request. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


