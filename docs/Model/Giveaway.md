# # Giveaway

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. Not to be confused with the Integration ID, which is set by your integration layer and used in most endpoints. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**code** | **string** | The code value of this giveaway. | 
**poolId** | **int** | The ID of the pool to return giveaway codes from. | 
**startDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the giveaway becomes valid. | [optional] 
**endDate** | [**\DateTime**](\DateTime.md) | Timestamp at which point the giveaway becomes invalid. | [optional] 
**attributes** | [**object**](.md) | Arbitrary properties associated with this giveaway. | [optional] 
**used** | **bool** | Indicates whether this giveaway code was given before. | [optional] 
**importId** | **int** | The ID of the Import which created this giveaway. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


