# Attribute

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**modified** | [**\DateTime**](\DateTime.md) | The exact moment this entity was last modified. | 
**account_id** | **int** | The ID of the account that owns this entity. | 
**entity** | **string** | The name of the entity that can have this attribute. When creating or updating the entities of a given type, you can include an &#x60;attributes&#x60; object with keys corresponding to the &#x60;name&#x60; of the custom attributes for that type. | 
**event_type** | **string** |  | [optional] 
**name** | **string** | The attribute name that will be used in API requests and Talang. E.g. if &#x60;name &#x3D;&#x3D; \&quot;region\&quot;&#x60; then you would set the region attribute by including an &#x60;attributes.region&#x60; property in your request payload. | 
**title** | **string** | The human-readable name for the attribute that will be shown in the Campaign Manager. Like &#x60;name&#x60;, the combination of entity and title must also be unique. | 
**type** | **string** | The data type of the attribute, a &#x60;time&#x60; attribute must be sent as a string that conforms to the [RFC3339](https://www.ietf.org/rfc/rfc3339.txt) timestamp format. | 
**description** | **string** | A description of this attribute. | 
**tags** | **string[]** | A list of tags for the attribute. | 
**editable** | **bool** | Whether or not this attribute can be edited. | 
**locked** | **bool** | Indicates whether this attribute is in use. If in use only title can be changed and other operations are prohibited. | [default to false]
**last_used** | [**\DateTime**](\DateTime.md) | Timestamp that indicates last time this attribute was used by integration API call. | [optional] 
**last_used_request_uuid** | **string** | Unique id of integration API request that contained this attribute. | [optional] 
**last_used_application_id** | **int** | Indicates which application used this attribute in integration API call. | [optional] 
**used_at** | **string[]** | array of rulesets where the attribute is used | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


