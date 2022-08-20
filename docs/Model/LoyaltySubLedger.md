# # LoyaltySubLedger

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**total** | **float** | **DEPRECATED** Use &#x60;totalActivePoints&#x60; property instead. Total amount of currently active and available points in the customer&#39;s balance. | 
**totalActivePoints** | **float** | Total amount of currently active and available points in the customer&#39;s balance. | 
**totalPendingPoints** | **float** | Total amount of pending points, which are not active yet but will become active in the future. | 
**totalSpentPoints** | **float** | Total amount of points already spent by this customer. | 
**totalExpiredPoints** | **float** | Total amount of points, that expired without ever being spent. | 
**transactions** | [**\TalonOne\Client\Model\LoyaltyLedgerEntry[]**](LoyaltyLedgerEntry.md) | List of all events that have happened such as additions, subtractions and expiries. | [optional] 
**expiringPoints** | [**\TalonOne\Client\Model\LoyaltyLedgerEntry[]**](LoyaltyLedgerEntry.md) | List of all points that will expire. | [optional] 
**activePoints** | [**\TalonOne\Client\Model\LoyaltyLedgerEntry[]**](LoyaltyLedgerEntry.md) | List of all currently active points. | [optional] 
**pendingPoints** | [**\TalonOne\Client\Model\LoyaltyLedgerEntry[]**](LoyaltyLedgerEntry.md) | List of all points pending activation. | [optional] 
**expiredPoints** | [**\TalonOne\Client\Model\LoyaltyLedgerEntry[]**](LoyaltyLedgerEntry.md) | List of expired points. | [optional] 
**currentTier** | [**\TalonOne\Client\Model\Tier**](Tier.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


