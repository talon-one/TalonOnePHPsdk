# # LedgerInfo

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**currentBalance** | **float** | Sum of currently active points. | 
**pendingBalance** | **float** | Sum of pending points. | 
**expiredBalance** | **float** | **DEPRECATED** Value is shown as 0. | 
**spentBalance** | **float** | **DEPRECATED** Value is shown as 0. | 
**tentativeCurrentBalance** | **float** | Sum of the tentative active points (including additions and deductions) inside the currently open session. The &#x60;currentBalance&#x60; is updated to this value when you close the session, and the effects are applied. | 
**tentativePendingBalance** | **float** | Sum of pending points (including additions and deductions) inside the currently open session. The &#x60;pendingBalance&#x60; is updated to this value when you close the session, and the effects are applied. | [optional] 
**currentTier** | [**\TalonOne\Client\Model\Tier**](Tier.md) |  | [optional] 
**pointsToNextTier** | **float** | Points required to move up a tier. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


