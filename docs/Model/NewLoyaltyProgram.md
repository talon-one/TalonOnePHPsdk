# # NewLoyaltyProgram

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**title** | **string** | The display title for the Loyalty Program. | 
**description** | **string** | Description of our Loyalty Program. | [optional] 
**subscribedApplications** | **int[]** | A list containing the IDs of all applications that are subscribed to this Loyalty Program. | [optional] 
**defaultValidity** | **string** | Indicates the default duration after which new loyalty points should expire. The format is a number, followed by one letter indicating the unit; like &#39;1h&#39; or &#39;40m&#39;. | 
**defaultPending** | **string** | Indicates the default duration for the pending time, after which points will be valid. The format is a number followed by a duration unit, like &#39;1h&#39; or &#39;40m&#39;. | 
**allowSubledger** | **bool** | Indicates if this program supports subledgers inside the program | 
**usersPerCardLimit** | **int** | The max amount of user profiles with whom a card can be shared. This can be set to 0 for no limit. This property is only used when &#x60;cardBased&#x60; is &#x60;true&#x60;. | [optional] 
**name** | **string** | The internal name for the Loyalty Program. This is an immutable value. | 
**tiers** | [**\TalonOne\Client\Model\NewLoyaltyTier[]**](NewLoyaltyTier.md) | The tiers in this loyalty program | [optional] 
**timezone** | **string** | A string containing an IANA timezone descriptor. | 
**cardBased** | **bool** | Defines the type of loyalty program: - &#x60;true&#x60;: the program is a card-based. - &#x60;false&#x60;: the program is profile-based. | [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


