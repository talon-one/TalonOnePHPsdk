# # Picklist

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | 
**type** | **string** | The type of allowed values in the picklist. If type time is chosen, it must be an RFC3339 timestamp string. | 
**values** | **string[]** | The list of allowed values provided by this picklist. | 
**modifiedBy** | **int** | ID of the user who last updated this effect if available. | [optional] 
**createdBy** | **int** | ID of the user who created this effect. | 
**accountId** | **int** | The ID of the account that owns this entity. | [optional] 
**imported** | **bool** | Imported flag shows that a picklist is imported by a CSV file or not | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


