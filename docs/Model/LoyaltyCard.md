# # LoyaltyCard

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal ID of this entity. | 
**created** | [**\DateTime**](\DateTime.md) | The time this entity was created. | 
**programID** | **int** | The ID of the loyalty program that owns this entity. | 
**programName** | **string** | The integration name of the loyalty program that owns this entity. | [optional] 
**programTitle** | **string** | The Campaign Manager-displayed name of the loyalty program that owns this entity. | [optional] 
**status** | **string** | Status of the loyalty card. Can be &#x60;active&#x60; or &#x60;inactive&#x60;. | 
**blockReason** | **string** | Reason for transferring and blocking the loyalty card. | [optional] 
**identifier** | **string** | The alphanumeric identifier of the loyalty card. | 
**usersPerCardLimit** | **int** | The max amount of customer profiles that can be linked to the card. 0 means unlimited. | 
**profiles** | [**\TalonOne\Client\Model\LoyaltyCardProfileRegistration[]**](LoyaltyCardProfileRegistration.md) | Integration IDs of the customers profiles linked to the card. | [optional] 
**ledger** | [**\TalonOne\Client\Model\LedgerInfo**](LedgerInfo.md) |  | [optional] 
**subledgers** | [**map[string,\TalonOne\Client\Model\LedgerInfo]**](LedgerInfo.md) | Displays point balances of the card in the subledgers of the loyalty program. | [optional] 
**modified** | [**\DateTime**](\DateTime.md) | Timestamp of the most recent update of the loyalty card. | [optional] 
**oldCardIdentifier** | **string** | The alphanumeric identifier of the loyalty card. | [optional] 
**newCardIdentifier** | **string** | The alphanumeric identifier of the loyalty card. | [optional] 
**batchId** | **string** | The ID of the batch in which the loyalty card was created. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


