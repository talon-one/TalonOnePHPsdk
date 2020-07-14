# # LoyaltySubLedger

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total** | **float** | ⚠️ Deprecated: Please use &#39;totalActivePoints&#39; property instead. Current Balance of Loyalty Program&#39;s ledger. | 
**totalActivePoints** | **float** | Current Balance of Loyalty Program&#39;s ledger. | 
**totalPendingPoints** | **float** |  | 
**totalSpentPoints** | **float** |  | 
**totalExpiredPoints** | **float** |  | 
**transactions** | [**\TalonOne\Client\Model\LoyaltyLedgerEntry[]**](LoyaltyLedgerEntry.md) | List of all events that have happened such as additions, subtractions and expiries | [optional] 
**expiringPoints** | [**\TalonOne\Client\Model\LoyaltyLedgerEntry[]**](LoyaltyLedgerEntry.md) | List of all points that will expire | [optional] 
**activePoints** | [**\TalonOne\Client\Model\LoyaltyLedgerEntry[]**](LoyaltyLedgerEntry.md) | List of all currently active points | [optional] 
**pendingPoints** | [**\TalonOne\Client\Model\LoyaltyLedgerEntry[]**](LoyaltyLedgerEntry.md) | List of all points pending activation | [optional] 
**expiredPoints** | [**\TalonOne\Client\Model\LoyaltyLedgerEntry[]**](LoyaltyLedgerEntry.md) | List of expired points | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


