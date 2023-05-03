# # CustomerProfileIntegrationRequestV2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**attributes** | [**object**](.md) | Arbitrary properties associated with this item. | [optional] 
**evaluableCampaignIds** | **int[]** | When using the &#x60;dry&#x60; query parameter, use this property to list the campaign to be evaluated by the Rule Engine.  These campaigns will be evaluated, even if they are disabled, allowing you to test specific campaigns before activating them. | [optional] 
**audiencesChanges** | [**\TalonOne\Client\Model\ProfileAudiencesChanges**](ProfileAudiencesChanges.md) |  | [optional] 
**responseContent** | **string[]** | Extends the response with the chosen data entities. Use this property to get as much data as you need in one _Update customer profile_ request instead of sending extra requests to other endpoints. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


