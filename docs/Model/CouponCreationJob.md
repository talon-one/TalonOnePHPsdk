# # CouponCreationJob

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. Not to be confused with the Integration ID, which is set by your integration layer and used in most endpoints. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**campaignId** | **int** | The ID of the campaign that owns this entity. | 
**applicationId** | **int** | The ID of the application that owns this entity. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**usageLimit** | **int** | The number of times the coupon code can be redeemed. &#x60;0&#x60; means unlimited redemptions but any campaign usage limits will still apply. | 
**discountLimit** | **float** | The amount of discounts that can be given with this coupon code. | [optional] 
**startDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the coupon becomes valid. | [optional] 
**expiryDate** | [**\DateTime**](\DateTime.md) | Expiry date of the coupon. Coupon never expires if this is omitted, zero, or negative. | [optional] 
**numberOfCoupons** | **int** | The number of new coupon codes to generate for the campaign. Must be between 20,001 and 5,000,000. | 
**couponSettings** | [**\TalonOne\Client\Model\CodeGeneratorSettings**](CodeGeneratorSettings.md) |  | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with coupons. | 
**batchId** | **string** | The batch ID coupons created by this job will bear. | 
**status** | **string** | The current status of this request. Possible values: - &#x60;pending&#x60; - &#x60;completed&#x60; - &#x60;failed&#x60; - &#x60;coupon pattern full&#x60; | 
**createdAmount** | **int** | The number of coupon codes that were already created for this request. | 
**failCount** | **int** | The number of times this job failed. | 
**errors** | **string[]** | An array of individual problems encountered during the request. | 
**createdBy** | **int** | ID of the user who created this effect. | 
**communicated** | **bool** | Whether or not the user that created this job was notified of its final state. | 
**chunkExecutionCount** | **int** | The number of times an attempt to create a chunk of coupons was made during the processing of the job. | 
**chunkSize** | **int** | The number of coupons that will be created in a single transactions. Coupons will be created in chunks until arriving at the requested amount. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


