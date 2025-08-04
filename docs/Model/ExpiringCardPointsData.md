# # ExpiringCardPointsData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expiryDate** | [**\DateTime**](\DateTime.md) | The expiration date of loyalty points. | 
**loyaltyProgramID** | **int** | The ID of the loyalty program. | 
**amountOfExpiringPoints** | **float** | The amount of loyalty points that will be expired soon. | 
**subledgerID** | **string** | The ID of the subledger within the loyalty program where these points were added. | 
**cardIdentifier** | **string** | The alphanumeric identifier of the loyalty card. | 
**usersPerCardLimit** | **int** | The maximum number of customer profiles with which a card can be shared. This can be set to &#x60;0&#x60; for no limit. | 
**profiles** | **string[]** | The integration IDs of the customer profiles linked to the card. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


