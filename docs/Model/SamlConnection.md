# # SamlConnection

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**assertion_consumer_service_url** | **string** | The location where the SAML assertion is sent with a HTTP POST. | 
**account_id** | **int** | The ID of the account that owns this entity. | 
**name** | **string** | ID of the SAML service. | 
**enabled** | **bool** | Determines if this SAML connection active. | 
**issuer** | **string** | Identity Provider Entity ID. | 
**sign_on_url** | **string** | Single Sign-On URL. | 
**sign_out_url** | **string** | Single Sign-Out URL. | [optional] 
**metadata_url** | **string** | Metadata URL. | [optional] 
**audience_uri** | **string** | The application-defined unique identifier that is the intended audience of the SAML assertion. This is most often the SP Entity ID of your application. When not specified, the ACS URL will be used. | 
**id** | **int** | Unique ID for this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


