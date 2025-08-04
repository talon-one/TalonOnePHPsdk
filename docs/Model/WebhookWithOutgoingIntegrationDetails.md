# # WebhookWithOutgoingIntegrationDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | 
**modified** | [**\DateTime**](\DateTime.md) | The time this entity was last modified. | 
**applicationIds** | **int[]** | The IDs of the Applications in which this webhook is available. An empty array means the webhook is available in &#x60;All Applications&#x60;. | 
**title** | **string** | Name or title for this webhook. | 
**description** | **string** | A description of the webhook. | [optional] 
**draft** | **bool** | Indicates if the webhook is a draft. | 
**verb** | **string** | API method for this webhook. | 
**url** | **string** | API URL (supports templating using parameters) for this webhook. | 
**headers** | **string[]** | List of API HTTP headers for this webhook. | 
**payload** | **string** | API payload (supports templating using parameters) for this webhook. | [optional] 
**params** | [**\TalonOne\Client\Model\TemplateArgDef[]**](TemplateArgDef.md) | Array of template argument definitions. | 
**enabled** | **bool** | Enables or disables webhook from showing in the Rule Builder. | 
**authenticationId** | **int** | The ID of the credential that this webhook is using. | [optional] 
**outgoingIntegrationTemplateId** | **int** | Identifier of the outgoing integration template. | [optional] 
**outgoingIntegrationTypeId** | **int** | Identifier of the outgoing integration type. | [optional] 
**outgoingIntegrationTypeName** | **string** | Name of the outgoing integration. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


