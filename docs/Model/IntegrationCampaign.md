# # IntegrationCampaign

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID of Campaign. | 
**applicationId** | **int** | The ID of the Application that owns this entity. | 
**name** | **string** | A user-facing name for this campaign. | 
**description** | **string** | A detailed description of the campaign. | [optional] 
**startTime** | [**\DateTime**](\DateTime.md) | Timestamp when the campaign will become active. | [optional] 
**endTime** | [**\DateTime**](\DateTime.md) | Timestamp when the campaign will become inactive. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this campaign. | [optional] 
**state** | **string** | The state of the campaign. | [default to 'enabled']
**tags** | **string[]** | A list of tags for the campaign. | 
**features** | **string[]** | The features enabled in this campaign. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


