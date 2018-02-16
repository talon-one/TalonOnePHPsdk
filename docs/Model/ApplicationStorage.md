# ApplicationStorage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**modified** | [**\DateTime**](\DateTime.md) | The exact moment this entity was last modified. | 
**application_id** | **int** | The ID of the application that owns this entity. | 
**name** | **string** | Identifier for the information to be saved, e.g. \&quot;Loyalty points for SKU\&quot;. | 
**datatype** | **object** | A JSON Schema describing the information to be saved in the storage | 
**description** | **string** | Description of the application store | [optional] 
**used_at** | **string[]** | array of rulesets where the application storage is used | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


