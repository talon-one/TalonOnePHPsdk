# # Revision

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. Not to be confused with the Integration ID, which is set by your integration layer and used in most endpoints. | 
**activateAt** | [**\DateTime**](\DateTime.md) | Timestamp when the revision will be activated. | [optional] 
**accountId** | **int** | The ID of the account that owns this entity. | 
**applicationId** | **int** | The ID of the Application that owns this entity. | 
**campaignId** | **int** | The ID of the campaign that the revision was created from. | 
**created** | [**\DateTime**](\DateTime.md) | Timestamp when the revision was created. | 
**createdBy** | **int** | The ID of the user who created this revision. | 
**activatedAt** | [**\DateTime**](\DateTime.md) | Timestamp when this revision was activated. | [optional] 
**activatedBy** | **int** | The ID of the user who activated this revision. | [optional] 
**currentVersion** | [**\TalonOne\Client\Model\RevisionVersion**](RevisionVersion.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


