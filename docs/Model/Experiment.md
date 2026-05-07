# # Experiment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | 
**applicationId** | **int** | The ID of the Application that owns this entity. | 
**isVariantAssignmentExternal** | **bool** | The source of the assignment. - false - The variant assignment is handled internally by Talon.One. - true - The variant assignment is handled externally. | [optional] 
**campaign** | [**\TalonOne\Client\Model\Campaign**](Campaign.md) |  | [optional] 
**activated** | [**\DateTime**](\DateTime.md) | The date and time the experiment was activated. | [optional] 
**state** | **string** | A disabled experiment is not evaluated for rules or coupons. | [default to 'disabled']
**variants** | [**\TalonOne\Client\Model\ExperimentVariant[]**](ExperimentVariant.md) |  | [optional] 
**deletedat** | [**\DateTime**](\DateTime.md) | The date and time the experiment was deleted. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


