# # User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**modified** | [**\DateTime**](\DateTime.md) | The exact moment this entity was last modified. | 
**email** | **string** | The email address associated with your account. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**inviteToken** | **string** | Invite token, empty if the user as already accepted their invite. | 
**state** | **string** | Current user state. | 
**name** | **string** | Full name | 
**policy** | [**object**](.md) | User ACL Policy | 
**latestFeedTimestamp** | [**\DateTime**](\DateTime.md) | Latest timestamp the user has been notified for feed. | [optional] 
**roles** | **int[]** | Contains a list of all roles the user is a member of | [optional] 
**applicationNotificationSubscriptions** | [**object**](.md) |  | [optional] 
**authMethod** | **string** | The Authentication method for this user | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


