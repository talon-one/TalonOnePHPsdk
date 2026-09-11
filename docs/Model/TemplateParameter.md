# # TemplateParameter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the template parameter. | 
**value** | [**object**](.md) | The parameter&#39;s bound value. Its type depends on the &#x60;valueType&#x60;. | 
**valueType** | **string** | The data type of the value, derived from the bound expression (for example &#x60;number&#x60;, &#x60;string&#x60;, &#x60;boolean&#x60;, &#x60;percent&#x60;, &#x60;time&#x60;, &#x60;(list string)&#x60;, or &#x60;(list number)&#x60;). | 
**minValue** | **float** | The minimum value allowed for this parameter. | [optional] 
**maxValue** | **float** | The maximum value allowed for this parameter. | [optional] 
**description** | **string** | A human-readable description of the parameter shown when creating campaigns from the template. | 
**attribute** | **int** | The ID of the attribute linked to this parameter. Omitted when the parameter is not linked to an attribute. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


