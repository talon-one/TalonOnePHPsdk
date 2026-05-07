# # RoleV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | 
**modified** | [**\DateTime**](\DateTime.md) | The time this entity was last modified. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**name** | **string** | Name of the role. | [optional] 
**description** | **string** | Description of the role. | [optional] 
**permissions** | [**\TalonOne\Client\Model\RoleV2Permissions**](RoleV2Permissions.md) |  | [optional] 
**members** | **int[]** | A list of user IDs the role is assigned to. | [optional] 
**isReadonly** | **bool** | Identifies if the role is read-only. For read-only roles, you can only assign or unassign users. You cannot edit any other properties, such as the name, description, or permissions. The &#39;isReadonly&#39; property cannot be set for new or existing roles. It is reserved for predefined roles, such as the Talon.One support role. | [optional] [default to false]

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


