# # NewMessageTest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**headers** | **map[string,string]** | List of API HTTP headers for the given message. | [optional] 
**verb** | **string** | API method for this message. | 
**url** | **string** | API URL for the given message. | 
**payload** | **string** | API payload of this message. | [optional] 
**params** | [**\TalonOne\Client\Model\TemplateArgDef[]**](TemplateArgDef.md) | Array of template argument definitions. | [optional] 
**applicationIds** | **int[]** | The IDs of the Applications in which this webhook is available. An empty array means the webhook is available in &#x60;All Applications&#x60;. | [optional] 
**authenticationId** | **int** | The ID of the credential that this webhook is using. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


