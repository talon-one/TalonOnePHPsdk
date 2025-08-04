# # CreateCouponData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**data** | [**\TalonOne\Client\Model\ExtendedCoupon[]**](ExtendedCoupon.md) | The array of coupons codes. If 1000 or fewer coupons are requested, all coupon data is sent. If 1001 or more coupons are requested, only &#x60;BatchID&#x60; is sent. | [optional] 
**totalResultSize** | **int** |  | [optional] 
**batchID** | **string** | The ID of the batch to which the coupon belongs.  **Note:** The Batch ID is generated when coupons are created. | [optional] 
**typeOfChange** | **string** |  | 
**operation** | **string** |  | 
**employeeName** | **string** |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


