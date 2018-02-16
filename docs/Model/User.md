# User

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**modified** | [**\DateTime**](\DateTime.md) | The exact moment this entity was last modified. | 
**email** | **string** | The email address associated with your account. | 
**account_id** | **int** | The ID of the account that owns this entity. | 
**invite_token** | **string** | Invite token, empty if the user as already accepted their invite. | 
**state** | **string** | Current user state. | 
**name** | **string** | Full name | 
**last_activity** | [**\DateTime**](\DateTime.md) | Last time user used management API | [optional] 
**policy** | [**map[string,\Swagger\Client\Model\Policy]**](Policy.md) | Access policy for the user as json object. | 
**release_update** | **bool** | Update the user via email | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


