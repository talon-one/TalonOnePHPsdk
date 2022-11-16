# # Audience

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountId** | **int** | The ID of the account that owns this entity. | 
**id** | **int** | Unique ID for this entity. Not to be confused with the Integration ID, which is set by your integration layer and used in most endpoints. | 
**created** | [**\DateTime**](\DateTime.md) | The exact moment this entity was created. | 
**name** | **string** | The human-friendly display name for this audience. | 
**sandbox** | **bool** | Indicates if this is a live or sandbox Application. | [optional] 
**description** | **string** | A description of the audience. | [optional] 
**integration** | **string** | The Talon.One-supported [3rd-party platform](https://docs.talon.one/docs/dev/technology-partners/overview) that this audience was created in.  For example, &#x60;mParticle&#x60;, &#x60;Segment&#x60;, &#x60;Selligent&#x60;, &#x60;Braze&#x60;, or &#x60;Iterable&#x60;.  **Note:** If you do not integrate with any of these platforms, do not use this property. | [optional] 
**integrationId** | **string** | The ID of this audience in the third-party integration.  **Note:** To create an audience that doesn&#39;t come from a 3rd party platform, do not use this property. | [optional] 
**createdIn3rdParty** | **bool** | Determines if this audience is a 3rd party audience or not. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


