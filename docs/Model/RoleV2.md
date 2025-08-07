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

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


