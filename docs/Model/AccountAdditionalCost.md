# # AccountAdditionalCost

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique ID for this entity. Not to be confused with the Integration ID, which is set by your integration layer and used in most endpoints. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**accountId** | **int** | The ID of the account that owns this entity. | 
**name** | **string** | The additional cost name that will be used in API requests and Talang. E.g. if &#x60;name &#x3D;&#x3D; \&quot;shipping\&quot;&#x60; then you would set the shipping additional cost by including an &#x60;additionalCosts.shipping&#x60; property in your request payload. | 
**title** | **string** | The human-readable name for the additional cost that will be shown in the Campaign Manager. Like &#x60;name&#x60;, the combination of entity and title must also be unique. | 
**description** | **string** | A description of this additional cost. | 
**subscribedApplicationsIds** | **int[]** | A list of the IDs of the applications that are subscribed to this additional cost. | [optional] 
**type** | **string** | The type of additional cost. The following options can be chosen: - &#x60;session&#x60;: Additional cost will be added per session, - &#x60;item&#x60;: Additional cost will be added per item, - &#x60;both&#x60;: Additional cost will be added per item and session. | [optional] [default to 'session']

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


