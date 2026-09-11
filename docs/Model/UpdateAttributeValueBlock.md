# # UpdateAttributeValueBlock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier for this block. | [optional] [readonly] 
**type** | **string** | Identifies the block variant and determines which additional properties are present in it. | 
**tags** | **string[]** | Semantic labels attached to this block. | [optional] [readonly] 
**operator** | **string** | The update operation applied to the attribute. | 
**attribute** | [**\TalonOne\Client\Model\UpdateAttributeValueBlockAttribute**](UpdateAttributeValueBlockAttribute.md) |  | 
**value** | [**object**](.md) | The value of the attribute. Omitted when operator is set to &#x60;toggle&#x60;. | [optional] 
**target** | [**\TalonOne\Client\Model\UpdateAttributeValueBlockTarget**](UpdateAttributeValueBlockTarget.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


