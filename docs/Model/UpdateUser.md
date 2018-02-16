# UpdateUser

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The email address associated with your account. | 
**name** | **string** | Your name. | [optional] 
**password** | **string** | Your old password. | [optional] 
**new_password** | **string** | Your new password. | [optional] 
**policy** | [**\Swagger\Client\Model\AccessControlList**](AccessControlList.md) |  | [optional] 
**state** | **string** | New state (\&quot;deactivated\&quot; or \&quot;active\&quot;) for the user. Only usable by admins for the user. | [optional] 
**release_update** | **bool** | Update the user via email | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


