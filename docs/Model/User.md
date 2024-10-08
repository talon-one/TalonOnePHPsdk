# # User

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | 
**modified** | [**\DateTime**](\DateTime.md) | The time this entity was last modified. | 
**email** | **string** | The email address associated with the user profile. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**name** | **string** | Name of the user. | 
**state** | **string** | State of the user. | 
**inviteToken** | **string** | Invitation token of the user.  **Note**: If the user has already accepted their invitation, this is &#x60;null&#x60;. | 
**isAdmin** | **bool** | Indicates whether the user is an &#x60;admin&#x60;. | [optional] 
**policy** | [**object**](.md) | Access level of the user. | 
**roles** | **int[]** | A list of the IDs of the roles assigned to the user. | [optional] 
**authMethod** | **string** | Authentication method for this user. | [optional] 
**applicationNotificationSubscriptions** | [**object**](.md) | Application notifications that the user is subscribed to. | [optional] 
**lastSignedIn** | [**\DateTime**](\DateTime.md) | Timestamp when the user last signed in to Talon.One. | [optional] 
**lastAccessed** | [**\DateTime**](\DateTime.md) | Timestamp of the user&#39;s last activity after signing in to Talon.One. | [optional] 
**latestFeedTimestamp** | [**\DateTime**](\DateTime.md) | Timestamp when the user was notified for feed. | [optional] 
**additionalAttributes** | [**object**](.md) | Additional user attributes, created and used by external identity providers. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


