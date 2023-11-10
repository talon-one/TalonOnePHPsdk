# # NewInvitation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the user being invited. | [optional] 
**email** | **string** |  | 
**acl** | **string** | The &#x60;Access Control List&#x60; json defining the role of the user.  This represents the access control on the user level. Use one of the following: - normal user: &#x60;{\&quot;Role\&quot;: 0}&#x60; - admin: &#x60;{\&quot;Role\&quot;: 127}&#x60; | [optional] 
**isAdmin** | **bool** | An indication of whether the user has admin permissions. We recommend using this flag over using the &#x60;acl&#x60; with value &#x60;{\&quot;Role\&quot;: 127}&#x60;. | [optional] 
**roles** | **int[]** | An array of role IDs to assign to the new user. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


