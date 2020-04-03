# # User

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
**policy** | **string** | A blob of ACL JSON | 
**release_update** | **bool** | Update the user via email | 
**latest_feature** | **string** | Latest feature the user has been notified. | [optional] 
**roles** | **int[]** | Contains a list of all roles the user is a member of | [optional] 
**application_notification_subscriptions** | [**object**](.md) |  | [optional] 
**auth_method** | **string** | The Authentication method for this user | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


