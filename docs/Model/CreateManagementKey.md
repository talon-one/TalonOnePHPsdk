# # CreateManagementKey

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name for management key. | 
**expiryDate** | [**\DateTime**](\DateTime.md) | The date the management key expires. | 
**endpoints** | [**\TalonOne\Client\Model\Endpoint[]**](Endpoint.md) | The list of endpoints that can be accessed with the key | 
**allowedApplicationIds** | **int[]** | A list of Application IDs that you can access with the management key. An empty or missing list means the management key can be used for all Applications in the account. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


