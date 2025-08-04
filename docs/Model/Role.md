# # Role

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | 
**modified** | [**\DateTime**](\DateTime.md) | The time this entity was last modified. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**campaignGroupID** | **int** | The ID of the [Campaign Group](https://docs.talon.one/docs/product/account/account-settings/managing-campaign-groups) this role was created for. | [optional] 
**name** | **string** | Name of the role. | 
**description** | **string** | Description of the role. | [optional] 
**members** | **int[]** | A list of user identifiers assigned to this role. | [optional] 
**acl** | [**object**](.md) | The &#x60;Access Control List&#x60; json defining the role of the user. This represents the access control on the user level. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


