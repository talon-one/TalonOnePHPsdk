# # SecondaryDeployment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. Not to be confused with the Integration ID, which is set by your integration layer and used in most endpoints. | 
**name** | **string** | The name of the deployment. Used as subdomain, e.g. experimental.your-company.europe-west1.talon.one | 
**userId** | **int** | The ID of the user who created the deployment. | 
**status** | **string** | The status of the deployment. | 
**createdAt** | [**\DateTime**](\DateTime.md) | Timestamp when the deployment was created. | 
**activeAt** | [**\DateTime**](\DateTime.md) | Timestamp when the deployment became active. | [optional] 
**failedAt** | [**\DateTime**](\DateTime.md) | Timestamp when the deployment failed. | [optional] 
**deletedAt** | [**\DateTime**](\DateTime.md) | Timestamp when the deployment was deleted. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


