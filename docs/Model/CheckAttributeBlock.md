# # CheckAttributeBlock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for this block. | [optional] [readonly] 
**type** | **string** | A block discriminator of type &#x60;checkAttribute&#x60;. | 
**tags** | **string[]** | Semantic labels attached to this block. | [optional] [readonly] 
**operator** | **string** | The comparison operator applied to the attribute. | 
**attribute** | [**object**](.md) | The attribute path identifier (e.g. \&quot;$Session.Total\&quot;). | 
**value** | [**object**](.md) | The comparison value for scalar operators. | [optional] 
**min** | [**object**](.md) | The minimum value allowed for the &#x60;between&#x60; operator. | [optional] 
**max** | [**object**](.md) | The maximum value allowed for the &#x60;between&#x60; operator. | [optional] 
**start** | [**object**](.md) | The start value for the &#x60;within&#x60; operator. | [optional] 
**end** | [**object**](.md) | The end value for the &#x60;within&#x60; operator. | [optional] 
**startInclusive** | **bool** | When &#x60;true&#x60;, the &#x60;start&#x60; value is included in the range for the &#x60;within&#x60; operator. | [optional] 
**endInclusive** | **bool** | When &#x60;true&#x60;, the &#x60;end&#x60; value is included in the range for the &#x60;within&#x60; operator. | [optional] 
**timezoneInsensitive** | **bool** | Indicates whether the &#x60;within&#x60; operator ignores time zones and compares the wall-clock time only. When &#x60;false&#x60;, time zones are taken into account. | [optional] 
**values** | [**object**](.md) | The set of values to match against for list operators. For location operators (&#x60;in&#x60;, &#x60;not(in)&#x60;), an array of objects with a &#x60;geometry&#x60; (see &#x60;GeoJSONGeometry&#x60;) and an optional &#x60;name&#x60;, or a string reference to a list attribute. | [optional] 
**count** | [**object**](.md) | The count threshold for &#x60;containsAtLeast&#x60; and &#x60;containsExactly&#x60; operators. | [optional] 
**onFailure** | **object[]** | Promotion blocks evaluated when this block fails or returns false. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


