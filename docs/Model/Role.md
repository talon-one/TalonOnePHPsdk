# # Role

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. Not to be confused with the Integration ID, which is set by your integration layer and used in most endpoints. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**modified** | [**\DateTime**](\DateTime.md) | The exact moment this entity was last modified. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**campaignGroupID** | **int** | The ID of the [Campaign Group](https://docs.talon.one/docs/product/account/managing-campaign-groups/) this role was created for. | [optional] 
**name** | **string** | Name of the role. | 
**description** | **string** | Description of the role. | [optional] 
**members** | **int[]** | A list of user identifiers assigned to this role. | [optional] 
**acl** | [**object**](.md) | Role ACL Policy. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


