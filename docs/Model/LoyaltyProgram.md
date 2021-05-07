# # LoyaltyProgram

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ID of loyalty program. | 
**accountID** | **int** | The ID of the Talon.One account that owns this program. | 
**name** | **string** | The internal name for the Loyalty Program. | 
**title** | **string** | The display title for the Loyalty Program. | 
**description** | **string** | Description of our Loyalty Program. | 
**subscribedApplications** | **int[]** | A list containing the IDs of all applications that are subscribed to this Loyalty Program. | 
**defaultValidity** | **string** | Indicates the default duration after which new loyalty points should expire. The format is a number, followed by one letter indicating the unit; like &#39;1h&#39; or &#39;40m&#39;. | 
**defaultPending** | **string** | Indicates the default duration for the pending time, after which points will be valid. The format is a number followed by a duration unit, like &#39;1h&#39; or &#39;40m&#39;. | 
**allowSubledger** | **bool** | Indicates if this program supports subledgers inside the program | 
**tiers** | [**\TalonOne\Client\Model\LoyaltyTier[]**](LoyaltyTier.md) | The tiers in this loyalty program | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


