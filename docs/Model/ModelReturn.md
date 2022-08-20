# # ModelReturn

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. Not to be confused with the Integration ID, which is set by your integration layer and used in most endpoints. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**applicationId** | **int** | The ID of the application that owns this entity. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**returnedCartItems** | [**\TalonOne\Client\Model\ReturnedCartItem[]**](ReturnedCartItem.md) | List of cart items to be returned. | 
**eventId** | **int** | The event ID of that was generated for this return. | 
**sessionId** | **int** | The internal ID of the session this return was requested on. | 
**sessionIntegrationId** | **string** | The integration ID of the session this return was requested on. | 
**profileId** | **int** | The internal ID of the profile this return was requested on. | [optional] 
**profileIntegrationId** | **string** | The integration ID of the profile this return was requested on. | [optional] 
**createdBy** | **int** | ID of the user who requested this return. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


